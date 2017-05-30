<?php
class adminController
{	
	private $auth = "";
	//在调用adminController的时候在构造函数里面判断是否要进行登录
	public function __construct(){
		$authobj = M('auth');
		$this->auth = $authobj->getAuth(); 
		if (empty($this->auth) && PC::init_method()!='login') {
			$this->showMessage('请登录后再进行相关的操作','index.php?controller=admin&method=login');
		}
	}

	public function login(){
		if (empty($this->auth)) {
			if ($_POST) {
				$this->sublogin();
			}else{
				VIEW::display('admin/login.html');
			}
		}else{
				header("Location:index.php?controller=admin&method=index");			
		}

		/*if ($_POST) {
			$this->sublogin();
		}else{
			VIEW::display('admin/login.html');
		}*/
		
	}

	public function index(){
		$news = M('news');
		$data = $news->get_news_num();
		$data = implode('', $data);
		VIEW::assign(['newsnum'=>$data]);
		VIEW::display('admin/index.html');
	}

	public function sublogin(){
		$auth = M('auth');
		if ($auth->loginsubmit()) {
			header("Location:index.php?controller=admin&method=index");
		}else{
			VIEW::display('admin/login.html');
		}
	}

	public function newslist(){
		$newsobj = M('news');
		$data = $newsobj->get_news_list();
		VIEW::assign(['data'=>$data]);
		VIEW::display('admin/newslist.html');
	}

	public function newsdel(){
		$newsobj = M('news');
		$bool = $newsobj->del_news();
		/*echo gettype($bool);
		var_dump($bool);*/
		if ($bool) {
			$this->showMessage('删除成功','index.php?controller=admin&method=newslist');
		}else{
			$this->showMessage('删除失败','index.php?controller=admin&method=newslist');
		}
	}

	public function newsadd(){
		if ($_POST) {
			$this->deldata();
		}else{
			if (empty($_GET['id'])) {
				VIEW::display('admin/newsadd.html');
			}else{
				$newsobj = M('news');
				$data = $newsobj->get_one_news();
				VIEW::assign(['data'=>$data]);
				VIEW::display('admin/newsadd.html');
			}	
		}	
	}

	public function deldata(){
		$newsobj = M('news');
		$res = $newsobj->get_add_info();

		switch ($res['info']) {
			case 'errs':
				// 对用户进行数据的插入失败后，返回重新插入数据，保留之前输入的数据
				if (empty($_POST['id'])) {
					VIEW::assign(['data'=>$res]);
					VIEW::display('admin/newsadd.html');
				}else{
					$this->showMessage('操作有误','index.php?controller=admin&method=newsadd&id='.$_POST['id']);
				}
				break;
			case 'insert':
				$this->showMessage('插入成功','index.php?controller=admin&method=newslist');
				break;
			case 'update':
				$this->showMessage('更新成功','index.php?controller=admin&method=newslist');
				break;
		}

	}


	public function logout(){
		unset($_SESSION['auth']);
		$this->showMessage('注销成功',"index.php?controller=admin&method=login");
		// header('Location:index.php?controller=admin&method=login');
	} 

	public function showMessage($str,$url){
		echo "<meta charset='utf-8'>";
		echo "<script type='text/javascript'>alert('$str');window.location.href='$url';</script>";
	}

} 
 ?>
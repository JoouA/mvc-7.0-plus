<?php
/*
	authModel的function 是验证登录的正确与否
*/
class authModel
{	
	private $auth = '';
	private $table = 'admin';

	//构造函数
	public function __construct(){
		// 将登录的信息放在session里面，对auth进行初始化

		if (isset($_SESSION['auth'])&& !empty($_SESSION['auth'])) {
			$this->auth = $_SESSION['auth'];
		}

	}

	public function loginsubmit(){
		if (empty($_POST['username']) || empty($_POST['password'])) {
			return false;
		}

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = 'select * from '.$this->table.' where username='."'".$username."'";
		$info = DB::findOne($sql);

		if (($info['username']==$username)&&($info['password']==md5($password))) {
			$_SESSION['auth'] = $username;
			return true;
		}else{
			return false;
		}
	}

	public function getAuth(){
		return $this->auth;
	}


} 
 ?>
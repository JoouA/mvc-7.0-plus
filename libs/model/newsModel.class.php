<?php
class newsModel
{	private $table = "news";
	public function get_news_list(){
		$sql = 'select * from '.$this->table.' order by dateline desc';
		$datas =  DB::findAll($sql);
		foreach ($datas as $key => $value) {
			$datas[$key]['dateline'] = date('Y-m-d H:i',$value['dateline']);
		}
		return $datas;
	}	

	public function get_one_news(){
		$id = $_GET['id'];
		$sql = 'select * from '.$this->table.' where id='.$id;
		$data = DB::findOne($sql);
		$data['dateline'] = date('Y-m-d H:i',$data['dateline']);
		return $data;
	}

	public function get_news_num(){
		$sql = 'select count(*) as newsnum from news';
		$data = DB::findOne($sql);
		return $data;
	}

	public function del_news(){
		$id = $_GET['id'];
		$sql = 'select *from '.$this->table.' where id='.$id;
		$bools = DB::findOne($sql);
		if ($bools===NULL) {
			return false;
		}else{
			DB::del($this->table,"id=$id");
			return true;
		}
		// return DB::findOne('select * from news where id=1000');
	}

	public function get_add_info(){
		$data['title'] = $_POST['title'];
		$data['content'] = $_POST['content'];
		$data['author'] = $_POST['author'];
		$data['fromip'] = $_POST['fromip'];
		$data['dateline'] = time();

		if (empty($_POST['title']) || empty($_POST['content']) ) {
			$data['info'] = "errs";
			return $data;
		}


		if (!empty($_POST['id'])) {
			DB::update($this->table,$data,'id='.$_POST['id']);	
			$data['info'] = "update";
			return $data;	
		}else{

			DB::insert($this->table,$data);
			$data['info'] = "insert";
			return $data;	
		}	
			
	}

} 
 ?>
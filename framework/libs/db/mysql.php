<?php
class mysql
{
	private $con;

	public function err($err){
		die('数据库操作有误'.$err);
	}

	public function connect($dbconfig){
		extract($dbconfig);

		$this->con = mysqli_connect($dbhost,$dbuser,$dbpssword);
		if (! $this->con) {
			$this->err(mysqli_error());
		}

		if(!mysqli_select_db($this->con,$dbnames)){
			$this->err(mysqli_error());
		}

		$this->query('set names '.$dbcharset);
	}

	public function query($sql){
		if (!($res = mysqli_query($this->con,$sql))) {
			echo "error";
			$this->err(mysqli_error());
		}else{
			return $res;
		}
	}

	public function findOne($sql){
		$res = $this->query($sql);
		$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
		
		return isset($row)? $row : NULL; 
	}

   public function findAll($sql){
   		$res = $this->query($sql);
		$list =[];
		while( $row = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
		 	$list[] = $row;
		 }
		return isset($list)? $list : NULL; 
   }

   public function insert($table,$arr){
   		foreach ($arr as $key => $value) {
   			$keysval[] = '`'.$key.'`';
   			$values[] = "'".$value."'"; 
   		}
   		$strKey = implode(',',$keysval);
   		$strVal =  implode(',',$values);

   		$sql = 'insert into '.$table.'('.$strKey.')'.' values('.$strVal.')';
   		
   		$this->query($sql);

   		return mysqli_insert_id($this->con);

   }

   public function update($table,$arr,$where){
   		// update $table set  'name'='xxx','title'='xxx' where 
   		$str = []; 
   		foreach ($arr as $key => $value) {
   			$str[] = '`'.$key.'`'.'='."'$value'";
   		}
   		$keyStr = implode(',', $str);	
   		$sql = 'update '.$table.' set '.$keyStr.' where '.$where;
   		
   		$this->query($sql);
   }

   public function del($table,$where){
   		$sql = 'delete from '.$table.' where '.$where;
   		$this->query($sql);
   }
} 
 ?>
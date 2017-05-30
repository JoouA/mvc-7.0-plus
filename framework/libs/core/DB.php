<?php
class DB
{
	private static  $db;

	public static function DB_init($dbtype,$dbconfig){
		self::$db = new $dbtype();
		self::$db->connect($dbconfig);
	}

	public static  function query($sql){
		return self::$db->query($sql);
	}

	public static function findOne($sql){
		return self::$db->findOne($sql);
	}

	public static function findAll($sql){
		return self::$db->findAll($sql);
	}


	public static function insert($table,$arr){
		return self::$db->insert($table,$arr);
	}

	public static function update($table,$arr,$where){
		self::$db->update($table,$arr,$where);
	}

	public static function del($table,$where){
		self::$db->del($table,$where);
	}
}

 ?>
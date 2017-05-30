<?php
	require_once "include.list.php";
	$dir = str_replace( DIRECTORY_SEPARATOR , '/', dirname(__FILE__)) ;
	// echo $dir;
	foreach ($paths as $key => $value) {
		require_once $dir.'/'.$value;
	}


class PC
{
	private static  $controller;
	private static  $method;
	private static  $config;

	
	public static  function init_view($config){
		VIEW::view_init($config);
	}

	public static  function  init_db($config){
		DB::DB_init('mysql',$config);
	}

	public static function  init_controller(){
		return isset($_GET['controller']) ? $_GET['controller'] : "index";
	}

	public static function  init_method(){
		return isset($_GET['method']) ? $_GET['method'] : "index";
	}
	public static function run($config){
		self::init_view($config['smartyconfig']);

		self::init_db($config['mysqlconfig']);

		self::$controller = self::init_controller();

		self::$method = self::init_method();

		C(self::$controller,self::$method);
	}


} 
 ?>
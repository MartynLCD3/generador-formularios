<?php

namespace Models;

class Connection{

	private $db_user = "root";
	private	$db_pass = "";
	private	$db_host = "localhost";
	private	$db_name = "app";
	
	private static $connection;

	public function run(){

		if(null !== self::$connection){
		     	 return self::$connection;
	        }

		try{
			$mysql_connect_str = "mysql:host={$this->db_host};dbname={$this->db_name}";
		        $connect = new \PDO($mysql_connect_str, $this->db_user, $this->db_pass);
   			$connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$connect->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
			$connect->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

			return self::$connection = $connect;
		
		}catch(\PDOException $e){
			echo 'Excepción capturada: ',  $e->getMessage();
		}
	}
}

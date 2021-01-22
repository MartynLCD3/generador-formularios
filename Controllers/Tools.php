<?php

namespace Controllers;

final class Tools{
	
	public static function _try_again(){
		require_once "./Views/error/try.php";
	}

	public static function _dashboard(){
		$dashboard = new \Config\Helper();
		$dashboard->home();
	}

	public static function _user_exist(){
		require_once "./Views/src/header.php";
		require_once "./Views/error/user_exist.php";
	}

	public static function _user_log_error(){
		require_once "./Views/src/header.php";
		require_once "./Views/error/user_log_error.php";
	}
}

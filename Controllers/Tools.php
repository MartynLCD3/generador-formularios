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
}

<?php

namespace Controllers;
session_start();

final class Home{
	
	public function index(){
		self::_destroy_session();
		self::_session_control();
		self::_views();
	}

	private static function _session_control(){
		$control = new \Controllers\Session_State();
		$control->verify();
	}

	private static function _views(){
		require_once "./Views/src/header.php";
		require_once "./Views/home/dashboard.php";
		require_once "./Views/src/footer.php";
	}

	private static function _destroy_session(){
		if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["send-d"])){
			$session = new \Controllers\Session_State();
			$session->destroy_this_session();
			$helper = new \Config\Helper();
			$helper->home();	
		}
	}	
}

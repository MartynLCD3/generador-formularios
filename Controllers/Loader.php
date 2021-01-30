<?php

namespace Controllers;
session_start();
	
final class Loader{

	public function run(){
		self::_session_control();
		self::_data_control();
		self::_views();
	}
	
	private static function _views(){
		require_once "./Views/src/header.html";
		require_once "./Views/loader/transition.html";
		require_once "./Views/src/footer.html";
	}

	private static function _session_control(){
		$control = new \Controllers\Session_State();
		$control->verify();
	}

	private static function _data_control(){
		$control = new \Models\Check_Base();
		$control->verify();
	}
}

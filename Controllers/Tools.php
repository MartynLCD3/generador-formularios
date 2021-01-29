<?php

namespace Controllers;

final class Tools{
	
	public static function _try_again(){
		require_once "./Views/error/try.html";
	}

	public static function _dashboard(){
		$dashboard = new \Config\Helper();
		$dashboard->home();
	}

	public static function _user_exist(){
		require_once "./Views/src/header.html";
		require_once "./Views/error/user_exist.html";
	}

	public static function _user_log_error(){
		require_once "./Views/src/header.html";
		require_once "./Views/error/user_log_error.html";
	}

	public static function _password_changed(){
		require_once "./Views/src/header.html";
		require_once "./Views/success/password_changed.html";
	}

	public static function _password_not_changed(){
		require_once "./Views/src/header.html";
		require_once "./Views/error/password_not_changed.html";
	}

	public static function _new_user_created(){
		require_once "./Views/src/header.html";
		require_once "./Views/success/new_user_created.html";
	}

	public static function _question_required(){
		require_once "./Views/src/header.html";
		require_once "./Views/error/question_required.html";
	}

	public static function _question_error(){
		require_once "./Views/src/header.html";
		require_once "./Views/error/question_error.html";
	}

	public static function _loader(){
		require_once "./Views/src/header.html";
		require_once "./Views/loader/transition.html";
	}
}

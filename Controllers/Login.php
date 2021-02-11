<?php

namespace Controllers;

class Login{

	const LIMIT = 0;	

	public function index(){	
		self::_session_control();	
		self::_captured_credentials_login();
		self::_captured_credentials_register();
		self::_captured_credentials_recover();
		self::_views();
	}

	private static function _views(){
		require_once "./Views/src/header.html";
		require_once "./Views/form/login.html";
		require_once "./Views/src/footer.html";
	}

	private static function _captured_credentials_login(){
		if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["send"])){
			
			$email_credential = $_POST["email"];
			$password_credential = $_POST["password"];

			if(
				empty($email_credential) ||
			  	empty($password_credential) ||
				strlen($password_credential) < self::LIMIT ||
				strpos($email_credential,"@") === FALSE
			){
				\Controllers\Tools::_try_again();
			}
			else{
				$email = trim($email_credential);
				$password = $password_credential;	
				$generate = new \Models\Start_Session();
				$generate->new_session($email,$password);	
			}
		}
	}

	private static function _captured_credentials_register(){
		if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["send-register"])){

			$username_credential = $_POST["username"];
			$email_credential = $_POST["email"];
			$password_credential = $_POST["password"];

			if(
				empty($username_credential) ||
				empty($email_credential) ||
			  	empty($password_credential) ||
				strlen($password_credential) < self::LIMIT ||
				strpos($email_credential,"@") === FALSE
			){
				\Controllers\Tools::_try_again();
			}
			else{
				$username = trim($username_credential);
				$email = trim($email_credential);
				$password = password_hash($password_credential,PASSWORD_DEFAULT);
				$generate = new \Models\Register();
				$generate->new_user($username,$email,$password);
			}
		}
	}

	private static function _captured_credentials_recover(){
		if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["send-recover"])){
			
			$email_credential = $_POST["email"];
			$new_password = $_POST["password"];

			if(
				empty($email_credential) ||
			  	empty($new_password) ||
				strlen($new_password) < self::LIMIT ||
				strpos($email_credential,"@") === FALSE
			){
				\Controllers\Tools::_try_again();
			}
			else{	
				$password = password_hash($new_password,PASSWORD_DEFAULT);
				$email = trim($email_credential);
				$generate = new \Models\Modify();
				$generate->change_password($email,$password);	
			}
		}
	}

	private static function _session_control(){
		if(isset($_SESSION["user_session"])){
			\Controllers\Tools::_dashboard();
		}		
	}
}

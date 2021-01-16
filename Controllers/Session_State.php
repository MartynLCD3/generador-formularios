<?php

namespace Controllers;

final class Session_State{
	
	public function verify(){
		if(!isset($_SESSION["user_session"])){
			$helper = new \Config\Helper();
			$helper->login();		
		}else{
			echo json_encode($_SESSION["user_session"]);
		}
	}

	public function destroy_this_session(){
		session_start();
		session_unset();
		session_destroy();
	}
}

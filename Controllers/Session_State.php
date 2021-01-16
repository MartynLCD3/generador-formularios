<?php

namespace Controllers;

final class Session_State{
	
	public function verify(){
		self::_state();
	}

	private static function _state(){
		if(!isset($_SESSION["user_session"])){
			$helper = new \Config\Helper();
			$helper->login();		
		}else{
			echo json_encode($_SESSION["user_session"]);
		}
	}
}

<?php

namespace Controllers;

final class Session_State{
	
	public function verify(){
		if(!isset($_SESSION["user_session"])){
			$helper = new \Config\Helper();
			$helper->login();		
		}else{
			$format = $_SESSION["user_session"];
			$session = "[" . json_encode($format,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) . "]";
			$fp = fopen("session.json","w");
			fwrite($fp,$session);
			fclose($fp);
		}
	}
}

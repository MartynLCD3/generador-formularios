<?php

namespace Controllers;

final class Logout{
	
	public function sign_out(){
		session_start();
		session_unset();
		session_destroy();
		unlink("../session.json");
		header("location:http://localhost:8000/");	
	}
}

$close_session = new \Controllers\Logout();
$close_session->sign_out();

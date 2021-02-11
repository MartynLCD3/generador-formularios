<?php

namespace Controllers;

final class Logout{
	
	public function sign_out(){
		session_unset();
		session_destroy();
		unlink("json/session.json");
		header("location:http://localhost:8000/");	
	}

	public function destroy_tables(){
		
	}
}

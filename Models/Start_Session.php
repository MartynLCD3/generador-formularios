<?php

namespace Models;

final class Start_Session{

	public function new_session($email,$password){
		
		$new_connection = new \Models\Connection();
		$connection = $new_connection->run();
		$query = "SELECT * FROM user_table WHERE email = :email LIMIT 1";
		$stmt = $connection->prepare($query);
		$stmt->bindValue(":email",$email);
		$stmt->execute();
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		if(is_array($result) || is_object($result)){

				if(password_verify($password,$result["password"])){	
					
					session_start();	
					$_SESSION["user_session"] = [
						"user_name" => $result["username"],
						"user_email" => $result["email"], 
						"user_password" => $result["password"]
					];	
					
					$redirect = new \Config\Helper();
					$redirect->home();	
				}else{
					\Controllers\Tools::_user_log_error();
					return false;
				}
		}else{
		
			\Controllers\Tools::_user_log_error();
			return false;
		}	

		$new_connection = null;
		$connection = null;
	}
}

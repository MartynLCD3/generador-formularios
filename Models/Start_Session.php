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

		if($result = $stmt->fetch(\PDO::FETCH_ASSOC)){
	
			if(password_verify($password,$result["password"])){	

			$_SESSION["user_session"] = [
				"user_email" => $result["email"], 
				"user_password" => $result["password"]
				];	
			}	
		}
	}
}

<?php

namespace Models;

class Register{	

	public function new_user($username,$email,$password){

		try{
			$new_connection = new \Models\Connection();	
			$connection = $new_connection->run();
			$query = "INSERT INTO user_table SET username = :username, 
			 			     email = :email, 
			      			     password = :password";
			$stmt = $connection->prepare($query);
			$stmt->bindValue(":username",$username);
			$stmt->bindValue(":email",$email);
			$stmt->bindValue(":password",$password);
			$stmt->execute();

			\Controllers\Tools::_new_user_created();
			return true;
		
		}catch(\PDOException $e){
			\Controllers\Tools::_user_exist();	
			return false;
		}

		$new_connection = null;
		$connection = null;
	}
}

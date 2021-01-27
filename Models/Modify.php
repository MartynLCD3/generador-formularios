<?php

namespace Models;

final class Modify{


	public function change_password($email,$password){

		$new_connection = new \Models\Connection();
		$connection = $new_connection->run();

		$get_users = "SELECT * FROM user_table WHERE email = :email";
		$stmt = $connection->prepare($get_users);
		$stmt->bindValue(":email",$email);
		$stmt->execute();
		$result = $stmt->fetch(\PDO::FETCH_ASSOC);

		if(is_array($result) || is_object($result)){
		
			$query = "UPDATE user_table SET password = :password WHERE email = :email";
			$stmt = $connection->prepare($query);
			$stmt->bindValue(":email",$email);
			$stmt->bindValue(":password",$password);
			$stmt->execute();

			\Controllers\Tools::_password_changed();
			return true;
		}else{
			\Controllers\Tools::_password_not_changed();
			return false;
		}	
	
		$new_connection = null;
		$connection = null;
	}
}

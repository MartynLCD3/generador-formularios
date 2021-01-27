<?php

namespace Models;

final class Modify{


	public function change_password($email,$password){
	
		try{
			$new_connection = new \Models\Connection();
			$connection = $new_connection->run();
			$query = "UPDATE user_table SET password = :password WHERE email = :email";
			$stmt = $connection->prepare($query);
			$stmt->bindValue(":email",$email);
			$stmt->bindValue(":password",$password);
			$stmt->execute();

			\Controllers\Tools::_password_changed();

		}catch(\PDOException $e){
			echo "error";
		}

		$new_connection = null;
		$connection = null;
	}
}

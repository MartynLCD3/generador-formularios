<?php

namespace Models;

class Check_Base{

	public function verify_empty(){
		
		$new_connection = new \Models\Connection();
		$connection = $new_connection->run();
		$session_email = $_SESSION["user_session"]["user_email"];
		$query = "SELECT * FROM queries_table, answers_table 
				   INNER JOIN user_table 
				   WHERE queries_table.id = user_table.id 
				   AND answers_table.id = user_table.id
				   AND user_table.email = :session_email";
		$stmt = $connection->prepare($query);
		$stmt->bindValue(":session_email",$session_email);
		$stmt->execute();
		$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		
		if(empty($result)){
			$redirect = new \Config\Helper();
			$redirect->home();
		}

		$new_connection = null;
		$connection = null;
	}

	public function verify_full(){
		
		$new_connection = new \Models\Connection();
		$connection = $new_connection->run();
		$session_email = $_SESSION["user_session"]["user_email"];
		$query = "SELECT * FROM queries_table, answers_table 
				   INNER JOIN user_table 
				   WHERE queries_table.id = user_table.id 
				   AND answers_table.id = user_table.id
				   AND user_table.email = :session_email";
		$stmt = $connection->prepare($query);
		$stmt->bindValue(":session_email",$session_email);
		$stmt->execute();
		$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		
		if(!empty($result)){
			$redirect = new \Config\Helper();
			$redirect->form_loader();
		}

		$new_connection = null;
		$connection = null;
	}
}

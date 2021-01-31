<?php

namespace Models;

final class Check_Base{

	public function verify_empty(){
		
		$new_connection = new \Models\Connection();
		$connection = $new_connection->run();
		$query = "SELECT * FROM queries_table, answers_table";
		$stmt = $connection->prepare($query);
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
		$query = "SELECT * FROM queries_table, answers_table";
		$stmt = $connection->prepare($query);
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

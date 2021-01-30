<?php

namespace Models;

final class Check_Base{

	public function verify(){
		
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
	}
}

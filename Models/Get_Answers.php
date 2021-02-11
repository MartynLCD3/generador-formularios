<?php

namespace Models;

class Get_Answers{

	public function get_all(){

		try{
			$new_connection = new \Models\Connection();
			$connection = $new_connection->run();
			$query = "SELECT * FROM answers_table";
			$stmt = $connection->prepare($query);
			$stmt->execute();
			$result = $stmt->fetch(\PDO::FETCH_ASSOC);

			if(empty($result)){
				$redirection = new \Config\Helper();
				$redirection->home();
			}

			if(is_array($result) || is_object($result)){
				return $result;
			}

		}catch(\PDOException $e){
			\Controllers\Tools::_form_error();
			return false;
		}

		$new_connection = null;
		$connection = null;
	}
}

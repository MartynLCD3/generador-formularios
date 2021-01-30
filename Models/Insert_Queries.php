<?php

namespace Models;

final class Insert_Queries{

	public function insert_queries( $query_one,$query_two,$query_three,$query_four,
					$query_five,$query_six,$query_seven,$query_eight,
					$query_nine,$query_ten
				      ){
					      
		try{			      
			$new_connection = new \Models\Connection();
			$connection = $new_connection->run();
			$query = "INSERT INTO queries_table SET query_one = :query_one,
								query_two = :query_two,
								query_three = :query_three,
								query_four = :query_four,
								query_five = :query_five,
								query_six = :query_six,
								query_seven = :query_seven,
								query_eight = :query_eight,
								query_nine = :query_nine,
								query_ten = :query_ten";
			$stmt = $connection->prepare($query);
			$stmt->bindValue(":query_one",$query_one);
			$stmt->bindValue(":query_two",$query_two);
			$stmt->bindValue(":query_three",$query_three);
			$stmt->bindValue(":query_four",$query_four);
			$stmt->bindValue(":query_five",$query_five);
			$stmt->bindValue(":query_six",$query_six);
			$stmt->bindValue(":query_seven",$query_seven);
			$stmt->bindValue(":query_eight",$query_eight);
			$stmt->bindValue(":query_nine",$query_nine);
			$stmt->bindValue(":query_ten",$query_ten);	
			$stmt->execute();
			
			$redirection = new \Config\Helper();
			$redirection->form_loader();
			return true;

		}catch(\PDOException $e){
			\Controllers\Tools::_form_error();	
			return false;			
		}

		$new_connection = null;
		$connection = null;
	}
}

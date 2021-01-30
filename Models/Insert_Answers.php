<?php

namespace Models;

final class Insert_Answers{

	public function insert_answers(
				$answer_one_a,$answer_one_b,$answer_one_c,
				$answer_two_a,$answer_two_b,$answer_two_c,
				$answer_three_a,$answer_three_b,$answer_three_c,
				$answer_four_a,$answer_four_b,$answer_four_c,
				$answer_five_a,$answer_five_b,$answer_five_c,
				$answer_six_a,$answer_six_b,$answer_six_c,
				$answer_seven_a,$answer_seven_b,$answer_seven_c,
				$answer_eight_a,$answer_eight_b,$answer_eight_c,
				$answer_nine_a,$answer_nine_b,$answer_nine_c,
				$answer_ten_a,$answer_ten_b,$answer_ten_c
	){
		try{
	 		$new_connection = new \Models\Connection();
			$connection = $new_connection->run();
			$query = "INSERT INTO answers_table SET	answer_one_a = :answer_one_a,
				 				answer_one_b = :answer_one_b,
								answer_one_c = :answer_one_c,
								answer_two_a = :answer_two_a,
				 				answer_two_b = :answer_two_b,
								answer_two_c = :answer_two_c,
								answer_three_a = :answer_three_a,
				 				answer_three_b = :answer_three_b,
								answer_three_c = :answer_three_c,
								answer_four_a = :answer_four_a,
				 				answer_four_b = :answer_four_b,
								answer_four_c = :answer_four_c,
								answer_five_a = :answer_five_a,
				 				answer_five_b = :answer_five_b,
								answer_five_c = :answer_five_c,
								answer_six_a = :answer_six_a,
				 				answer_six_b = :answer_six_b,
								answer_six_c = :answer_six_c,
								answer_seven_a = :answer_seven_a,
				 				answer_seven_b = :answer_seven_b,
								answer_seven_c = :answer_seven_c,
								answer_eight_a = :answer_eight_a,
				 				answer_eight_b = :answer_eight_b,
								answer_eight_c = :answer_eight_c,
								answer_nine_a = :answer_nine_a,
				 				answer_nine_b = :answer_nine_b,
								answer_nine_c = :answer_nine_c,
								answer_ten_a = :answer_ten_a,
				 				answer_ten_b = :answer_ten_b,
								answer_ten_c = :answer_ten_c";
			$stmt = $connection->prepare($query);
			$stmt->bindValue(":answer_one_a",$answer_one_a);
			$stmt->bindValue(":answer_one_b",$answer_one_b);
			$stmt->bindValue(":answer_one_c",$answer_one_c);
			$stmt->bindValue(":answer_two_a",$answer_two_a);
			$stmt->bindValue(":answer_two_b",$answer_two_b);
			$stmt->bindValue(":answer_two_c",$answer_two_c);
			$stmt->bindValue(":answer_three_a",$answer_three_a);
			$stmt->bindValue(":answer_three_b",$answer_three_b);
			$stmt->bindValue(":answer_three_c",$answer_three_c);
			$stmt->bindValue(":answer_four_a",$answer_four_a);
			$stmt->bindValue(":answer_four_b",$answer_four_b);
			$stmt->bindValue(":answer_four_c",$answer_four_c);
			$stmt->bindValue(":answer_five_a",$answer_five_a);
			$stmt->bindValue(":answer_five_b",$answer_five_b);
			$stmt->bindValue(":answer_five_c",$answer_five_c);
			$stmt->bindValue(":answer_six_a",$answer_six_a);
			$stmt->bindValue(":answer_six_b",$answer_six_b);
			$stmt->bindValue(":answer_six_c",$answer_six_c);
			$stmt->bindValue(":answer_seven_a",$answer_seven_a);
			$stmt->bindValue(":answer_seven_b",$answer_seven_b);
			$stmt->bindValue(":answer_seven_c",$answer_seven_c);
			$stmt->bindValue(":answer_eight_a",$answer_eight_a);
			$stmt->bindValue(":answer_eight_b",$answer_eight_b);
			$stmt->bindValue(":answer_eight_c",$answer_eight_c);
			$stmt->bindValue(":answer_nine_a",$answer_nine_a);
			$stmt->bindValue(":answer_nine_b",$answer_nine_b);
			$stmt->bindValue(":answer_nine_c",$answer_nine_c);
			$stmt->bindValue(":answer_ten_a",$answer_ten_a);
			$stmt->bindValue(":answer_ten_b",$answer_ten_b);
			$stmt->bindValue(":answer_ten_c",$answer_ten_c);
			$stmt->execute();	
				
			return true;
	
		}catch(\PDOException $e){
			\Controllers\Tools::_form_error();	
			return false;
		}
		
		$new_connection = null;
		$connection = null;
	}
}

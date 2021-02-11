<?php

namespace Controllers;

final class Home{

	const LIMIT_Q = 60;
	const LIMIT_A = 30;

	public function index(){
		self::_session_control();
		self::_data_control();
		self::_captured_questions();
		self::_views();
	}

	private static function _session_control(){
		$control = new \Controllers\Session_State();
		$control->verify();
	}

	private static function _views(){
		require_once "./Views/src/header.html";	
		require_once "./Views/home/dashboard.html";
		require_once "./Views/src/footer.html";
	}

	private static function _data_control(){
		$control = new \Models\Check_Base();
		$control->verify_full();
	}

	private static function _captured_questions(){
		if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["submit"])){
			
			$query_one = $_POST["question-one"];
			$query_two = $_POST["question-two"];
			$query_three = $_POST["question-three"];
			$query_four = $_POST["question-four"];
			$query_five = $_POST["question-five"];
			$query_six = $_POST["question-six"];
			$query_seven = $_POST["question-seven"];
			$query_eight = $_POST["question-eight"];
			$query_nine = $_POST["question-nine"];
			$query_ten = $_POST["question-ten"];
			$answer_one_a = $_POST["answer-one-a"];
			$answer_one_b = $_POST["answer-one-b"];
			$answer_one_c = $_POST["answer-one-c"];	
			$answer_two_a = $_POST["answer-two-a"];
			$answer_two_b = $_POST["answer-two-b"];
			$answer_two_c = $_POST["answer-two-c"];
			$answer_three_a = $_POST["answer-three-a"];
			$answer_three_b = $_POST["answer-three-b"];
			$answer_three_c = $_POST["answer-three-c"];
			$answer_four_a = $_POST["answer-four-a"];
			$answer_four_b = $_POST["answer-four-b"];
			$answer_four_c = $_POST["answer-four-c"];
			$answer_five_a = $_POST["answer-five-a"];
			$answer_five_b = $_POST["answer-five-b"];
			$answer_five_c = $_POST["answer-five-c"];
			$answer_six_a = $_POST["answer-six-a"];
			$answer_six_b = $_POST["answer-six-b"];
			$answer_six_c = $_POST["answer-six-c"];
			$answer_seven_a = $_POST["answer-seven-a"];
			$answer_seven_b = $_POST["answer-seven-b"];
			$answer_seven_c = $_POST["answer-seven-c"];
			$answer_eight_a = $_POST["answer-eight-a"];
			$answer_eight_b = $_POST["answer-eight-b"];
			$answer_eight_c = $_POST["answer-eight-c"];
			$answer_nine_a = $_POST["answer-nine-a"];
			$answer_nine_b = $_POST["answer-nine-b"];
			$answer_nine_c = $_POST["answer-nine-c"];
			$answer_ten_a = $_POST["answer-ten-a"];
			$answer_ten_b = $_POST["answer-ten-b"];
			$answer_ten_c = $_POST["answer-ten-c"];

			if(
				empty($query_one) || empty($answer_one_a)
			){
				\Controllers\Tools::_question_required();
			}else{
				$q = 0;
				$a = 0;

				$verify_query = [
					strlen($query_one),strlen($query_two),
					strlen($query_three),strlen($query_four),
					strlen($query_five),strlen($query_six),
					strlen($query_seven),strlen($query_eight),
					strlen($query_nine),strlen($query_ten)
				];

				$verify_answer = [
					strlen($answer_one_a),strlen($answer_one_b),
					strlen($answer_one_c),strlen($answer_two_a),
					strlen($answer_two_b),strlen($answer_two_c),
					strlen($answer_three_a),strlen($answer_three_b),
					strlen($answer_three_c),strlen($answer_four_a),
					strlen($answer_four_b),strlen($answer_four_c),
					strlen($answer_five_a),strlen($answer_five_b),
					strlen($answer_five_c),strlen($answer_six_a),
					strlen($answer_six_b),strlen($answer_six_c),
					strlen($answer_seven_a),strlen($answer_seven_b),
					strlen($answer_seven_c),strlen($answer_eight_a),
					strlen($answer_eight_b),strlen($answer_eight_c),
					strlen($answer_nine_a),strlen($answer_nine_b),
					strlen($answer_nine_c),strlen($answer_ten_a),
					strlen($answer_ten_b),strlen($answer_ten_c)
				];

				while($q <= 11 || $a <= 31){
				
					if(
						$verify_query[$q] > self::LIMIT_Q 
						|| $verify_answer[$a] > self::LIMIT_A
					){
						\Controllers\Tools::_question_error();
						break;	
					}

					$q++;
					$a++;
				}

				$query_model = new \Models\Insert_Queries();
				$query_model->insert_queries(
					$query_one,$query_two,
					$query_three,$query_four,
					$query_five,$query_six,
					$query_seven,$query_eight,
					$query_nine,$query_ten	
				);
				$answer_model = new \Models\Insert_Answers();
				$answer_model->insert_answers(
					$answer_one_a,$answer_one_b,$answer_one_c,
					$answer_two_a,$answer_two_b,$answer_two_c,
					$answer_three_a,$answer_three_b,$answer_three_c,
					$answer_four_a,$answer_four_b,$answer_four_c,
					$answer_five_a,$answer_five_b,$answer_five_b,
					$answer_six_a,$answer_six_b,$answer_six_c,
					$answer_seven_a,$answer_seven_b,$answer_seven_c,
					$answer_eight_a,$answer_eight_b,$answer_eight_c,
					$answer_nine_a,$answer_nine_b,$answer_nine_c,
					$answer_ten_a,$answer_ten_b,$answer_ten_c	
				);	
			}
		}	
	}
}

<?php

namespace Controllers;
session_start();

final class Home{
	
	public function index(){
		self::_session_control();
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

	private static function _captured_questions(){
		if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["submit"])){
			$question_one = $_POST["question-one"];
			$question_two = $_POST["question-two"];
			$question_three = $_POST["question-three"];
			$question_four = $_POST["question-four"];
			$question_five = $_POST["question-five"];
			$question_six = $_POST["question-six"];
			$question_seven = $_POST["question-seven"];
			$question_eight = $_POST["question-eight"];
			$question_nine = $_POST["question-nine"];
			$question_ten = $_POST["question-ten"];
		}	
	}
}

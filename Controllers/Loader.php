<?php

namespace Controllers;
session_start();
	
final class Loader{

	public function run(){
		self::_session_control();
		self::_data_control();
		self::_get_queries();
		self::_get_answers();
		self::_views();
	}
	
	private static function _views(){
		require_once "./Views/src/header.html";
		require_once "./Views/loader/transition.html";
		require_once "./Views/src/footer.html";
	}

	private static function _session_control(){
		$control = new \Controllers\Session_State();
		$control->verify();
	}

	private static function _data_control(){
		$control = new \Models\Check_Base();
		$control->verify_empty();
	}

	private static function _get_queries(){
		$queries = new \Models\Get_Queries();
		$queries_array = $queries->get_all();
		$format = "[" . json_encode($queries_array,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) . "]";
		$fp = fopen("json/questions.json","w");
		fwrite($fp,$format);
		fclose($fp);
	}

	private static function _get_answers(){
		$answers = new \Models\Get_Answers();
		$answers_array = $answers->get_all();
		$format = "[" . json_encode($answers_array,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) . "]";
		$fp = fopen("json/answers.json","w");
		fwrite($fp,$format);
		fclose($fp);

	}
}

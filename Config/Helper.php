<?php

namespace Config;

final class Helper{

	const HOST = "http://localhost:8000/";

	public function login(){
		$helper = self::HOST . "v1/login";
		header("location:$helper");
	}

	public function home(){
		$helper = self::HOST;
		header("location:$helper");
	}

	public function form_loader(){
		$helper = self::HOST . "loading_please_wait";
		header("location:$helper");
	}
}

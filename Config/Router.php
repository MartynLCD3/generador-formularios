<?php

namespace Config;

final class Router{

	public static function run(){
		self::router_links();
	}

	private static function router(){

		$routes = [];

		function route($action,$callback){
			global $routes;
			$action = trim($action,"/");
			$routes[$action] = $callback;
		}
	
		function dispatch($action){
			global $routes;
			$action = trim($action,"/");
			$callback = $routes[$action];
			return call_user_func($callback);
		}	
	}

	private static function router_links(){	
		self::router(); 
		
		$home = "/";
		$sign_in = "/v1/login";
		$sign_out = "/v1/logout";
		
		route($home,function(){
			$location = new \Controllers\Home();
			$location->index();
		});

		route($sign_in,function(){
			$location = new \Controllers\Login();
			$location->index();
		});

		route($sign_out,function(){
			$location = new \Controllers\Logout();
			$location->sign_out();
		});

		$action = $_SERVER["REQUEST_URI"];
		
		if(
			$action !== $home
			&& $action !== $sign_in
			&& $action !== $sign_out
		){
			include "Views/error/404.html";
		}
		else{
			dispatch($action);
		}
	}
}

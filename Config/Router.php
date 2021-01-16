<?php

namespace Config;

	# If you wanna add more routes,
	# remember modify the next directories
	# and files:

	#

	### <--- ---> ###

final class Router{

	CONST VERSION = "v1";

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
		$sign_in = "/login";
		
		route($home,function(){
			$location = new \Controllers\Home();
			$location->index();
		});

		route($sign_in,function(){
			$location = new \Controllers\Login();
			$location->index();
		});

		$action = $_SERVER["REQUEST_URI"];
		
		if(
			$action !== $home
			&& $action !== $sign_in
		){
			include "Views/error/404.html";
		}
		else{
			dispatch($action);
		}
	}
}

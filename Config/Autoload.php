<?php

namespace Config;

final class Autoload{

	public static function run(){
		spl_autoload_register(function($class){
			$route = str_replace("\\","/",$class) . ".php";

			if(is_readable($route)){
				require_once $route;
			}else{
				echo "No se pudo cargar la clase";
			}
		});
	}
}

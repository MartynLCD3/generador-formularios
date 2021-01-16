<?php

	# If you wanna add more locations, 
	# remember modify the next directories 
	# and files:
	
	# 

	### <--- ---> ###

$location = $_SERVER['HTTP_HOST'] . "" . $_SERVER['REQUEST_URI'];

if($location === $_SERVER['HTTP_HOST'] . "/"){
	$title_html = "Home";
}

if($location === $_SERVER['HTTP_HOST'] . "/login"){
	$title_html = "Sign In";
}

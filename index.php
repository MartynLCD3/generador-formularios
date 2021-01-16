<?php
session_start();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");

error_reporting(E_ALL ^ E_NOTICE);

require_once "Config/Autoload.php";
\Config\Autoload::run();

require_once "Config/Router.php";
\Config\Router::run();

<?php
error_reporting(22519);
session_start();
//include_once("extranet/autoload.php");
ini_set('default_charset','');

include_once("RequestManager.php");
$request_manager = new RequestManager();
$rotas = array(
	'/'=>'inicial.php',
);
$request_manager->run($rotas);
?>
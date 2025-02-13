<?
/*********************************************************
*Controle de versão: 1.0
*********************************************************/
include_once("RequestManager.php");
$request_manager = new RequestManager();
$base_url = $request_manager->getBaseUrl($absolute=true).'/';
$server = $_SERVER['SERVER_NAME'];
?>
<base href="<?=$base_url?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="resource-type" content="document" />
<meta name="classification" content="Internet" />
<meta name="distribution" content="Global" />
<meta name="language" content="pt-br" />
<meta charset="UTF-8">
<meta http-equiv="content-language" content="pt-br" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta name="robots" content="ALL" />
<meta name="revisit-after" content="1 days" />

<?php /* Icones padrão */?>
<link rel="manifest" href="./imgs/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">

<?php // Preload Fonts ?>
<link rel="preload prefetch" href="fonts/OpenSans-Regular.woff" as="font" type="font/woff" crossorigin="anonymous"/>
<link rel="preload prefetch" href="fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload prefetch" href="fonts/OpenSans-Bold.woff" as="font" type="font/woff" crossorigin="anonymous"/>
<link rel="preload prefetch" href="fonts/OpenSans-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>

<?php // CSS Libs Globais ?>
<link rel="stylesheet" type="text/css" href="./libs/bootstrap-5.3.3-dist/css/bootstrap.min.css"/>

<?php $titulo = "Hover Effects - Mega CSS Animation Course"; ?>

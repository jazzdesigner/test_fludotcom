<?php
	$language=array('en','es');
	$doctype='<!DOCTYPE html">';
	$htmlDeclaration='<html lang="'.$language[0].'">';
	$charset='<meta charset="UTF-8" />';
	$title='Flumotion | Online Video Platform for Monetization & Multi-device Delivery';
	$metaName='<meta name="keywords" content="Flumotion, streaming, stream, webTV, video, audio, ondemand, live, transcoding, server, corporate" />
				<meta name="description" content="Maximize content monetization and return on investment with Flumotion 360 WebTV and WebRadio." />';
	$cssResetter='<link href="css/reseter.css" rel="stylesheet" type="text/css" media="all" />';
	$favicon='<link rel="shortcut icon" href="favicon.png" />';
	
	echo	$doctype."\n".$htmlDeclaration."\n".$charset;	//doctype declaration
	echo	"<head>";										//head opener
	echo	"<title>".$title."</title>";					//title
	echo 	$meta;											//meta info: descritpion
	echo	$cssResetter."\n".$cssMain."\n".$cssAlternate;	//css
	echo	$favicon;										//favicon
	echo 	"</head>";
?>

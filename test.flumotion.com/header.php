<?php

	/*current shorth path*/
	$currentShortURL = basename($_SERVER['PHP_SELF'], ".php");
	
	/*header*/
	/*variables*/
	$mainMenu=array(
		'features.html' =>	'Features',
		'pricing.html'	=>	'Pricing',
		'case_studies.html'=>	'Case Studies',
		'about.html'	=>	'About',
		'http://www.flumotion.com/blog'	=>	'Blog'
	);
	$menuLanguages=array(
		'ENG'	=>	'../en/'.$currentShortURL,
		'ESP'	=>	'../es/'.$currentShortURL
	);
	
	/*Head*/
	echo '<div id="header_topBackground">';
	echo '<div id="header_mainMenu">';
	echo '<a href="index.html" class="logo"><img src="images/common/header_logo.png" class="logo"/></a>';
	
	echo '<ul id="mainMenu">';
	foreach($mainMenu as $m => $m1){
		if ($currentShortURL.'.html' != $m){
			echo '<li><a href="'.$m.'">'.$m1.'</a></li>';
		}
		else{
			echo '<li class="selected">'.$m1.'</li>';
		};
	}
	echo '</ul>';
    
    echo '<ul id="languages">';
		foreach($menuLanguages as $l => $l1){
			if ($l=='ENG'){
				echo '<li class="selected">'.$l.'</li>';
				echo '<li>|</li>';
			}
			else echo '<li><a href="'.$l1.'">'.$l.'</a></li>';
		}
	echo '</ul>';
	echo '</div>';
	echo '</div>';

?>
<?php

	$sidebarMenu=array(
		'inner_loreal_paris.php'	=>	'L\'Oreal Paris',
		'inner_pepe_jeans.php'		=>	'Pepe Jeans',
		'inner_acb_orange_arena.php' =>	'ACB Orange Arena',
		'inner_pepe_jeans.php'		=>	'Live Events'
	);
	
echo '<div id="central_subMenu">';
	
	/*Corregir*/
echo '<ul id="subMenu">';
	foreach($sidebarMenu as $s => $s1){	
		echo '<li><a href="'.$s.'" onclick="'.$s.'">'.$s1.'</a></li>';
	}
echo '</ul>';
echo '</div>';

?>


<!--Link samples:
	echo '<li class="selected">Pepe Jeans</li>';
	echo '<li><a href="#">ACB Orange Arena</a></li>';
-->
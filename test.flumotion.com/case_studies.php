<?php 
	$cssMain='<link href="css/styles_case_studies.css" rel="stylesheet" type="text/css" media="screen" />';
	include 'head.php'
?>
<body>
	<?php include 'header.php'?>
	
	<!--Highlight slider-->
		
	<div id="background" class="caseStudies">
		
		<div id="section_title">
			<div id="section_titleLeft">
				<h1 class="caseStudies">Case Studies</h1>
			</div>
			<div id="section_titleIcon"><img src="images/case_studies/pepeJeans_icon.png"/></div>
			<div id="section_titleRight">
				<h2>Nunc dolor dolor, tincidunt at sollicitudin non, porttitor at augue. Cum sociis natoque.</h2>
			</div>
		</div>
		
		<div id="central_top">
			<h3>Pepe Jeans</h3>
			<a class="secondaryButton" href="https://flumotion.wufoo.com/forms/q7x3s5/">Newsletters</a>
			<a class="secondaryButton" href="https://flumotion.wufoo.com/forms/contact-us/">Contact Us</a>
		</div>		
		<div id="content">
				<?php
					$currentInner='inner_loreal_paris.php';
					
					include 'sidebar_case_studies.php';
					include 'inner_loreal_paris.php'
				?>
		</div>
	</div>
		
	<!--Footer-->
	<?php include 'footer.php'?>	
</body>
</html>

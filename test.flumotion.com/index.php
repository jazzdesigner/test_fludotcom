<?php 
	$cssMain='<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />';
	include 'head.php'
?>
<body>
	<?php include 'header.php'?>
	
	<!--Highlight slider-->
	
	<div id="highlight_background">
		<div id="highlight">
			<!--image or video iFrame-->
			<div id="highlight_left">
				<img src="images/home/highlight_playerBackground.png"/><!--replace by iFrame-->
			</div>
			
			<!--Text-->
			<div id="highlight_right">
				<h1>Boost your video strategy with Flumotion</h1><br/>
				<h2>Professional video hosting & analytics</h2>
				<h3>Taking your video strategy to the next level</h3><br/><br/>
				<a class="button" href="http://www.flumotion.com/blog/flumotion-online-video-platform-demo"">Watch our Demo</a>
			</div>
		</div>
	</div>
	
	<!--Content-->
	<div id="content_background">
		<div id="content">
			
			<!--Featured-->
			
			<div id="featured_title"><h1>Features</h1></div>
			
			<div class="featured_content">
				<ul>
					<li><a href="features.html"><img src="images/home/home_feat1.png"/></a><br /><a href="features.html"><h2>Video Platform</h2></a><h3>Multiple award winning</h3></li>
					<li><a href="features.html"><img src="images/home/home_feat2.png"/></a><br /><a href="features.html"><h2>Radio Platform</h2></a><h3>Innovative Ad solutions</h3></li>
					<li class="last"><a href="features.html"><img src="images/home/home_feat3.png"/></a><br /><a href="features.html"><h2>Live Events</h2></a><h3>Worldwide live streaming</h3></li>
				</ul>
			</div>
			
			<!--Client logos-->
			<div id="client_logos">
				<ul>
					<li><a href="case_studies.html"><img src="images/home/client_pepeJeans.png"></a></li>
					<li><a href="case_studies.html"><img src="images/home/client_nestleTv.png"></a></li>
					<li><a href="case_studies.html"><img src="images/home/client_loreal.png"></a></li>
					<li><a href="case_studies.html"><img src="images/home/client_danone.png"></a></li>
					<li><a href="case_studies.html"><img src="images/home/client_rtve.png"></a></li>
					<li><a href="case_studies.html"><img src="images/home/client_orangeAcb.png"></a></li>
				</ul>
			</div>
			
			<!--Testimonials-->
			<div class="featured_content">
				<p><img src="images/home/testimonial_techCrunch.png" class="right">&quot;Flumotion has developed a new, maybe even better, way to watch the Champions League.&quot; </p>
				<br />
				<p><img src="images/home/testimonial_google.png" class="left">&quot;We are excited to see companies such as Flumotion integrating the WebM format to stream live events to viewers around the world.&quot;</p>
			</div>
			
			<!--Awards-->
			<div id="awards"><img src="images/home/awards.png" style="width:962px; height:79px" /></div>
		</div>
	</div>
	<?php include 'footer.php'?>	
</body>
</html>

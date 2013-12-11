<?php
	$cssMain='<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />';
	$cssAlternate='	<link href="css/pricing.css" rel="stylesheet" type="text/css" media="screen" charset="UTF-8"/>';
	include 'head.php'?>

<body>
	<?php include 'header.php'?>
		
	<div id="background" class="pricing">
		
		<div id="section_title">
			<div id="section_titleLeft">
				<h1>Pricing</h1>
				<div id="section_titleMid">
					<li class="selected"><a href="#">Marketeers Packages</a><br/></li>
					<li><a href="#">Broadcasters Packages</a></li>
				</div>
			</div>
			<div id="section_titleIcon"><img src="images/pricing/pricing_icon.png"/></div>
			<div id="section_titleRight">
				<h2>Nunc dolor dolor, tincidunt at sollicitudin non, porttitor at augue. Cum sociis natoque penatibus.</h2>
			</div>
		</div>
		
		<!--Pricing Table-->
		
		<div id="pricing_table">
			<table>
				<thead>
					<tr>
					<th class="first">Starter</th>
					<th>Marketing</th>
					<th>Comunidad<br/>UGC</th>
					<th class="last">Fast Forward</th>
					<th class="arrow"></th>
					<th class="end"></th>
					</tr>
				</thead>
				<tr>
					<td class="first"><span class="monthly">599€/<small>mes</small></span></td>
					<td><span class="monthly">799€/<small>mes</small></span></td>
					<td><span class="monthly">999€/<small>mes</small></span></td>
					<td class="last"><span class="monthly">1699€/<small>mes</small></span></td>
					<td class="spaceSingle"></td>
					<td class="lastSingle">Pago<br />mensual</td>
				</tr>
				<tr>
					<td class="first">499€/mes</td>
					<td>699€/mes</td>
					<td>899€/mes</td>
					<td class="last">1599€/mes</td>
					<td class="spaceSingle"></td>
					<td class="lastSingle">Pago<br />anual</td>
				</tr>
				<tr>
					<td class="first">50 vídeos</td>
					<td>50 vídeos</td>
					<td>50 vídeos</td>
					<td class="last">50 vídeos</td>
					<td class="spaceSingle"></td>
					<td class="lastSingle">Publicación<br />de vídeos</td>
				</tr>
				<tr>
					<td class="first"></td>
					<td>1 vídeo / mes</td>
					<td>1 vídeo / mes</td>
					<td class="last">1 vídeos / mes</td>
					<td class="spaceSingle"></td>
					<td class="lastSingle">Producción<br />de vídeos</td>
				</tr>
				<tr class="double">
					<td rowspan ="2"class="first"></td>
					<td rowspan ="2">Export<br />automático<span class="red">*</span></td>
					<td>Export<br />automático<span class="red">*</span></td>
					<td class="last">Export<br />automático<span class="red">*</span></td>
					<td class="spaceSingle"></td>
					<td class="lastSingle">Funcionali-<br />dades extra</td>
				</tr>
				<tr class="double">
					<td>Automatic<br />user upload<span class="red">**</span></td>
					<td class="last">Automatic<br />user upload<span class="red">**</span></td>
					<td class="spaceSingle"></td>
					<td class="lastSingle">Funcionali-<br />dades extra</td>
				</tr>
				<tr class="footer">
					<td class="firstFooter">Ilimitado</td>
					<td class="Footer">Ilimitado</td>
					<td class="Footer">Ilimitado</td>
					<td class="lastFooter">Ilimitado</td>
					<td class="spaceDouble"></td>
					<td class="lastDouble">Acceso<br />a cursos <br /> de vídeo</td>
				</tr>
				<tfooter>
					<tr class="demo">
					<td class="firstF" ><a href="#" id="demoButton"></a></td>
					<td class="f" ><a href="#" id="demoButton"></a></td>
					<td class="f" ><a href="#" id="demoButton"></a></td>
					<td class="lastF" ><a href="#" id="demoButton"></a></td>
					<td class="spaceF" ></td>
					<td class="lastSingleF" ></td>
					</tr>
				</tfooter>
			</table>
		</div>
		
		<!--comments-->
		
		<div id="comment">
			<p><span class="red"><b>* </b></span>Plantillas que permiten exportar tus canales a facebook</p><br/>
			<p><span class="red"><b>** </b></span>Plantilla que permite a tus usuarios subir vídeos directamente a tu cuenta, y tu decides si los quieres publicar y d€nde.</p>
			<p>Para otros paquetes y paquetes para agencias, <a href="https://flumotion.wufoo.com/forms/contact-us/">contáctanos</a></p>
		</div>
	</div>
	
	<!--Footer-->
	<?php include 'footer.php'?>	
</body>
</html>

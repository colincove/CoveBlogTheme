<!DOCTYPE html>
<html>
	<head>
		<title>Colin's Blog</title>
		<?php require "standard-head.php"; ?>
		<script>
			$(document).ready(function() {
 			 $('#simple-menu').sidr();
		});
</script>
	</head>
	<div class="mobile-menu"><a id="simple-menu" href="#sidr"><img src="img/menu.png" /></a></div>
	<body class="five-columns">
		<?php require "slider-data.php"; ?>
		<div id="close-side"></div>
		<!-- div is used to cover alll the sire when the mobile nav is open 
		will close the nav when touched-->
		<?php require "header.php"; ?>
		<div class="site-container centered-container">
			<section id="side-container" class="col-2of7">
				<a href="index.php"><img src="img/IMG_7813.jpg" class="col-2of2 resizable" /></a>
				
				<section id="my-intro" class="col-2of2">

					<div  class="col-2of2 padded">
						<h1>Colin Cove</h1>
						<div class="col-2of2">
							Welcome to my workspace! Please take a look at my process, and lets help eachother be better at our craft. 
						</div>
					</div>
				</section>	
				<section id="references" class="col-2of2">
					<div  class="col-2of2 padded">
						<h1>references</h1>
						<ul>
							<li>Slider menu by <a href="http://www.berriart.com/sidr/">berriart.com</a></li>
							<li>All with the help of <a href="http://jquery.com/">jQuery</a></li>
							<li>All other design and images owned by Colin Cove</li>
						</ul>
					</div>
				</section>
				<section id="connect" class="col-2of2">
					<div  class="col-2of2 padded">
						<h1>connect with me</h1>
						<ul>
							<li>Follow on Twitter</li>
							<li>Subscribe to Feed</li>
						</ul>
					</div>
				</section>	
				<section id="archive" class="col-2of2">
					<div  class="col-2of2 padded">
						<h1>archive</h1>
						2013
						<ul>
							<li><a href="index.php">Janurary (03)</a></li>
							<li><a href="index.php">Feburary (1)</a></li>
							<li><a href="index.php">March (5)</a></li>
							<li><a href="index.php">July (6)</a></li>
							<li><a href="index.php">September (1)</a></li>
							<li><a href="index.php">December (3)</a></li>
						</ul>
						2014
						<ul>
							<li><a href="index.php">Janurary (03)</a></li>
							<li><a href="index.php">Feburary (1)</a></li>
							<li><a href="index.php">March (5)</a></li>
							<li><a href="index.php">July (6)</a></li>
							<li><a href="index.php">September (1)</a></li>
							<li><a href="index.php">December (3)</a></li>
						</ul>
					</div>
				</section>	
			</section>
			<section id="main-container" class="col-5of7 padded">
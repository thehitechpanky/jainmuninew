<?php
//Define variables for head.php
$title = 'Jain Muni Locator | About :: online destination for digambara jains';
?>

<!DOCTYPE HTML>
<html>
<?php include 'head.php'; ?>
<body>
		<!----start-container---->
			<!----start-header---->
		<div id="home" class="">
			<div class="container">
				<!---- start-logo---->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="Mabur" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				 <nav class="top-nav">
					<ul class="top-nav">
						<li class=""><a href="/subdomains/jainmuninew" class="">Home</a></li>
						<li class="active"><a href="#temples" class="scroll">Temples</a></li>
						<li class="page-scroll"><a href="#more" class="scroll">More</a></li>
						<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
	<!----start-temples---->
	<script type="text/javascript" src="temples/searchTemples.js"></script>
	<div  id="temples" class="testmonials">
		<div class="container">
			<div class="head text-center">
				<h3><span> </span> Digambara Jain Temples</h3>
				<p>List of All Digambar Jain Temples is given Below. Click on the name to see more information</p><br />
				<input id="searchTemples" name="searchBox" type="text" class="fullWidth contact" />
				<div id="searchResults"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
	<!----//End-temples---->
	<?php include 'contact.php'; ?>
		<!----start-footer---->
		<div class="footer">
			<div class="container">
				<div class="footer-left">
					<a href="#"><img src="images/footer-logo.png" title="mabur" /></a>
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<!----//End-footer---->
		<!----//End-container---->
	</body>
</html>

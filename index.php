<?php
//Define variables for head.php
$title = 'Jain Muni Locator | Home :: online destination for digambara jains';
?>

<!DOCTYPE HTML>
<html>
	<?php include 'head.php'; ?>
	<body>
		<!----start-container---->
		<!----start-header---->
		<div id="home" class="header scroll">
			<div class="container">
				<!---- start-logo---->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="Mabur" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				<nav class="top-nav">
					<ul class="top-nav">
						<li class="active"><a href="#home" class="scroll">Home</a></li>
						<li class="page-scroll"><a href="#fea" class="scroll">Explore</a></li>
						<li class="page-scroll"><a href="#reads" class="scroll">Good Reads</a></li>
						<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<div class="slide-text text-center">
					<h1>Jain Muni Locator</h1>
					<span>Online Destination for Digambara Jains</span>
					<a class="slide-btn" href="about.php">Learn More</a>
				</div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
		<!----start-feartures----->
		<div id="fea" class="features">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> Explore</h3>
					<p>What would you like to do today?</p>
				</div>
				<!---- start-features-grids---->
				<div class="features-grids text-center">
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-male"> </i> </span>
						<h3><a href="munis.php">Saints and Nuns</a></h3>
						<p>Check biographies of Digambara Saints and Nuns.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-heart"> </i> </span>
						<h3><a href="#">Support</a></h3>
						<p>Donate and become a contributor to this awesome website.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-clock-o"> </i> </span>
						<h3><a href="#">Timeline</a></h3>
						<p>Check out the timeline to Jainism.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-globe"> </i> </span>
						<h3><a href="map.php">Map</a></h3>
						<p>Locate Jain Saints and Nuns on a single map.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!---- //End-features-grids---->
			</div>
		</div>
		<!----//End-feartures----->
		<!----start-reads----->
		<div id="reads" class="portfolio portfolio-box">
			<div class="head text-center">
				<h3><span> </span> Good Reads</h3>
				<p>We have searched the vast literature of Jainism to bring some interesting reads for you.</p>
			</div>
			<!----start-portfolio---->
			<div id="port" class="portfolio-main">
				<!---- start-portfolio-script----->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
				<script type="text/javascript">
					$(function () {
						var filterList = {
							init: function () {
								
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
								
							},
							hoverEffect: function () {
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
								
							}
							
						};
						// Run the show!
						filterList.init();
					});	
				</script>
				<!----//End-portfolio-script----->
				<ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter="app card icon logo web">All</span></li>
					<li><span class="filter" data-filter="card">Opinions</span></li>
					<li><span class="filter" data-filter="app">Saints</span></li>
				</ul>
				<div id="portfoliolist">
					<div class="portfolio logo1 mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">	
							<div class="port-grid">
								<div class="port-grid-text">
									<p>Allegories</p>
									<label class="arrow-icon1"> </label>
								</div>
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/p1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
										</div></a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-text port-grid-text-c">
									<p>34 Extra Virtues</p>
									<label class="arrow-icon1 arrow-icon1-l"> </label>
								</div>
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/p2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
										</div></a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>		
					<div class="portfolio web mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-text port-grid-text-c">
									<p>11 Conduct Stages</p>
									<label class="arrow-icon1 arrow-icon1-l"> </label>
								</div>
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/p3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
										</div></a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/p4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
										</div></a>
								</div>
								<div class="port-grid-text port-grid-text-c">
									<p>10 Noble Virtues</p>
									<label class="arrow-icon1 arrow-icon1-r"> </label>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>	
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/p5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
										</div></a>
								</div>
								<div class="port-grid-text port-grid-text-c">
									<p>12 Ideas</p>
									<label class="arrow-icon1  arrow-icon1-r"> </label>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>			
					<div class="portfolio card mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/p6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
										</div></a>
								</div>
								<div class="port-grid-text port-grid-text-c">
									<p>28 Special Virtues</p>
									<label class="arrow-icon1  arrow-icon1-r"> </label>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>	
					<div class="clearfix"> </div>	
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
		<!----//End-reads----->
		<?php include 'foot.php'; ?>
		<!----//End-container---->
	</body>
</html>

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
					<a href="index.html"><img src="web/images/logo.png" title="Mabur" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				 <nav class="top-nav">
					<ul class="top-nav">
						<li class="active"><a href="#home" class="scroll">Home</a></li>
						<li class="page-scroll"><a href="#fea" class="scroll">Features</a></li>
						<li class="page-scroll"><a href="#work" class="scroll">Contribute</a></li>
						<li class="page-scroll"><a href="#portfolio" class="scroll">Good Reads</a></li>
						<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
					</ul>
					<a href="#" id="pull"><img src="web/images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<div class="slide-text text-center">
					<h1>Jain Muni Locator</h1>
					<span>Online Destination for Digambara Jains</span>
					<a class="slide-btn" href="#">Learn More</a>
				</div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
		<!----start-feartures----->
		<div id="fea" class="features">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> Our Features</h3>
					<p>What would you like to do today?</p>
				</div>
				<!---- start-features-grids---->
				<div class="features-grids text-center">
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-star"> </i> </span>
						<h3><a href="#">Saints and Nuns</a></h3>
						<p>Check biographies of Digambara Saints and Nuns.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-thumbs-up"> </i> </span>
						<h3><a href="#">Support</a></h3>
						<p>Donate and become a contributor to this awesome website.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-tachometer"> </i> </span>
						<h3><a href="#">Timeline</a></h3>
						<p>Check out the timeline to Jainism.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-mobile"> </i> </span>
						<h3><a href="#">Map</a></h3>
						<p>Locate Jain Saints and Nuns on a single map.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!---- //End-features-grids---->
			</div>
		</div>
		<!----//End-feartures----->
		<!---- start-work---->
		<div id="work" class="work">
			<div class="container">
				<div class="head text-center work-head">
					<h3><span> </span> How to Contribute</h3>
					<p>We do it with your help. This website is a presentation of infromation provided by our generous users.</p>
				</div>
				<!---- start-work-grids----->
				<div class="work-grids">
					<div class="col-md-4 work-grid">
						<span class="col-md-5 w-icon"> <i class="fa fa-search"> </i></span>
						<div class="col-md-7 work-info">
							<h4>Research</h4>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
						</div>
					</div>
					<div class="col-md-4 work-grid center-work-grid">
						<span class="col-md-5 w-icon"> <i class="fa fa-cogs"> </i></span>
						<div class="col-md-7 work-info">
							<h4>Design</h4>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
						</div>
					</div>
					<div class="col-md-4 work-grid">
						<span class="col-md-5 w-icon"><i class="fa fa-code"> </i> </span>
						<div class="col-md-7 work-info">
							<h4>Develop</h4>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="work-map">
						<span> </span>
					</div>
				</div>
				<!---- //End-work-grids----->
			</div>
		</div>
		<!---- //End-work---->
		<!----start-portfolio----->
		<div id="port" class="portfolio portfolio-box">
				<div class="head text-center">
					<h3><span> </span> Good Reads</h3>
					<p>We have searched the vast literature of Jainism to bring some interesting reads for you.</p>
				</div>
				<!----start-portfolio---->
               <div id="port" class="portfolio-main">
	        	<!---- start-portfolio-script----->
					<script type="text/javascript" src="web/js/jquery.mixitup.min.js"></script>
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
								     <img src="web/images/p1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="web/images/plus.png" alt=""/></h2>
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
								     <img src="web/images/p2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="web/images/plus.png" alt=""/></h2>
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
								     <img src="web/images/p3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="web/images/plus.png" alt=""/></h2>
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
								     <img src="web/images/p4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="web/images/plus.png" alt=""/></h2>
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
								     <img src="web/images/p5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="web/images/plus.png" alt=""/></h2>
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
								     <img src="web/images/p6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="web/images/plus.png" alt=""/></h2>
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
		<!----//End-portfolio----->
			<!----start-contact---->
				<div id="contact" class="contact"> 
					<div class="contact-map">
						<iframe src="https://maps.google.com/maps?t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;q=United+States&amp;ie=UTF8&amp;hq=&amp;hnear=United+States&amp;ll=37.359243,-91.525727&amp;spn=0.409036,0.837021&amp;z=11&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;q=United+States&amp;ie=UTF8&amp;hq=&amp;hnear=United+States&amp;ll=37.359243,-91.525727&amp;spn=0.409036,0.837021&amp;z=11&amp;source=embed"> </a></small>
					</div>
						<div class="contact-grids">
							<div class="col-md-6 contact-left">
								<h3><span> </span> Contact</h3>
								<p><i class="fa fa-map-marker"> </i> Pankaj Jain | +91-9818609955 | capankajjain@smilyo.com</p>
								<form>
									<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
									<input type="text" value="info@mail.com *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email@domain.com *';}">
									<textarea onfocus="if(this.value == 'Message *') this.value='';" onblur="if(this.value == '') this.value='Message *;">Message *</textarea>
									<p class="conditions"> <label><span>*</span>Fields in * are mandatory.</label></p>
									<span class="submit-btn"><input type="submit" value="Send"></span>
								</form>
							</div>
							<div class="col-md-6 contact-right">
								<span class="pin-map"> </span>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>
			<!----//End-contact---->
		<!----start-footer---->
		<div class="footer">
			<div class="container">
				<div class="footer-left">
					<a href="#"><img src="web/images/footer-logo.png" title="mabur" /></a>
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

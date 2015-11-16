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
						<li class="active"><a href="#about" class="scroll">About</a></li>
						<li class="page-scroll"><a href="#team" class="scroll">Team</a></li>
						<li class="page-scroll"><a href="#contributors" class="scroll">Contributors</a></li>						
						<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
		<!----start-about----->
		<div id="about" class="features">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> About</h3>
					<p>Jain Muni Locator is an online destination for Digambara Jains to locate Digambara Saints and Nuns and 
						find out more about Jainism in an interactive manner. Following are the broad specs of the project.</p>
				</div>
				<!---- start-features-grids---->
				<div class="features-grids text-center">
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-star"> </i> </span>
						<h3><a href="#">Free</a></h3>
						<p>All the information pubished on the website is available for free.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-thumbs-up"> </i> </span>
						<h3><a href="#">Crowdsourced</a></h3>
						<p>The information published have been provided by the visitors of the website from time to time.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-tachometer"> </i> </span>
						<h3><a href="#">Interactive</a></h3>
						<p>All the features of the website are highly interactive presented in a never-before-seen manner.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-mobile"> </i> </span>
						<h3><a href="#">Opensource</a></h3>
						<p>The source code of the website is published on github on the project jainmuninew.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!---- //End-features-grids---->
			</div>
		</div>
		<!----//End-about----->
		<!---- start-team---->
		<div id="team" class="work">
			<div class="container">
				<div class="head text-center work-head">
					<h3><span> </span> Team</h3>
				</div>
				<!---- start-work-grids----->
				<div class="work-grids">
					<div class="col-md-4 work-grid">
						<span class="col-md-5 w-icon"> <i class="fa fa-code"> </i></span>
						<div class="col-md-7 work-info">
							<h4>Pankaj Jain</h4>
							<p>Founder - Admin</p>
						</div>
					</div>
					<div class="col-md-4 work-grid center-work-grid">
						<span class="col-md-5 w-icon"> <i class="fa fa-cogs"> </i></span>
						<div class="col-md-7 work-info">
							<h4>Dhruv Jain</h4>
							<p>Founder - Initial code was given by him.</p>
						</div>
					</div>
					<div class="col-md-4 work-grid">
						<span class="col-md-5 w-icon"><i class="fa fa-search"> </i> </span>
						<div class="col-md-7 work-info">
							<h4>Jain Mrinal</h4>
							<p>Improved and added Content for Good Reads</p>
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
		<!---- //End-team---->
		<!----start-contributors---->
		<div  id="contributors" class="testmonials">
			<div class="container">
				<div class="head text-center">
						<h3><span> </span> Past Contributions</h3>
				</div>
			<!----start-testmonial-time-line---->
			<div class="test-monial-time-line">
				<div class="col-md-6 test-monial-time-line-left">
					<div class="test-monial-time-line-grid test-monial-time-line-grid-l1">
						<div class="col-md-9 test-monial-time-line-left-text">
							<p>Coding for Maps and Markers</p>
						</div>
						<div class="col-md-3 test-monial-time-line-left-pic">
							<img src="images/pic1.jpg" title="name" />
							<a href="#">Mohd. Harris</a>
						</div>
						<span class="grid-point"> </span>
					</div>
				</div>
				<div class="test-monial-timeline-connector">
					<span> </span>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
		<div class="clearfix"> </div>
			<!----//End-contributors---->
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

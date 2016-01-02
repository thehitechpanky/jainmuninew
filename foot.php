<?php
include 'contact.php';
include 'adsense.php';
?>
<!--start-footer-->
<div class="footer">
	<div class="container">
		<div class="footer-left">
			<a href="#"><img src="images/footer-logo.png" title="Jain Muni Locator" alt="Jain Muni Locator" /></a>
			<p>Copyright © 2012-2015 Jain Muni Locator, All rights reserved | Developed by <a href="http://smilyo.com">Smilyo</a></p>
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
<!--//End-footer-->

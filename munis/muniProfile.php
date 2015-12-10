<?php
$dos = $row['dos'];
?>
<!----start-temple-profile---->
<div id="temple" class="blog">
	<!---- start-blog-time-line---->
	<div class="blog-time-line">
		<div class="col-md-6 blog-time-line-left"><br /><br />
			<img src="<?php echo $row['img']; ?>" width="60%" />
		</div>
		<div class="col-md-6 blog-time-line-right">
			<?php if($row['location'] == "N/A" or $dos <> "0000-00-00") {} else { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Location</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>-->
					<h4 class="post-head"><a href="#"> Recently near </a></h4><br /><br /><br />
					<p><a href="map.php"><i class="fa fa-map-marker fa-2x"></i> <?php echo $row['location']; ?></a> </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } if($row['phone'] == "0" and $row['email'] == "N/A" and $row['website'] == "#" and $row['facebook'] == "#"
					   and $row['youtube'] == "#" and $row['wikipedia'] == "#") {} else { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Contact</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Food</a></span>--><br />
					<h4 class="post-head"><a href="#"> Links </a></h4><br /><br />
					<p>
						<?php if($row['website'] <> "#") {echo '<a href="'.$row['website'].'"><i class="fa fa-desktop fa-3x"></i></a> '; } ?>
						<?php if($row['phone'] > 0) {echo '<a href="'.$row['phone'].'"><i class="fa fa-phone-square fa-3x"></i></a> '; } ?>
						<?php if($row['email'] <> "N/A") {echo '<a href="mailto:'.$row['email'].'"><i class="fa fa-envelope fa-3x"></i></a> '; } ?>
						<?php if($row['facebook'] <> "#") {echo '<a href="'.$row['facebook'].'"><i class="fa fa-facebook-square fa-3x"></i></a> '; } ?>
						<?php if($row['youtube'] <> "#") {echo '<a href="'.$row['youtube'].'"><i class="fa fa-youtube-play fa-3x"></i></a> '; } ?>
						<?php if($row['wikipedia'] <> "#") {echo '<a href="'.$row['wikipedia'].'"><i class="fa fa-wikipedia-w fa-3x"></i></a> '; } ?>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } if($tcreator == "") {} else { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Built by</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#"> <?php echo $tcreator; ?> </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } ?>
			<div class="blog-post-time-line-connector">
				<span> </span>
			</div>
			<!--<div class="more-blog-post-time-line-connector">
<a href="#"><span>More</span></a>
</div>-->
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---- //End-blog-time-line---->
</div>
<!----//End-temple-profile---->

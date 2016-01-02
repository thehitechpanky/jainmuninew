<?php
$dos = $row['dos'];
$upadhi = $row['upadhi'];
$ailacharyaguru = $row['ailacharyaguru'];
$upadhyayguru = $row['upadhyayguru'];
?>
<!--start-muni-profile-->
<div id="muni" class="blog">
	<!--start-blog-time-line-->
	<div class="blog-time-line">
		<div class="col-md-6 blog-time-line-left"><br /><br />
			<img src="<?php echo $row['img']; ?>" alt="<?php echo $title; ?>" class="profile" />
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
			<?php } if($dos == "0000-00-00") {} else { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Death</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#"> <?php echo $dos; ?> </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Books</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#"> Coming Soon... </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Chaturmas</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#"> Coming Soon... </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php if($upadhi == 1) { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Acharya</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#">  Pad Details </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } if($ailacharyaguru > 0) { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Elacharya</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#"> Pad Details </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } if($upadhyayguru > 0) { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Upadhyay</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#"> Pad Details </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } if($upadhi < 5) { ?>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label>Muni</label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<!--<span class="categorie">Category : <a href="#">Traveling</a></span>--><br />
					<h4 class="post-head"><a href="#"> Deeksha Details </a></h4><br /><br />
					<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<?php } ?>
			<div class="blog-post-time-line-connector">
				<span> </span>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//End-blog-time-line-->
</div>
<!--//End-muni-profile-->

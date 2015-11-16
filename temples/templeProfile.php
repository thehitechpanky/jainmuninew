<!----start-temple-profile---->
		<div id="temple" class="blog">
			<!---- start-blog-time-line---->
			<div class="blog-time-line">
				<div class="col-md-6 blog-time-line-left"><br /><br />
					<img src="<?php echo $row['timg']; ?>" width="40%" />
				</div>
				<div class="col-md-6 blog-time-line-right">
					<?php if($type == "") {} else { ?>
					<div class="blog-post">
						<div class="col-md-2 blog-post-date">
							<span><label>Type</label></span>
						</div>
						<div class="col-md-10 blog-post-info">
							<!--<span class="categorie">Category : <a href="#">Traveling</a></span>-->
							<h4 class="post-head"><a href="#"> <?php echo $type; ?> </a></h4><br /><br /><br />
							<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>-->
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<?php } if($tyear == "") {} else { ?>
					<div class="blog-post">
						<div class="col-md-2 blog-post-date">
							<span><label><?php echo $tyear; ?></label></span>
						</div>
						<div class="col-md-10 blog-post-info">
							<!--<span class="categorie">Category : <a href="#">Food</a></span>--><br />
							<h4 class="post-head"><a href="#"> Year of Construction </a></h4><br /><br />
							<!--<p></p>-->
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

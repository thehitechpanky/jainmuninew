<?php
include 'config.php';
include 'munis/getMuni.php';
//Define variables for head.php
if(isset($_GET['id'])) {
	$id = (int)$_GET['id'];
	$t = $db->prepare('SELECT * FROM munishri, upadhis, kshullika, aryika, bhramcharya, kshullak, ailak, muni, upadhyay, ailacharya, acharya, muni_location, history, contact
						WHERE id = '.$id.' AND approved=1 AND uid=upadhi AND id=kshullikaid AND id=aryikaid AND id=bhramcharyaid AND id=kid AND id=ailakid AND id=muniid AND id=upadhyayid AND id=ailacharyaid AND id=acharyaid AND id=mid AND id=historyid AND id=contactid');
	$t->execute();
	if($t->rowCount() == 1) {
		$row = $t->fetch(PDO::FETCH_ASSOC);
		$name = getmuni($row['id']);
		$titlename = $name;
	} else {
		$titlename = 'Digambara Jain Saints';
	}
} else {
	$titlename = 'Digambara Jain Saints';
}
$title = $titlename.' | Jain Muni Locator';
?>

<!DOCTYPE HTML>
<html>
	<?php include 'head.php'; ?>
	<body>
		<!--start-container-->
		<!--start-header-->
		<div id="home" class="">
			<div class="container">
				<?php
$navlinks = '<li class=""><a href="/subdomains/jainmuninew" class="">Home</a></li>';
if ($titlename == 'Digambara Jain Saints') {
	$navlinks = $navlinks.'<li class="active"><a href="#saints" class="scroll">Saints</a></li>
						<li class="page-scroll"><a href="#more" class="scroll">More</a></li>';
} else {
	$navlinks = $navlinks.'<li class="active"><a href="#muni" class="scroll">Saint</a></li>
						<li class=""><a href="#" class="scroll">Edit</a></li>
						<li class=""><a href="/subdomains/jainmuninew/munis.php" class="">More</a></li>';
}
$navlinks = $navlinks.'<li class="contatct-active page-scroll"><a href="#contact" class="scroll">Contact</a></li>';
include 'nav.php';
				?>
			</div>
		</div>
		<!--//End-header-->
		<!--start-munis-->
		<div id="saints" class="testmonials">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> <?php echo $titlename; ?></h3>
				</div>
				<?php if ($titlename == 'Digambara Jain Saints') { ?>
				<script type="text/javascript" src="munis/searchMunis.js"></script>
				<p class="center">List of All Digambar Jain Saints is given Below. Click on the name to see more information</p>
				<input id="searchMunis" type="search" placeholder="Search..." class="center" />
				<div class="test-monial-time-line" id="searchResults">
					<div class="test-monial-timeline-connector">
						<span> </span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php
				} else {
					include 'munis/muniProfile.php';
				}
				?>
			</div>
		</div>
		<div class="clearfix"> </div>
		<!--//End-saints-->
		<!--start-more-->
		<div id="more" class="features">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> More</h3>
					<p>What else would you like to check out today?</p>
				</div>
				<!--start-more-grids-->
				<div class="features-grids text-center">
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-street-view"> </i> </span>
						<h3><a href="tirthankara.php">Tirthankara</a></h3>
						<p>Check biographies of Tirthankara.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-fort-awesome"> </i> </span>
						<h3><a href="temples.php">Temples</a></h3>
						<p>See profiles of Digmabara temples.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-users"> </i> </span>
						<h3><a href="idols.php">Idols</a></h3>
						<p>Check out the details of Digambara Jain Idols.</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-globe"> </i> </span>
						<h3><a href="map.php">Map</a></h3>
						<p>Locate Jain Saints and Nuns on a single map.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--//End-more-grids-->
			</div>
		</div>
		<!--//End-more-->
		<?php include 'foot.php'; ?>
		<!--//End-container-->
	</body>
</html>

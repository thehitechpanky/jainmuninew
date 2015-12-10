<?php
include 'config.php';
include 'munis/getMuni.php';
//Define variables for head.php
if(isset($_GET['id'])) {
	$id = (int)$_GET['id'];
	$t = $db->prepare("SELECT * FROM munishri WHERE id = '$id'");
	$t->execute();
	if($t->rowCount() == 1) {
		$row = $t->fetch(PDO::FETCH_ASSOC);
		$name = $row['id'];
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
		<!----start-container---->
		<!----start-header---->
		<div id="home" class="">
			<div class="container">
				<!---- start-logo---->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="Jain Muni Locator" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				<nav class="top-nav">
					<ul class="top-nav">
						<li class=""><a href="/subdomains/jainmuninew" class="">Home</a></li>
						<?php if ($titlename == 'Digambara Jain Saints') { ?>
						<li class="active"><a href="#saints" class="scroll">Saints</a></li>
						<li class="page-scroll"><a href="#more" class="scroll">More</a></li>
						<?php } else { ?>
						<li class="active"><a href="#saint" class="scroll">Saint</a></li>
						<li class=""><a href="#" class="scroll">Edit</a></li>
						<li class=""><a href="/subdomains/jainmuninew/saints.php" class="scroll">More</a></li>
						<?php } ?>
						<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
		<!----start-munis---->
		<div id="saints" class="testmonials">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> <?php echo $titlename; ?></h3>
				</div>
				<?php if ($titlename == 'Digambara Jain Saints') { ?>
				<script type="text/javascript" src="munis/searchMunis.js"></script>
				<p><center>List of All Digambar Jain Saints is given Below. Click on the name to see more information</center></p>
				<center><input id="searchMunis" type="search" placeholder="Search..." /></center>
				<div class="test-monial-time-line" id="searchResults">
					<div class="test-monial-timeline-connector">
						<span> </span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php
} else {
	echo '<p>'.$name.'</p>';
	include 'munis/muniProfile.php';
}
				?>
			</div>
		</div>
		<div class="clearfix"> </div>
		<!----//End-temples---->
		<?php include 'foot.php'; ?>
		<!----//End-container---->
	</body>
</html>

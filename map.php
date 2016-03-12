<!DOCTYPE html>
<html>
	<head>
		<title>Locate Digambara Muni | Jain Muni Locator</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="map/googleMap.css">
		<link rel="stylesheet" href="map/sliderMenu.css">
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
	</head>
	
	<body>
		<input id="pac-input" class="controls" type="text" placeholder="       Search Box" />
		<div id="map"></div>
		<?php
include 'config.php';
include 'munis/getMuni.php';
//Markers from SQL
$q = $db->prepare("SELECT * FROM muni_location, munishri, upadhis WHERE mid=id AND upadhi=uid AND lat<>0 AND dos='0000-00-00' ORDER BY upadhi DESC");
$q->execute();
$i = 0;
if($q->rowCount() > 0) {
	$rows = array();
	while($row = $q->fetch(PDO::FETCH_ASSOC)) {
		$rows[] = $row;
	}
}
//User Markers from SQL for map
$q = $db->prepare("SELECT * FROM user WHERE userlat<>0");
$q->execute();
if($q->rowCount() > 0) {
	$rows2 = array();
	while($row2 = $q->fetch(PDO::FETCH_ASSOC)) {
		$rows2[] = $row2;
	}
}
		?>
		<textarea id=munilocations class="mapinput">
			<?php echo json_encode($rows); ?>
		</textarea>
		<textarea id=userlocations class="mapinput">
			<?php echo json_encode($rows2); ?>
		</textarea>
		<?php include 'map/googleMap.php'; ?>
		<!-- Start Menu -->
		<div id="pgcontainer">
			<a href="#" class="menubtn" title="Menu"></a>
			<div id="menu">
				<ul>		            
					<li><a target="" href="./" title="Home">Home</a></li>
					<li><a target="" href="./about.php" title="About">About</a></li>
					<li><a target="" href="./munis.php" title="Munis">Munis</a></li>
				</ul>
			</div>
			<div class="overlay"></div>
		</div>
		<!-- End Menu -->
	</body>
</html>

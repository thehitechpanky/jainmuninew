<!DOCTYPE html>
<html>
	<head>
		<title>Locate Digambara Muni | Jain Muni Locator</title>
		<meta name="viewport" content="initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" href="map/googleMap.css">
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
	</head>
	
	<body>
		<div id="map"></div>
		<?php
include 'config.php';
include 'munis/getMuni.php';
//Markers from SQL
$q = $db->prepare("SELECT * FROM muni_location, munishri WHERE mid=id AND lat<>0 AND dos='0000-00-00' ORDER BY upadhi DESC");
$q->execute();
$i = 0;
if($q->rowCount() > 0) {
	$rows = array();
	while($row = $q->fetch(PDO::FETCH_ASSOC)) {
		$rows[] = $row;
	}
}
		?>
		<textarea id=array>
			<?php echo json_encode($rows); ?>
		</textarea>
		<?php include 'map/googleMap.php'; ?>
	</body>
</html>

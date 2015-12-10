<?php
// configuration
include '../config.php';
include 'getMuni.php';

$searchInput=$_REQUEST['searchInput'];

if(isset($searchInput) == false) {
	echo "Invalid Access";
	return;
}

$testCondition = "%".$searchInput."%";

$q=$db->prepare("SELECT * FROM munishri, upadhis WHERE ( name LIKE '$testCondition' OR
														uname LIKE '$testCondition' OR
														prefix LIKE '$testCondition' OR
														suffix LIKE '$testCondition' OR
														alias LIKE '$testCondition' ) AND
														upadhi = uid
														ORDER BY upadhi, name");
$q->execute();
if($q->rowCount() != 0) {
	echo '<div class="col-md-6 test-monial-time-line-left">'; //start left
	$i = 0;
	$j = 0;
	while($row = $q->fetch(PDO::FETCH_ASSOC)) {
		$i = $i + 1;
		if($i % 2 == 0) {
			$j = $j + 1;
			echo '<div class="test-monial-time-line-grid test-monial-time-line-grid-l'.$j.'">
						<div class="col-md-9 test-monial-time-line-left-text">
						<a href="?id='.$row['id'].'">'.getmuni($row['id']).'</a>
						</div>
						<div class="col-md-3 test-monial-time-line-left-pic">
						<img src="'.$row['img'].'" title="'.getmuni($row['id']).'" width="100px" height="100px" />
						</div>
						<span class="grid-point"> </span>
					</div>';
		}else{}
	}
	echo '</div>'; //close left
}

$q=$db->prepare("SELECT * FROM munishri, upadhis WHERE ( name LIKE '$testCondition' OR
														uname LIKE '$testCondition' OR
														prefix LIKE '$testCondition' OR
														suffix LIKE '$testCondition' OR
														alias LIKE '$testCondition' ) AND
														upadhi = uid
														ORDER BY upadhi, name");
$q->execute();
if($q->rowCount() != 0) {
	echo '<div class="col-md-6 test-monial-time-line-right">'; //start right
	$i = 0;
	$j = 0;
	while($row = $q->fetch(PDO::FETCH_ASSOC)) {
		$i = $i + 1;
		if($i % 2 == 0) {}else{
			$j = $j + 1;
			echo '<div class="test-monial-time-line-grid test-monial-time-line-grid-r'.$j.'">
						<div class="col-md-3 test-monial-time-line-left-pic">
						<img src="'.$row['img'].'" title="'.getmuni($row['id']).'" width="100px" height="100px" />
						</div>
						<div class="col-md-9 test-monial-time-line-left-text">
						<a href="?id='.$row['id'].'">'.getmuni($row['id']).'</a>
						</div>
						<span class="grid-point grid-point1"> </span>
					</div>';
		}
	}
	echo '<div class="clearfix"> </div>
	</div>'; //close right
}
//} else {
//	echo "<span style='color:red'>Our records don't have an entry for the temple you searched. 
//	If you have any kind of information about that temple please help us to collect the data by adding information 
//	<a href='#'>here</a></span><br /><br />";
//}

?>

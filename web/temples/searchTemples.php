<?php
// configuration
include '../config.php';

$searchInput=$_REQUEST['searchInput'];

if(isset($searchInput) == false) {
	echo "Invalid Access";
	return;
}

$testCondition = "%".$searchInput."%";

$q=$db->prepare("SELECT * FROM temples WHERE tname LIKE '$testCondition'");
$q->execute();
$i = 0;
if($q->rowCount() != 0) {
	//start-temple-listing
	echo '<div class="test-monial-time-line">
				<div class="col-md-6 test-monial-time-line-left">';
	while($row = $q->fetch(PDO::FETCH_ASSOC)) {
		$i = $i + 1;
		if($i % 2 == 0) {
		}else{
			echo '<div class="test-monial-time-line-grid test-monial-time-line-grid-l'.$i.'">
						<div class="col-md-9 test-monial-time-line-left-text">
						<p>'.$row['tadd'].'</p>
						</div>
						<div class="col-md-3 test-monial-time-line-left-pic">
						<img src="'.$row['timg'].'" title="'.$row['tname'].'" width="100px" height="100px" />
							<a href="?id='.$row['tid'].'">'.$row['tname'].'</a>
						</div>
						<span class="grid-point"> </span>
					</div>';
		}
	}
	echo '</div>
	<div class="test-monial-timeline-connector">
					<span> </span>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
		<div class="clearfix"> </div>';
} else {
	echo "<span style='color:red'>Our records don't have an entry for the temple you searched. 
	If you have any kind of information about that temple please help us to collect the data by adding information 
	<a href='#'>here</a></span><br /><br />";
}

?>

<?php 
include '../config.php';

$email = $_GET['email'];
$username = $_GET['username'];
$userlat = 0;
$userlng = 0;
$userlocation = "N/A";

// fileds of editlog
$usertimestamp = date("Y-m-d H:i:s", time());
$userip = $_SERVER['REMOTE_ADDR'];

$u = $db->prepare("SELECT * FROM user WHERE email=?");
$u->execute(array($email));

if($u->rowCount() == 1) {
	$q = $db->prepare("UPDATE user SET username=?, usertimestamp=?, userip WHERE email=?");
	$q->execute(array($username,$usertimestamp,$userip,$email));
} else {
	$q = $db->prepare("INSERT INTO user (email,username,userlat,userlng,userlocation,usertimestamp,userip) VALUES (?,?,?,?,?,?,?)");
	$q->execute(array($email,$username,$userlat,$userlng,$userlocation,$usertimestamp,$userip));
}

?>

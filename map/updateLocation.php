<?php 
include '../config.php';

$email = $_GET['email'];
$username = $_GET['username'];
$userlat = 0;
$userlng = 0;
$userlocation = "N/A";

$u = $db->prepare("SELECT * FROM user WHERE email=?");
$u->execute(array($email));

if($u->rowCount() == 1) {
	$q = $db->prepare("UPDATE user SET username=? WHERE email=?");
	$q->execute(array($username,$email));
} else {
	$q = $db->prepare("INSERT INTO user (email,username,userlat,userlng,userlocation) VALUES (?,?,?,?,?)");
	$q->execute(array($email,$username,$userlat,$userlng,$userlocation));
}

?>

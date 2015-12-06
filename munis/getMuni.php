<?php
function getmuni($id)
{
	global $db;
	$m = $db->prepare("SELECT * FROM munishri, upadhis WHERE id = ? AND approved=1 AND uid=upadhi");
	$m->execute(array($id));
	if($m->rowCount() == 1)
	{
		$n = $m->fetch(PDO::FETCH_ASSOC);
		if($n['alias'] == "") {$t = $n['uname'].' '.$n['prefix'].' '.$n['name'].' '.$n['suffix'];}
		else {$t = $n['uname'].' '.$n['prefix'].' '.$n['name'].' '.$n['suffix'].' '.$n['alias'];}
		return $t;
	}
	else
	{
		return "N/A";
	}
}
?>

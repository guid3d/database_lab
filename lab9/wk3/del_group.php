<?php require_once('connect.php');
session_start();?>
<?php

if (!isset($_SESSION['USER_NAME']) || $_SESSION['USER_GROUPID'] == 3)
{
	$no_permission = true;
}
else {
	$no_permission = false;
}

if ($no_permission)
{
	echo "You have no permission";
	exit;
}

<?php
	$id = $_GET['id']; // group id
	require_once('connect.php');
	if (isset($id)) {
		$q="DELETE FROM usergroup where USERGROUP_ID=$id";
		$q = strtolower($q);
		if(!$mysqli->query($q)){
			echo "DELETE failed. Error: ".$mysqli->error ;
	   }
	   $mysqli->close();
	   //redirect
	   header("Location: group.php");
	}
?>

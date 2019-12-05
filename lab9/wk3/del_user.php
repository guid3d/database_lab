<?php require_once('connect.php');
session_start();?>
<?php

if (!isset($_SESSION['USER_NAME']) || $_SESSION['USER_GROUPID'] == 2)
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

	$userid = $_GET['userid']; // user id
	require_once('connect.php');
	if(isset($userid)) {
		$q="DELETE FROM user where USER_ID=$userid";
		$q = strtolower($q);
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: user.php");
	}
?>

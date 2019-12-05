<?php
$wrongpassword = 0;

if (isset($_POST['username']) && isset($_POST['passwd']))
{
	$uu = trim($_POST['username']);
	$pp = trim($_POST['passwd']);
	if (strlen($uu) > 0 && strlen($pp) > 0)
	{
		include('connect.php');
		$q = 'SELECT * FROM user WHERE USER_NAME LIKE "'.$uu.'" and USER_PASSWD LIKE "'.$pp.'"';
		//echo $q;
		if ($res = $mysqli->query($q))
		{
			$row = $res->fetch_array();
			if ($row && isset($row['USER_NAME']))
			{
				session_start();
				$_SESSION['USER_NAME'] = $row['USER_NAME'];
        $_SESSION['USER_GROUPID'] = $row['USER_GROUPID'];
        var_dump($_SESSION);
        // echo "Login Success ";
				// echo ">>>>> Login as USER_ID: ".$row['USER_ID'];
        // echo "----- ".$row['USER_NAME'];
				header("Location: user.php");
			}
			else
			{
				$wrongpassword = 1;
			}
		}
		else
		{
			$wrongpassword = 1;
		}
	}
}

if ($wrongpassword==1)
{
	echo '<div>Wrong Password</div>';
}

?>

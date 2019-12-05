<?php
$wrongpassword = 0;
if (isset($_GET['logout']) && $_GET['logout'] == 'logout')
{
	session_start();
	session_destroy();
	////
	//// session start
	//// session destory
	////
}

if (isset($_POST['uname']) && isset($_POST['upass']))
{
	$uu = trim($_POST['uname']);
	$pp = trim($_POST['upass']);
	if (strlen($uu) > 0 && strlen($pp) > 0)
	{
		include('dbconn.php');
		$q = 'SELECT * FROM users WHERE uuser LIKE "'.$uu.'" and upass LIKE "'.$pp.'"';
		//echo $q;
		if ($res = $conn->query($q))
		{
			$row = $res->fetch_array();
			if ($row && isset($row['uid']))
			{
				session_start();
				$_SESSION['uid'] = $row['uid'];
				//echo ">>>>>".$row['uid'];
				header("Location: content.php");
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

?>
<html>
<body>
<h1>Login</h1>

<form action="login.php" method="post">

<table border="0" cellpadding="2">
<tr>
<td>Username:</td>
<td><input type="text" name="uname"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="upass"></td>
</tr>


<tr>
<td colspan="2" align="center">
<input type="submit" value="Login">
</td>
</tr>

</table>

</form>

<?php
if ($wrongpassword==1)
{
	echo '<div>Worng Password</div>';
}
?>

</body>
</html>

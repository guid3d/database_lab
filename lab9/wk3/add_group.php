<!DOCTYPE html>
<?php require_once('connect.php');
session_start();?>
<html>
<head>
<title>ITS331 Sample</title>
<link rel="stylesheet" href="default.css">
</head>

<?php
//var_dump($_SESSION);

if (!isset($_SESSION['USER_NAME']) || $_SESSION['USER_GROUPID'] == 3)
{
	$no_permission = true;
}
else {
	$no_permission = false;
}
?>

<body>
<div id="wrapper">
	<div id="div_header">
		ITS331 System
	</div>
	<div id="div_subhead">
		<?php echo "Login as ".$_SESSION['USER_NAME']. " -- ".$_SESSION['USER_GROUPID']; ?>
	</div>

	<div id="div_main">
		<div id="div_menu">
			<ul id="menu">
				<li><a href="user.php">User Profile</a></li>
				<li><a href="add_user.php">Add User</a></li>
				<li><a href="group.php">User Group</a></li>
				<li><a href="add_group.php">Add User Group</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>

		<div id="div_content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->
			<h2>Add User Group</h2>
			<?php
			if ($no_permission)
			{
				echo "You have no permission";
				exit;
			}
			?>
			<form action="group.php" method="post">
				<label>Group Code</label>
				<input type="text" name="groupcode">

				<label>Group Name</label>
				<input type="text" name="groupname">

				<label>Remark</label>
				<textarea name="remark">Description</textarea><br>

				<label>URL</label>
				<input type="text" name="url">

				<div class="center">
					<input type="submit" name="submit" value="Submit">
					<input type="reset" value="Cancel">
				</div>
				<input type="hidden" name="page" value="addgroup">
			</form>
		</div> <!-- end div_content -->
	</div> <!-- end div_main -->

	<div id="div_footer">

	</div>

</div>
</body>
</html>

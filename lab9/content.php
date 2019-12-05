<?php
session_start();
/// Redirect to login if not login
?>
<html>
<body>
<h1>CONTENT</h1>
<hr>
content content content content content 
<?php

echo $_SESSION['uid'];
//// load user info

?>

<hr>
<a href="login.php">Back to Login</a>
 | <a href="login.php?logout=logout">Logout</a>
</body>
</html>
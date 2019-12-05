<?php session_start();

?>

<html>
<body>
  <h1>Session Page2</h1>
  <hr>

<?php
echo $_SESSION['var1'];
echo "<hr>";
echo session_id();q

?>

</body>
</html>

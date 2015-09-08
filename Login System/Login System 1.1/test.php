<!DOCTYPE html>
<html>
<body>

<?php
$con = mysqli_connect("localhost","root","","php_mysql_login_system");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else {
 
 echo "YES";
 } 
?>
</body>
</html>
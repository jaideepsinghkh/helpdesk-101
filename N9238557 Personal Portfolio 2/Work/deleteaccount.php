<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_mysql_login_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
if($_SESSION['roles']=="user"){
$sql = "DELETE FROM users WHERE user='".$_SESSION['user']."'"; }

else if($_SESSION['roles']=="admin"){
$sql = "DELETE FROM staffs WHERE staff='".$_SESSION['user']."'"; }


if (mysqli_query($conn, $sql)) {
    echo "Account deleted successfully";
	session_unset(); 
	session_destroy(); 
	header( "Refresh:1; url=home.php", true, 303);
} else {
    echo "Error deleting Acount: " . mysqli_error($conn);
	header( "Refresh:1; url=error.php", true, 303);
}

mysqli_close($conn);
?>
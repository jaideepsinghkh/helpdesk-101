<?php
session_start();

if($_SESSION['roles']=="admin"){
}

else{
header( "Location: error.php");
exit();
}

?>
<!DOCTYPE html>
<html>

<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
<title>Customers Detail</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
</head>

<body>
<div class="head-content">
		<div class="Logo-content">
			<ul class="head-text">
				<li class="r-border" style="width: 200px">
					The Brisbane Help Desk
					<br>
					Brisbane, Queensland

				</li>
			</ul>
		</div>
	</div>
	<nav class="navi-bar">
		<div class="navi-content">
			<ul>
				<li class="navi-item">
					<a href="staffs.php">Dashboard</a>

				</li>

				<li class="navi-item">
					<a href="jobassign.php">Jobs Assigned</a>
				</li>

				<li class="navi-item">
					<a href="#">Customers Details</a>
				</li>
				
				<li class="navi-item">				

					<a href="servicesprovider.php">Services Provider</a>
					
				</li>
				
				<li class="navi-item">

					<?php

					if(isset($_SESSION['user'])){
						echo "<a href='staffaccount.php'> Account Details</a>";
						echo "<div> <ul><li class='sub-navi-menu3'><a href='logout.php'>Logout</a></li></ul> </div>";
			

					}		
					else{		
						echo "<a href='login.php'>Login</a>";				
					}

					?>
					



				</li>
				
				
			</ul>
		</div>
	</nav>
	<div class="register-content">
	<h1>Customer Details</h1>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_mysql_login_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$sql = "select * from users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table style='width:1200px'><tr><th>User ID</th><th style='width:100px'>User</th><th style='width:100px'>First Name</th><th style='width:100px'>Last Name</th><th style='width:80px'>Gender</th><th style='width:150px'>Email</th><th colspan='3'>Address</th><th>Mobile</th><th>Date Of Birth</th><th>Nationality</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><th style='width:10px'>". $row["id"]."</th><th>". $row["user"]."</th><th>". $row["fname"]."</th><th>". $row["lname"] . "</th><th>" .$row["gender"]. "</th><th>".$row["email"]."</th><th colspan='3'>".$row["add1"].", ".$row["add2"].", ".$row["add3"]."</th><th>".$row["mobile"]."</th><th>".$row["dob"]."</th><th>".$row["nationality"]."</th></tr>" ;
     }
	 echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>
</div>
</body>

</html>

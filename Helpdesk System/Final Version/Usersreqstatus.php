<?php
session_start();
if($_SESSION['roles']=="user"){
}

else{
header( "Location: error.php");
exit();
}

?>
<!DOCTYPE html>
<html>

<head>
<title>Request Status</title>
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
				
				<a href="users.php">Dashboard</a>

				</li>

				<li class="navi-item">
					<a href="services.php">Services</a>
					<div>
						<ul>
							<li class="sub-navi-menu"><a href="service-plumber.php">Plumbers</a></li>
							<li class="sub-navi-menu"><a href="service-electrician.php">Electrician</a></li>
							<li class="sub-navi-menu"><a href="service-aircondition.php">Air Conditioning</a></li>
							<li class="sub-navi-menu"><a href="service-buildingwork.php">Building Work</a></li>
							<li class="sub-navi-menu"><a href="service-carrepair.php">Car Repairs</a></li>
						</ul>
					</div>
				</li>

				<li class="navi-item">
					<a href="contactus.php">Contact Us</a>
				</li>
				
				<li class="navi-item">				

					<a href="aboutus.php">About Us</a>
					
				</li>
				
				<li class="navi-item">

					<?php

					if(isset($_SESSION['user'])){
						echo "<a href='account.php'> Account Details</a>";
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

<table style="width:1000px">
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

$sql = "SELECT * FROM request WHERE user IN (SELECT id FROM users WHERE user= '".$_SESSION['user']."' )";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table style='width:1000px'><tr style='height:100px'><th>Request ID</th><th>Category Of Request</th><th>Details</th><th style='width:300px'>Request Date</th><th>Status</th><th>Assigned Staff ID</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><th>" . $row["request_id"]. "</th><th>" . $row["category_of_request"]. "</th><th>" . $row["details_request"]. "</th><th>" . $row["request_date"]. "</th><th>" . $row["Status"]. "</th><th>" . $row["staff_id"]."</th></tr>";
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

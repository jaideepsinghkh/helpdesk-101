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
					<a href="customerdetails.php">Customers Details</a>
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
	<h1>Request List</h1>
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
	$sql = "select users.user,category_of_request,details_request,contact_time,request_date,status,staff_id,request_id from request inner join users on users.id=request.user
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table style='width:1200px'><tr><th>Request ID</th><th style='width:100px'>Customer</th><th>Category</th><th>Details</th><th>Contact time</th><th style='width:150px'>Request Date</th><th style='width:100px'>Status</th><th style='width:100px'>Staff assigned</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><th style='width:10px'>". $row["request_id"]."</th><th>". $row["user"]."</th><th>". $row["category_of_request"]."</th><th>". $row["details_request"] . "</th><th>" .$row["contact_time"]. "</th><th>".$row["request_date"]."</th><th>".$row["status"]."</th><th>".$row["staff_id"]."</th></tr>" ;
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

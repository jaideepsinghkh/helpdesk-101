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
<title>Logged in successfully</title>
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
					<a href="#">Jobs Assigned</a>
				</li>

				<li class="navi-item">
					<a href="#">Customers Details</a>
				</li>
				
				<li class="navi-item">				

					<a href="services1.php">Services Provider</a>
					
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
	$sql = "select users.user,category_of_request,details_request,contact_time,request_date from request inner join users on users.id=request.user
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>name</th><th>category</th><th>Details</th><th>contact time</th><th>request date</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["user"]."</td><td>". $row["category_of_request"]."</td><td>". $row["details_request"] . "</td><td>" .$row["contact_time"]. "</td><td>".$row["request_date"]."</td></tr>" ;
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

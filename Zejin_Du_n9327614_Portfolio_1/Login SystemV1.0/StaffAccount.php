<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Account Details</title>
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
					<a href="staffhome.php">Home</a>

				</li>

				<li class="navi-item">
					<a href="#">Jobs Assigned</a>
				</li>

				<li class="navi-item">
					<a href="#">Customers Details</a>
				</li>
				
				<li class="navi-item">				

					<a href="#">Services Provider</a>
					
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
		
	<h1>Staff Account Details</h1>
	

<h1 style="font-size:30px;">
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

$sql = "SELECT * FROM staffs WHERE staff='".$_SESSION['user']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Staff ID: " . $row["staff_id"]. "<br> Name:" . $row["fname"]. " " . $row["lname"].  "<br>";
		echo "Gender:"  . $row["gender"] . "<br> Date of Birth:".  $row["dob"]. "<br>";
		echo "Nationality"  . $row["nationality"]. "<br> Address:"  . $row["add1"]. "<br>"  . $row["add2"]. ","  . $row["add3"]. "<br>" ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>	
	

	
	</h1>
	
	
</body>

</html>

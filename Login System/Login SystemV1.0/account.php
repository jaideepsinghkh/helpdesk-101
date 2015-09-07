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
			<li class="r-border">
				the Brisbane Help Desk
				<br>Brisbane, Queensland

			</li>
			<li>
				Whenever, &nbsp; Whoever, &nbsp; Wherever
			</li>
		</ul>
	</div>
</div>
	<nav class="navi-bar">
		<div class="navi-content">
			<ul>
				<li class="navi-item">
					<a href="home.php">Home</a>

				</li>

				<li class="navi-item">
					<a href="services.php">Services</a>
					<div>
						<ul>
							<li class="sub-navi-menu"><a href="#">Service1</a></li>
							<li class="sub-navi-menu"><a href="#">Service2</a></li>
							<li class="sub-navi-menu"><a href="#">Service3</a></li>
						</ul>
					</div>
				</li>

				<li class="navi-item">
					<a href="contactus.php">Contact Us</a>
					<div>
						<ul>
							<li class="sub-navi-menu2"><a href="#">Administrator contact</a></li>
							<li class="sub-navi-menu2"><a href="#">Brisbane Help desk center</a></li>
							<li class="sub-navi-menu2"><a href="#">Volunteer contact</a></li>
						</ul>
					</div>
				</li>
				
				<li class="navi-item">				
				
					<a href="aboutus.php">About Us</a>
					
				</li>
				
				<li class="navi-item">

							<?php
							
					if(isset($_SESSION['user'])){
					 echo "<a class='r-border' href='account.php'> Account Details</a>";
					 echo "<div> <ul><li class='sub-navi-menu2'><a href='logout.php'>Logout</a></li></ul> </div>";
   					 
					}		
					else{		
					echo "<a class='r-border' href='login.php'>Login</a>"	;				
					 }
							?>


				</li>
				
				
			</ul>
		</div>
	</nav>
		
	<h1>Account Details</h1>
	

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

$sql = "SELECT * FROM users WHERE user='".$_SESSION['user']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "User ID: " . $row["id"]. "<br> Name:" . $row["fname"]. " " . $row["lname"].  "<br>";
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

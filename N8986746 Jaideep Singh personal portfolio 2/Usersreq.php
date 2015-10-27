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
<title>Request Form</title>
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
	<h1 class="login-hearder" style="text-align:center">Request form</h1> <br>	
	
<div class="register-content">
	
<?php
require_once("db_const.php");
if (!isset($_POST['submit'])) {
?>	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
				<table>
				<tr>
					<td colspan="4">
					</td>
				</tr>
				<tr>

					<td>
						<p>Category of Request:</p>
					</td>
					<td>
										
						 <select name="category" class="gender-select" hidefocus="true">
    				   	 <option value="Plumbers">Plumbers</option>
    				   	 <option value="Car Repairs">Electrician</option>
  				 		 <option value="Air Conditioning">Air Conditioning</option>
   						 <option value="Building Work">Building Work</option>
  						 <option value="Car Repairs">Car Repairs</option>
 					 </select>
					</td>
				</tr>
				<tr>

					<td>
						<p>Details Request: </p>
					</td>
					<td>
					<textarea name="detailsreq" placeholder="What you need?" rows="10" cols="45"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<p >Contact Time:</p>
					</td>
					<td>
						<input type="text" name="time" placeholder="DD/MM/YYYY HH/MM">	
			    	</td>
				</tr>
			
			</table >
			
						<input id="date" name="date" type="hidden">
						<script type="text/javascript">document.getElementById('date').value = Date();</script>
						<input type="hidden" name="status" value="New">	
			
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
   		
   		echo "<input type='hidden' name='id' value='".$row["id"]."'>";		
		echo "<table style='width: 1000px;margin-top: 50px'><tr><td colspan='4' align='center'> <input name='submit' type='submit' value='Request' class='register-button' style='width: 600px'><br>"; 
		echo "<br></td></tr><tr><td colspan='4'><p align='center'>-----------------------OR-----------------------</p><br><h4 align='center'>Question?"; 
		echo "<a href='contactus.php' class='contactus-link'>Contact Us</a></h4></td></tr></table>";
		}
		}
else {
    echo "0 results";
}
$conn->close();

?>
<?php


	}
		
		else{
		
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}

	$category	= $_POST['category'];
	$detailsreq	= $_POST['detailsreq'];
	$time	= $_POST['time'];
	$date	= $_POST['date'];
	$id	= $_POST['id'];
	$status	= $_POST['status'];
		
$sql = "INSERT  INTO `request` (`request_id`, `user`, `category_of_request`, `details_request`, `contact_time`, `request_date`, `status`) 
	VALUES (NULL, '{$id}', '{$category}', '{$detailsreq}', '{$time}', '{$date}', '{$status}')";
 
		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo" <h2 style='font-size:30px;text-align:center'>Request sent! Our Volunteer will reply you ASAP <br> You will redirect to Dashboard</h2>";
			header( "Refresh:10; url=users.php", true, 303);

		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}



		}	
       
    
?>	
			
						
						
		</form></div>				
						
				
</body>

</html>

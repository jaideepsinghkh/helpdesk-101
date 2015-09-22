<?php
session_start();

if($_SESSION['roles']=="user"){
}

else if($_SESSION['roles']=="admin"){
header( "Location: staffaccount.php");
exit();

}


else{
header( "Location: error.php");
exit();
}

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
					<a href='Users.php'>Dashboard</a>
				</li>

				<li class="navi-item">
					<a href="services.php">Services</a>
					<div>
						<ul>
							<li class="sub-navi-menu"><a href="#">Plumbers</a></li>
							<li class="sub-navi-menu"><a href="#">Electrician</a></li>
							<li class="sub-navi-menu"><a href="#">Air Conditioning</a></li>
							<li class="sub-navi-menu"><a href="#">Building Work</a></li>
							<li class="sub-navi-menu"><a href="#">Car Repairs</a></li>
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
		
	<h1>Account Details</h1>
	

	
<div class="register-content">
	
	
	<table style="margin-left:300px">


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
    	
    	
		if (!isset($_POST['update'])){
		echo"<form action='".$_SERVER['PHP_SELF']."' method='post'>"; 
		echo"<tr> <th colspan='4'><p>User ID:".$row["id"]."</p></th> </tr> <tr> <td> <p>First name:</p> </td> <td>";
		echo"<input type='text' name='fname' value='".$row["fname"]."'>";
		echo"</td></tr>";
		
		echo"<tr><td><p>Last name:</p></td><td>";
		echo"<input type='text' name='lname' value='".$row["lname"]."'></td></tr>";
		
		echo"<tr><td><p>Email:</p> </td><td>";
		echo"<input type='email' name='email' value='".$row["email"]."'></td></tr><tr><td><p>Mobile Phone:</p></td><td>";
		echo"<input type='text' name='mobile' value='".$row["mobile"]."'></td></tr><tr><td><p>Date of Birth</p></td><td>";
		echo"<input type='date' name='dob' value='".$row["dob"]."'></td></tr><tr><td><p>Nationailty:</p></td><td>";
		echo"<input type='text' name='nationality' value='".$row["nationality"]."'></td></tr><tr><td><p>Address:</p> </td><td>";
		echo"<input type='text' name='add1' value='".$row["add1"]."'></td></tr><tr><td><p></p> </td><td>";
		echo"<input type='text' name='add2' value='".$row["add2"]."'></td></tr><tr><td><p>Area:</p> </td><td>";
		echo"<input type='text' name='add3' value='".$row["add3"]."'></td></tr><tr><td><p>Password:</p> </td><td>";
		echo"<input type='password' name='password' value='".$row["password"]."'></td></tr></table >";

		echo"<table style='width: 1000px;margin-top: 50px'><tr><td colspan='4' align='center'> ";
		echo"<input name='update' type='submit' value='Update' class='register-button' style='width: 600px'>";
		echo"			<br> <br></td></tr></table>";

		
		echo"</form>";}
		
		else{
		
	$fname	=$_POST['fname'];
	$lname	=$_POST['lname'];
	$email		= $_POST['email'];
	$mobile	= $_POST['mobile'];
	$dob	= $_POST['dob'];
	$nationality	= $_POST['nationality'];
	$add1	= $_POST['add1'];
	$add2	= $_POST['add2'];
	$add3	= $_POST['add3'];
	$password	= $_POST['password'];
 
			# insert data into mysql database
				$sql = "UPDATE users SET fname='$fname',lname='$lname',email='$email',mobile='$mobile',
				dob='$dob',nationality='$nationality', add1='$add1',add2='$add2',add3='$add3', password='$password' WHERE id=".$row["id"]."";
 
		if ($conn->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<p>Update successfully!</p>";
			header( "Refresh:3; url=account.php", true, 303);

		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}

		
		}
		
		}
} else {
    echo "0 results";
}

	$conn->close();
?>


</table></div>

</body>

</html>

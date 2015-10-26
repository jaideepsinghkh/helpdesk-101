<?php
session_start();
if(isset($_SESSION['roles'])){
header( "Location: error.php");
exit();
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Staff Login</title>
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
	<nav class="navi-bar-2">
		<div class="navi-content">
			<ul>
				<li class="navi-item">
					<a href="home.php">Home</a>
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

					<a href='login.php'>Login</a>			

				</li>
				
				
			</ul>
		</div>
	</nav>
	
	<br>

<div class="login-content">


<?php
if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">

	<table class="login-table">
		<tr>
			<td colspan="2">
			<h1 class="login-hearder">Staff Login</h1> <br>		
			</td>
		</tr>
		
		<tr>
			<td >
			<input type="text" name="user" placeholder= "Enter your Username" autofocus="autofocus">
			</td>
		</tr>
		<tr>

			<td>
			<input type="password" name="password" placeholder = "Password">
			</td>
		</tr>
		
		<tr>
			<td> 
			<input name="submit" type="submit" value="Login" class="submit-button" style="text-indent: 0em">
			</td>
		</tr>
		
		<tr class="signup-text">
			<td>
			<p align="center">-----------------------OR-----------------------</p>
			<br>
				<h4 align="center">
					Want to be a volunteer? 
					<a href="staffsignup.php" class="signup-link">Join Us NOW!</a>
				</h4>
			</td>
		</tr>

	</table>
	</form>

<?php
} 


else {
	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
 
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	
 
	$sql = "SELECT * from staffs WHERE staff LIKE '{$user}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
		
	} else {
		echo "<h1>Logged in successfully</h1>";
		$_SESSION['user']= $user;	
		$_SESSION['roles']= "admin";	
		header( "Refresh:1; url=staffs.php", true, 303);
		}
}
?>		
	
</div>

 	
</body>

</html>

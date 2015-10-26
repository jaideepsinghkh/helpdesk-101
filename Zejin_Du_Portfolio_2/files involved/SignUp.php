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
			<title>User Registration</title>
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
				
				<br>
<div class="register-content">

<?php
require_once("db_const.php");
if (!isset($_POST['submit'])) {
?>	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
	
	
	<table>
				<tr>
					<th colspan="2">
					<h1 class="login-hearder" style="text-align: left">Register</h1> <br>		
					</th>
				</tr>
				<tr>
					<td>
					<input type="text" name="user" placeholder="Username *">
					</td>
				</tr>
				<tr>
					<td>
					<input type="password" name="password" placeholder="Password *">
					</td>
				</tr>
				<tr>
					<td>
					<input type="password" name="comfirmpassword" placeholder="Confirm your Password *">
					</td>
				</tr>
				
			</table>

			<table>
				<tr>
					<td colspan="4">
					</td>
				</tr>
				<tr>

					<td>
						<p>First name:</p>
					</td>
					<td>
					<input type="text" name="fname" placeholder="Steve">
					</td>
				</tr>
				<tr>

					<td>
						<p>Last name:</p>
					</td>
					<td>
					<input type="text" name="lname" placeholder="Jobs">
					</td>
				</tr>
				<tr>
					<td>
						<p>Gender:</p>
					</td>
					<td>
						<select name="gender" class="gender-select" hidefocus="true">
			    			<option value="Male">Male</option>
			    			<option value="Female">Female</option>
			     		</select>		
			    	</td>
				</tr>
				<tr>
				<td>
					<p>Email:</p> 
					</td>
					<td>
					<input type="email" name="email" placeholder="e.g. Myemail@email.com">
					</td>
			</tr>
			<tr>


					<td>
						<p>Mobile Phone:</p>
					</td>
					<td>
					<input type="text" name="mobile" placeholder="1231231231">
					</td>
			</tr>
				<tr>

					<td>
						<p>Date of Birth</p>
					</td>
					<td>
					<input type="date" name="dob" placeholder="DD/MM/YYYY">
					</td>
					
					
				</tr>
				<tr>
				    <td>
					<p>Nationailty:</p> 
					</td>
					<td>
					<input type="text" name="nationality" placeholder="e.g. Australia">
					</td>
					</tr>

				<tr>
					<td>
					<p>Address:</p> 
					</td>
					<td>
					<input type="text" name="add1" placeholder="e.g. Unit/Street Number, Street Name">
					</td>
					
					
				</tr>
			
				<tr>
					<td>
					<p></p> 
					</td>
					<td>
					<input type="text" name="add2" placeholder="e.g. Postcodes, Suburb ">
					</td>
					
					
				</tr>

				<tr>
					<td>
					<p>Area:</p> 
					</td>
					<td>
					 <select name="add3" class="gender-select" hidefocus="true">
    				   	 <option value="South of Brisbane">South of Brisbane</option>
  				 		 <option value="North of Brisbane">North of Brisbane</option>
   						 <option value="East of Brisbane">East of Brisbane</option>
  						 <option value="West of Brisbane">West of Brisbane</option>
 					 </select>
					</td>
					
					
				</tr>

			</table >
		
				

			<table style="width: 1000px;margin-top: 50px">
				<tr>
					<td>
						<p class="terms-conditions">By clicking <c style="color:#27ae60">Register</c>, you agree to our <a href="termsConditions.php" target="_blank">Terms and Condition</a>.</p>
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center"> 
					<input name="submit" type="submit" value="Register" class="register-button" style="width: 600px">
					<br> <br>
					</td>
				</tr>
				
				<tr>
					<td colspan="4">

					<p align="center">-----------------------OR-----------------------</p>
					<br>
						<h4 align="center">Question? 
							<a href="contactus.php" class="contactus-link">Contact Us</a>
						</h4>
					</td>
				</tr>
			</table>
		


	</form>
<?php

} else {
## connect mysql server
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
## query database
	# prepare data for insertion
	$user	= $_POST['user'];
	$password	= $_POST['password'];
	$fname	= $_POST['fname'];
	$lname	= $_POST['lname'];
	$gender	= $_POST['gender'];
	$email		= $_POST['email'];
	$mobile	= $_POST['mobile'];
	$dob	= $_POST['dob'];
	$nationality	= $_POST['nationality'];
	$add1	= $_POST['add1'];
	$add2	= $_POST['add2'];
	$add3	= $_POST['add3'];

 
	# check if username and email exist else insert
	$exists = 0;
	$result = $mysqli->query("SELECT user from users WHERE user = '{$user}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists = 1;
		$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 2;	
	} else {
		$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 3;
	}
 
	if ($exists == 1) echo "<p>Username already exists!</p>";
	else if ($exists == 2) echo "<p>Username and Email already exists!</p>";
	else if ($exists == 3) echo "<p>Email already exists!</p>";
	else {
		# insert data into mysql database
		$sql = "INSERT  INTO `users` (`id`, `user`, `password`, `fname`, `lname`, `gender`, `email`, `mobile`, `dob`, `nationality`, `add1`, `add2`, `add3`) 
				VALUES (NULL, '{$user}', '{$password}', '{$fname}', '{$lname}', '{$gender}', '{$email}', '{$mobile}', '{$dob}', '{$nationality}', '{$add1}', '{$add2}', '{$add3}')";
 
		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<p>Registred successfully!</p>";
			$_SESSION['user']= $user;	
			header( "Refresh:3; url=users.php", true, 303);

		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	}
}
?>	
		</div>
			</body>

			</html>

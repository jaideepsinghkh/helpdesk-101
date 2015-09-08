<?php
session_start();
?>
<!DOCTYPE html>
			<html>

			<head>
			<title>Registration</title>
				<link rel="stylesheet" href="style/style.css" type="text/css">
			</head>

			<body>
			<div class="head-content">
				<div class="Logo-content">
					<ul class="head-text">
						<li class="r-border">
							the Brisbane Help Desk &nbsp;
							<br>Brisbane, Queensland &nbsp;

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
					<input type="text" name="add1">
					</td>
					
					
				</tr>
			
				<tr>
					<td>
					<p></p> 
					</td>
					<td>
					<input type="text" name="add2">
					</td>
					
					
				</tr>

				<tr>
					<td>
					<p></p> 
					</td>
					<td>
					<input type="text" name="add3">
					</td>
					
					
				</tr>

			</table >
		
				

			<table style="width: 1000px;margin-top: 50px">
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
			header( "Refresh:3; url=logged.php", true, 303);

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

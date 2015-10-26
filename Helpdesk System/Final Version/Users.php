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
<title>Dashboard</title>
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
	<p style="text-align:center;font-size:40px">
	<?php
		echo "Welcome to Help Desk ".$_SESSION['user'].", what can we help you today?<br/>";
	?>
	<br>
	</p>
	<h1 style="text-align:center; float:left; margin-left:400px"><a href='usersreq.php'>
	<img src="image/require.png" alt="Image not found" style="width:304px;height:260px; "> <br>
	Service Requests</a></h1>
	<h1><a href='usersreqstatus.php'>
	<img src="image/status.png" alt="Image not found" style="width:304px;height:260px; "> <br>
	Request Status</a></h1>
	
</body>

</html>

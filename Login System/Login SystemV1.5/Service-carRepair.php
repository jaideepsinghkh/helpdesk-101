<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Services</title>
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
	
	<div class="carrepair-content">
		<div style="height:300px;">
			<h2 style="font-size: 25px;color:#2c3e50;">Car Repair</h2>
			<br>
			<br>

			<h2 style="color:#2c3e50;">Car repair service is to use transmission flushing machine, cooling system flushing machine, power steering flushing machine, air conditioning sanitising machine, and throttle body & fuel system cleaning machines to do an impressive job of maintaining your vehicle, also to make sure your braking system is in great shape.</h2>
		</div>
		
		<div class="service-img">
			<div><img src="image/services/carRepair/123123.jpg"></div>	
			<div><img src="image/services/carRepair/carrepair.gif"></div>
			<div><img src="image/services/carRepair/company-client.jpg"></div>
		</div>
			
	</div>
		
	
	<!-- include the footer -->
	<?php include 'footerBar.php' ?>
</body>

</html>

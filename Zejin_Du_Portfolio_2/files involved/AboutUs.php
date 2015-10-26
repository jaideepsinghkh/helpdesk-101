<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>About Us</title>
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
					<?php
					if(isset($_SESSION['roles'])){
					if($_SESSION["roles"]=='user'){
						echo "<a href='Users.php'>Dashboard</a>";
					}		
					else if($_SESSION["roles"]=='admin'){
						echo "<a href='Staffs.php'>Dashboard</a>";
					}	}
					else{		
						echo "<a href='Home.php'>Home</a>";				
					}

					?>

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
<!-- 					<div>
						<ul>
							<li class="sub-navi-menu2"><a href="#">Administrator contact</a></li>
							<li class="sub-navi-menu2"><a href="#">Brisbane Help desk center</a></li>
							<li class="sub-navi-menu2"><a href="#">Volunteer contact</a></li>
						</ul>
					</div> -->
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
						echo "<a href='login.php'>Login</a>"	;				
					}

					?>


				</li>
				
				
			</ul>
		</div>
	</nav>
	<div style="height: 1300px;">
		<div class="aboutus-bg">
			<div class="aboutus-content">
				<div>
					<h1 style="text-align: left">Us</h1>
				</div>

				<div class="aboutus-title">

					
					<br>Hello!
					<br>您好！
					<br>Ciao!
					<br>!مرحبا
					<br>Bonjour!
					<br>안녕하세요！
					<br>こんにちは！
					<br>Здравствуйте!

				</div>

				<div class="us-content">
						<p class="us-desc">Brisbane Help Desk is a company to help international students who are not familiar with English to solve some problems, such as plumbing, electric, car repair, air condition and building work. We are located in the B block of Queensland University of Technology. Our company had been established for about 10 years and we helped lots of different international students from different countries. The volunteer in our company always do a high-quality work and help you to search the appropriate service providers as soon as possible.</p>

				</div>


			</div>
		</div>
	</div>

	<!-- include the footer -->
	<?php include 'footerBar.php' ?>

</body>

</html>

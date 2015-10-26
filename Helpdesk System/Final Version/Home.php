<?php
session_start();

if(isset($_SESSION['roles'])){
header( "Location: error.php");
exit();}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
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


	<div class="home-container">
		<img src="image/brisbane.png" style="margin:0 auto; height:200px; margin-top:-20px;">
		<br>
		<img src="image/welcome.png" style="margin:0 auto; height:50px;margin-top:-30px;margin-button:50px">
		<div class="youtube-video">
				<iframe id="iframe1" src="https://www.youtube.com/embed/Axw6m91ROfM?autoplay=0;controls=0;loop:1;showinfo=0;autohide=1;" frameborder="0" Volume="0"></iframe>
		</div>
	</div>
	
	
	<!-- include the footer -->
	<?php include 'footerBar.php' ?>
	
</body>

</html>

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
					the short discription of company abcabcb sbsad khqw hueo asoihdq owhdao shdlw ahd jkab sjdq wui dhaos
				</div>

				<div class="us-content">


				</div>


			</div>
		</div>
	</div>

	<!-- include the footer -->
	<?php include 'footerBar.php' ?>

</body>

</html>

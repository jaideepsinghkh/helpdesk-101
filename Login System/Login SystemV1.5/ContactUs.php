<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Contact Us</title>
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
	
	<div class="contact-content">

		<div style="height: 100px">
			<p class="welcometitle">Address</p>
		</div>

		<div style="height:600px">
			<div style="float:left;width: 660px">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d884.9443264499757!2d153.02844175!3d-27.47619155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a106e952fed%3A0xabb23d2a249a3fb8!2sB+Block%2C+Brisbane+QLD+4000!5e0!3m2!1sen!2sau!4v1441696772971" width="660" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div style="float: left;width: 200px;margin-left: 90px; margin-top: 50px;">
				<div >
					<h3 style="margin-left: -5px;">Visit us at<h3>
				</div>
				<div class="contact-para">
					B Block,<br> Brisbane QLD 4000
				</div>
				<br>
				<hr>
				<br>
				<br>
				<div class="contact-para">
					General Enquiry:
				</div>
				<div class="contact-subpara">
					+61231231231
				</div>
				<br>
				<div class="contact-para">
					Technical Support:
				</div>
				<div class="contact-subpara">
					+63213213213
				</div>
				<br>
				<hr>
				<br>
				<br>

				<div class="contact-para">
					Complaints hotline:
				</div>
				<div class="contact-subpara">
					+61321321321
				</div>
				<br>
				<hr>
			</div>
		</div>
	</div>
	
	<!-- include the footer -->
	<?php include 'footerBar.php' ?>
	
</body>

</html>

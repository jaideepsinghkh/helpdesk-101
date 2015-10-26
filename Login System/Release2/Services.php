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
	<div class="services-container">
		
		<div class="service-class">
			
			<div>
				<p class="welcometitle">Choose your serivce type:</p>
			</div >

			<div class="service-pics">
				<div><a href="service-plumber.php"><img src="image/plumbers.png" width="230px" border="none"></a>
				</div>

				<div><a href="Service-electrician.php"><img src="image/electrician.png" width="230px" border="none"></a>
				</div>

				<div><a href="Service-aircondition.php"><img src="image/aircondition.png" width="230px" border="none"></a>
				</div>

				<div><a href="Service-buildingwork.php"><img src="image/buildingwork.png" width="230px" border="none"></a>
				</div>
			
				<div><a href="Service-carrepair.php"><img src="image/carrepair.png" width="230px" border="none"></a>
				</div>
			</div>
		</div>
	</div>

	
	<!-- include the footer -->
	<?php include 'footerBar.php' ?>
</body>

</html>

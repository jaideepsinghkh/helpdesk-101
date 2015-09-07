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
			<li class="r-border">
				the Brisbane Help Desk
				<br>Brisbane, Queensland

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
	
	<h1>About Us</h1>
	
</body>

</html>

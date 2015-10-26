<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>Logged in successfully</title>
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
					<a href="staffhome.php">Home</a>

				</li>

				<li class="navi-item">
					<a href="#">Jobs Assigned</a>
				</li>

				<li class="navi-item">
					<a href="#">Customers Details</a>
				</li>
				
				<li class="navi-item">				

					<a href="#">Services Provider</a>
					
				</li>
				
				<li class="navi-item">

					<?php

					if(isset($_SESSION['user'])){
						echo "<a href='staffaccount.php'> Account Details</a>";
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
		echo "Welcome to Help Desk ".$_SESSION['user'].",Have a good day at work :)<br/>";
		echo "<a href='logout.php'> Logout</a>";

	?>
	</p>
</body>

</html>

<?php
session_start();

if($_SESSION['roles']=="admin"){
}

else{
header( "Location: error.php");
exit();
}

?>
<!DOCTYPE html>
<html>

<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
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
	<nav class="navi-bar-2">
		<div class="navi-content">
			<ul>
				<li class="navi-item">
					<a href="staffs.php">Dashboard</a>

				</li>

				<li class="navi-item">
					<a href="jobassign.php">Jobs Assigned</a>
				</li>

				<li class="navi-item">
					<a href="customerdetails.php">Customers Details</a>
				</li>
				
				<li class="navi-item">				

					<a href="servicesprovider.php">Services Provider</a>
					
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

	<div style="width:1300px;margin:0 auto;">
	<p style="text-align:center;font-size:40px">
	<?php
		echo "Welcome back ".$_SESSION['user'].", have good working day<br/>";
	?>
	<br>
	</p>
	<h1 style="text-align:center; float:left; margin-left:200px"><a href='statusupdate.php'>
	<img src="image/require.png" alt="Image not found" style="width:304px;height:260px; "> <br>
	Status Update</a></h1>
	<h1><a href='requestlist.php'>
	<img src="image/status.png" alt="Image not found" style="width:304px;height:260px; "> <br>
	Request List</a></h1>
	</div>
</body>

</html>

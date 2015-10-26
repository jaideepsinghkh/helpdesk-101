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

<div class="login-content">


<?php
if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">

	<table class="login-table">
		<tr>
			<td colspan="2">
			<h1 class="login-hearder">Status Update</h1> <br>		
			</td>
		</tr>
		
		<tr>
			<td >
			<input type="text" name="request_id" placeholder= "Request ID" autofocus="autofocus">
			</td>
		</tr>
		<tr>

			<td>
					 <select name="status" class="gender-select" hidefocus="true">
    				   	 <option value="Completed">Completed</option>
    				   	 <option value="Delay">Delay</option>
  				 		 <option value="New">New</option>
   						 <option value="Cancelled">Cancelled</option>
  						 <option value="Pending">Pending</option>
  						 <option value="In progress">In progress</option>
 					 </select>


			</td>
		</tr>
		
		<tr>
			<td> 
			<input name="submit" type="submit" value="Update" class="submit-button" style="text-indent: 0em">
			</td>
		</tr>
		

	</table>
	</form>

<?php
} 


else {
	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
 
	$request_id = $_POST['request_id'];
	$status = $_POST['status'];
	
	$sql = "UPDATE request SET status='{$status}' WHERE request_id='{$request_id}'";
	$result = $mysqli->query($sql);
	
	if (mysqli_query($mysqli, $sql)) {
    echo "Record updated successfully";
    header( "Refresh:1; url=staffs.php", true, 303);
} else {
    echo "Error updating record: " . mysqli_error($mysqli);
}

}
?>	
</div>



</body>

</html>

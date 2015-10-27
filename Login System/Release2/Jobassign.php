<?php
session_start();

if($_SESSION['roles']=="admin"){
}

else{
header( "Location: error.php");
exit();
}

?>
<?php
if ($_POST) {
	 
	// user clicked on button with the action iwantjob1
	$servername = "localhost";
    $username = "root";
	$password = "";
	$dbname = "php_mysql_login_system";
	
	// Create connection
	$conn1 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn1->connect_error) {
		die("Connection failed: " . $conn1->connect_error);
	}
		$action=$_POST['action']; 
		$sql1 ="Update Request SET staff_id=(SELECT staff_id FROM staffs WHERE staff='".$_SESSION['user']."'), Status='In Progress' WHERE request_id=$action";
		$result = $conn1->query($sql1);
	echo "</table>";



$conn1->close();
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
<title>Jobs Assign</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
</head>

<body>

<form>

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
					<a href="staffs.php">Dashboard</a>

				</li>

				<li class="navi-item">
					<a href="#">Jobs Assigned</a>
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
	<div class="register-content">
	<h1>Job Assign</h1>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_mysql_login_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$sql = "select request_id,users.user,category_of_request,details_request,contact_time,request_date,status,add3 from request inner join users on users.id=request.user where staff_id=(SELECT staff_id FROM staffs WHERE staff='".$_SESSION['user']."') OR status='New'
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table  style='width:1200px'><tr><th>Request ID</th><th>Name</th><th>Category</th><th>Details</th><th  style='width:100px'>Contact time</th><th  style='width:100px'>Request date</th><th style='width:100px'>Location</th><th  style='width:100px'>Status</th><th  style='width:80px'>Assign Jobs</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 $id = $row['request_id'];
         echo "<tr><th style='width:10px'>". $row["request_id"]."</th><th>". $row["user"]."</th><th>". $row["category_of_request"]."</th><th>". $row["details_request"] . "</th><th>" .$row["contact_time"]. "</th><th>".$row["request_date"]."</th><th>".$row["add3"]."</th><th>". $row["status"]."</th><th><form name='sqlform' method=post>
<input type=hidden name='action' value=$id><button type='submit' value='assign job'  style='height:50px; width:100px'>Assign Job</button></form></th></tr>" ;

 }
      

	
	 echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>
</div>
</form>


</body>

</html>

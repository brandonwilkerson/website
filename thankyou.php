<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	<ul>
	<li><a href="homepage.php">Home</a></li>
    <li><a href="newjobs.php">New Jobs</a></li>
	<li><a href="Contracts.php">Contracts</a></li>
	<li><a href="customersearch.php">Customer Search</a></li>
	<li><a href="bidcalculator.php">Bid Calculator</a></li>
    <li><a href="partsedit.php">Parts Edit</a></li>
	</ul>
	
</head>

<center>
	<body>
	<div class="background">
		<div class="transbox">
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1>Medley Roofing Inc.</h1>
	<div id="status"></div>
	
    
    <!--
	<div id="button">
	<center><a href="newjobs.php"><button id="showData">New Jobs</button></a></center>
    <center><button id="showData">Customer Name Search</button></center>
    <center><button id="showData">Customer Address Search</button></center>
    <center><button id="showData">Job ID Search</button></center>
	</div>	
    -->
    
    <?php

require 'connection.php';
$conn    = Connect();
$firstname = $conn->real_escape_string($_POST['F_Name']);
$lastname = $conn->real_escape_string($_POST['L_Name']);
$pphone = $conn->real_escape_string($_POST['P_Phone']);
$sfname = $conn->real_escape_string($_POST['SF_Name']);
$slname = $conn->real_escape_string($_POST['SL_Name']);
$sphone = $conn->real_escape_string($_POST['S_Phone']);
$pemail = $conn->real_escape_string($_POST['P_Email']);
$semail = $conn->real_escape_string($_POST['S_Email']);
$streetad = $conn->real_escape_string($_POST['Street_Ad']);
$city = $conn->real_escape_string($_POST['City']);
$state = $conn->real_escape_string($_POST['State']);
$zip = $conn->real_escape_string($_POST['Zip']);
$query   = 
	"INSERT into address(Street_Ad, City, State, Zip)
    VALUES ('" . $streetad ."', '" . $city . "', '" . $state . "', '" . $zip . "')";

$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);


}
    
$query = 

	"INSERT into cust_info(F_Name,L_Name,P_Email,P_Phone,SF_Name,SL_Name,Street_Ad,S_Email,S_Phone)
    VALUES ('" . $firstname . "','" . $lastname . "','" . $pemail . "','" . $pphone . "','" . $sfname . "','" . $slname . "','" . $streetad . "','" . $semail . "','" . $sphone . "')";
 

$success = $conn->query($query);
    

if (!$success) {
    die("Couldn't enter data: ".$conn->error);


}

echo "<font color= white>Thank You For Submitting Customer Information</font><br>";

$conn->close();

?>

    
    
 </body>
 </center>
 
	</div>
	</div>
</html>







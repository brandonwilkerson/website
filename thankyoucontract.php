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
$contractprice = $conn->real_escape_string($_POST['Contract_Price']);
$contractopt1 = $conn->real_escape_string($_POST['Contract_opt1']);
$contractopt2 = $conn->real_escape_string($_POST['Contract_opt2']);
$contractopt = $conn->real_escape_string($_POST['Contract_opt']);
$contractextra = $conn->real_escape_string($_POST['Contract_Extra']);
$bidstatus = $conn->real_escape_string($_POST['Bid_Job_Status']);
$query   = 
	"INSERT into contract_info(Contract_Price, Contract_opt1, Contract_opt2, Contract_opt, Contract_Extra, Bid_Job_Status)
    VALUES ('" . $contractprice ."', '" . $contractopt1 . "', '" . $contractopt2 . "', '" . $contractopt . "', '" . $contractextra . "', '" . $bidstatus . "')";

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







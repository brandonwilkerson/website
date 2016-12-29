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
$jobstreet    = $_POST['Job_Street'];
$insopt   = $conn->real_escape_string($_POST['INs_opt']);
$callbefore   = $_POST['Call_Before'];
$preftime = $conn->real_escape_string($_POST['Pref_Time']);
$comments = $conn->real_escape_string($_POST['Comments']);
$emergencyrepair = $conn->real_escape_string($_POST['Em_Rep']);
$insclaim = $conn->real_escape_string($_POST['Ins_Claim']);
$tearrep = $conn->real_escape_string($_POST['Tear_Rep']);
$inspstormdam = $conn->real_escape_string($_POST['Insp_StorDam']);
$biddate = $conn->real_escape_string($_POST['Bid_Date']);
$startdate = $conn->real_escape_string($_POST['Start_Date']);
$compdate = $conn->real_escape_string($_POST['Comp_Date']);
$guttersid = $conn->real_escape_string($_POST['Gutters_ID']);
$stories = $conn->real_escape_string($_POST['Stories']);
$steep = $conn->real_escape_string($_POST['Steep']);
$styacc = $conn->real_escape_string($_POST['Sty_Acc']);
$acchow = $conn->real_escape_string($_POST['Acc_How']);
$partsid = $conn->real_escape_string($_POST['Parts_ID']);
$query   = "INSERT into job_info (Job_Street,INs_opt,Call_Before,Pref_Time,Comments,Em_Rep,Ins_Claim,Tear_Rep,Insp_StorDam,Bid_Date,Start_Date,Comp_Date,Gutters_ID,Stories,Steep,Sty_Acc,Acc_How,Parts_ID) VALUES('" . $jobstreet . "','" . $insopt . "','" . $callbefore . "','" . $preftime . "','" . $comments . "','" . $emergencyrepair . "','" . $insclaim . "','" . $tearrep . "','" . $inspstormdam . "','" . $biddate . "','" . $startdate . "','" . $compdate . "','" . $guttersid . "','" . $stories . "','" . $steep . "','" . $styacc . "','" . $acchow . "','" . $partsid . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "<font color= white>Thank You For Submitting Job Information</font><br>";

$conn->close();

?>

    
    
 </body>
 </center>
 
	</div>
	</div>
</html>

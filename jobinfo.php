<!DOCTYPE html>
<html>
<head>
	<title>Job Information</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

<body>
<div class="background">
		<div class="transbox">
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1>Job Information</h1>
	<div id="status"></div>
	
	<!--
	<div id="button">
	<center><a href="newjobs.php"><button id="showData">New Jobs</button></a></center>
    <center><button id="showData">Customer Name Search</button></center>
    <center><button id="showData">Customer Address Search</button></center>
    <center><button id="showData">Job ID Search</button></center>
	</div>	
    -->
<table style="width:100%">
<form action="thanksjobinfo.php" method="post">
  <tr>	
  </tr>
  <tr>
    <td><input type="text" name="Job_Street" placeholder="Job Street" required></td>
    <td><input type="email" name="INs_opt" placeholder="Insurance Hail, Wind, or Both" required></td>
    <td><input type="text" name="Call_Before" placeholder="Call Before Visit" required></td>
    
  </tr>
  <tr>
  	<td><input type="text" name="Pref_Time" placeholder="Preferred Time" required></td>
    <td><input type="text" name="Comments" placeholder="Comments"required></td>
    <td><input type="text" name="Em_Rep" placeholder="Emergency Repair?"required></td>
  </tr>
  <tr>
  <td><input type="text" name="Ins_Claim" placeholder="Insurance Claim?"required></td>
    <td><input type="text" name="Tear_Rep" placeholder = "Tearoff or Repair" required></td>
    <td><input type="text" name="Insp_StorDam" placeholder = "Inspection for Storm Damage" required></td>
    
  </tr>
   <tr>
   <td><input type="text" name="Bid_Date" placeholder = "Call-In Date" required></td>
   <td><input type="text" name="Start_Date" placeholder = "Start Date" required></td>
   <td><input type="text" name="Comp_Date" placeholder = "Completed Date" required></td>
   
   </tr>
   <tr>
   <td><input type="text" name="Gutters_ID" placeholder = "Gutter Work?" required></td>
   <td><input type="text" name="Stories" placeholder = "Stories" required></td>
   <td><input type="text" name="Steep" placeholder = "Steep" required></td>
   </tr>
   </tr>
   <td><input type="text" name="Sty_Acc" placeholder = "Story Accessible?" required></td>
   <td><input type="text" name="Acc_How" placeholder = "Story Accessible How?" required></td>
   <td><input type="text" name="Parts_ID" placeholder = "Parts ID"required></td>
   
   </tr>
      </table>
      <center><input type="submit" value="Submit"></center>
         
        
    
    
    
    
    
    
    
    
    
    
    
    <!--<div id="forms">   
 <center>
 <form action="thanksjobinfo.php" method="post">
 <p>
<br>
 <input type="text" name="Job_Street" placeholder="Job Street" required>
 <br>
<br>
 <input type="email" name="INs_opt" placeholder="Insurance Hail, Wind, or Both" required>
 <br>
<br>
 <input type="text" name="Call_Before" placeholder="Call Before Visit" required>
 <br>
<br>
<input type="text" name="Pref_Time" placeholder="Preferred Time" required>
<br>
<br>
<input type="text" name="Comments" placeholder="Comments"required>
<br>
<br>
<input type="text" name="Em_Rep" placeholder="Emergency Repair?"required>
<br>
<br>
<input type="text" name="Ins_Claim" placeholder="Insurance Claim?"required>
<br>
<br>
<input type="text" name="Tear_Rep" placeholder = "Tearoff or Repair" required>
<br>
<br>
<input type="text" name="Insp_StorDam" placeholder = "Inspection for Storm Damage" required>
<br>
<br>
<input type="text" name="Bid_Date" placeholder = "Call-In Date" required>
<br>
<br>
<input type="text" name="Start_Date" placeholder = "Start Date" required>
<br>
<br>
<input type="text" name="Comp_Date" placeholder = "Completed Date" required>
<br>
<br>
<input type="text" name="Gutters_ID" placeholder = "Gutter Work?" required>
<br>
<br>
<input type="text" name="Stories" placeholder = "Stories" required>
<br>
<br>
<input type="text" name="Steep" placeholder = "Steep" required>
<br>
<br>
<input type="text" name="Sty_Acc" placeholder = "Story Accessible?" required>
<br>
<br>
<input type="text" name="Acc_How" placeholder = "Story Accessible How?" required>
<br>
<br>
<input type="text" name="Parts_ID" placeholder = "Parts ID"required>
<br>
<input type="submit" value="Submit">
<br>
</form>
</p></center>    
 </div>
	
</body>
</div>
</div>-->
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	color: white;
	text-align: center;
}
th, td {
    padding: 10px;
    text-align: center;   
}
</style>

</html>
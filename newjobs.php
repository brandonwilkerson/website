<!DOCTYPE html>
<html>
<head>
	<title>New Jobs</title>
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

<body>
	<div class="background">
		<div class="transbox">
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1>Medley Roofing Inc.</h1>
    <h1>New Jobs</h1>
	<div id="status"></div>
	
	<!--
	<div id="button">
	<center><a href="newjobs.php"><button id="showData">New Jobs</button></a></center>
    <center><button id="showData">Customer Name Search</button></center>
    <center><button id="showData">Customer Address Search</button></center>
    <center><button id="showData">Job ID Search</button></center>
	</div>	
    -->
    
    <div id="forms">   
 <center>
 <form action="thankyou.php" method="post">
 <p>
<center><font color= white>Name:</font></center><br>
 <input type="text" name="u_name" required>
 <br>
 <center><font color= white>Email:</font></center><br>
 <input type="email" name="u_email" required>
 <br>
 <center><font color= white>Subject:</font></center><br>
 <input type="text" name="subj" required>
 <br>
<center><font color= white>Message:</font></center><br>
<input type="text" name="message" required>
<br>
<input type="submit" value="Submit">
<br>
</form>
</p></center>    
 </div>
	
</body>
	</div>
	</div>
</html>
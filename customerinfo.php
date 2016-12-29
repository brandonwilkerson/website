<!DOCTYPE html>
<html>
<head>
	<title>Client Details</title>
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
	<h1>Client Details</h1>
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

$sql = "SELECT * FROM cust_info";
$result = $conn->query($sql);

echo "<select id='firstName' name='firstname' onchange=populatesecondbox()>";
while ($row = mysqli_fetch_array($result)) {
echo "<option value='" . $row['F_Name'] . "', '" . $row['L_Name'] . "'> " . $row['F_Name'] . " " . $row['L_Name'] . "</option>";

$pphone = $row['P_Phone'];

}
echo "</select>";
?>

<input id="secondinputbox" type="text" />
 
   <div id="forms">   
 <center>
  <form action="thankyou.php" method="post">
<table style="width:100%">
  <tr>	
  </tr>
  <tr>
    <td><input type="text" name="F_Name" placeholder = "First Name" required></td>
    <td><input type="email" name="L_Name" placeholder = "Last Name" required></td>
    <td><input type="text" name="P_Phone" placeholder = "Primary Phone" required></td>
    
  </tr>
  <tr>
  	<td><input type="text" name="SF_Name" placeholder = "Secondary First Name" required></td>
    <td><input type="text" name="SL_Name" placeholder = "Secondary Last Name" required></td>
    <td><input type="text" name="S_Phone" placeholder = "Secondary Phone" required></td>
  </tr>
  <tr>
  <td><input type="text" name="P_Email" placeholder = "Primary Email" required></td>
    <td><input type="text" name="S_Email" placeholder = "Secondary Email" required></td>
    <td><input type="text" name="Street_Ad" placeholder = "Street Address" required></td>
  </tr>
   <tr>
   <td><input type="text" name="City" placeholder = "City" required></td>
   <td><input type="text" name="State" placeholder = "State" required></td>
    <td><input type="text" name="Zip" placeholder = "Zip" required></td>
   
   </tr>
   </table>
   <center><input type="submit" value="Submit"></center>  
   </form> 
     </div>
    </form>
</p></center>  


<div class="box">
	<a class="button" href="#popup1">Help!</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Here i am</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			<p>Thank to pop me out of that button, but now i'm done so you can close this window.<p>
		</div>
	</div>
</div>  

    
    
    <!--
    <div id="forms">   
 <center>
 <form action="thankyou.php" method="post">
 <p>
<br>
 <input type="text" name="F_Name" placeholder = "First Name" required>
 <br>
<br>
 <input type="email" name="L_Name" placeholder = "Last Name" required>
 <br>
 <br>
 <input type="text" name="P_Phone" placeholder = "Primary Phone" required>
 <br>
<br>
<input type="text" name="SF_Name" placeholder = "Secondary First Name" required>
<br>
<br>
<input type="text" name="SL_Name" placeholder = "Secondary Last Name" required>
<br>
<br>
<input type="text" name="S_Phone" placeholder = "Secondary Phone" required>
<br>
<br>
<input type="text" name="P_Email" placeholder = "Primary Email" required>
<br>
<br>
<input type="text" name="S_Email" placeholder = "Secondary Email" required>
<br>
<br>
<input type="text" name="Street_Ad" placeholder = "Street Address" required>
<br>
<br>
<input type="text" name="City" placeholder = "City" required>
<br>
<br>
<input type="text" name="State" placeholder = "State" required>
<br>
<br>
<input type="text" name="Zip" placeholder = "Zip" required>
<br>

<input type="submit" value="Submit">
<br>
</form>
</p></center>    
 </div>-->
    
    
    
	
</body>
	</div>
	</div>
    
 <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	color: black;
	text-align: center;
}
th, td {
    padding: 5px;
    text-align: center;   
}
</style>

    
    
</html>


<script type="text/javascript">
function populatesecondbox(val) {
    var dropdown = document.getElementById("firstName");
    var pphone = document.getElementById("secondinputbox");
    var secondfname = document.getElementById("thirdinputbox");
    var str = "<?php echo $pphone ?>";
    var sfname = "<?php echo $sfname ?>";
    pphone.value = str;
    secondfname.value = sfname;
}
</script>


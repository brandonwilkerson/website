<?php

require("db.php");

$fid =$_REQUEST['Part_Num'];



$result = mysql_query("SELECT * FROM parts WHERE Part_Num  = '$fid'");

						

$test = mysql_fetch_array($result);

if (!$result) 

		{

		die("Error: Data not found..");

		}

				$partnum=$test['Part_Num'];

				$partdesc = $test['Part_Desc'];					

				$partprice =$test['Part_Price'];
				
				$partcost =$test['Part_Cost'];
				
				
				
				




if(isset($_POST['save']))

{	

	
	$partnum_save = $_POST['partnum'];
	
	$partdesc_save = $_POST['partdesc'];

	$partprice_save = $_POST['partprice'];
	
	$partcost_save = $_POST['partcost'];
	
	
	
	mysql_query("UPDATE parts SET Part_Desc='$partdesc_save', Part_Price = '$partprice_save', Part_Cost = '$partcost_save' where Part_Num = '$fid'")

	
    or die(mysql_error()); 


	
	echo "Saved!";

	

	header("Location: partsedit.php");			

}

mysql_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Parts List</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<ul>
	<li><a href="custinfo.php">Customer Information</a></li>
    <li><a href="customersearch.php">Customer Search</a></li>
    <li><a href="partsedit.php">Parts Edit</a></li>
    <li><a href="contractorparts.php">Contractor Parts Edit</a></li>
	</ul>
	
</head>

<body>
<div class="background">
		<div class="transbox">
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1>Parts List</h1>
	<div id="status"></div>
	
	<!--
	<div id="button">
	<center><a href="newjobs.php"><button id="showData">New Jobs</button></a></center>
    <center><button id="showData">Customer Name Search</button></center>
    <center><button id="showData">Customer Address Search</button></center>
    <center><button id="showData">Job ID Search</button></center>
	</div>	
    -->
<body>


<form method="post">

<center><table>

	<tr>

		<td>Part Number:</td>

		<td><input type="text" name="partnum" value="<?php echo $partnum ?>"readonly  class="form-control"/></td>

	</tr>

	<tr>

		<td>Part Description:</td>

		<td><input type="text" name="partdesc" value="<?php echo $partdesc ?>" class="form-control"/></td>

	</tr>

	<tr>

		<td>Part Price:</td>

		<td><input type="text" name="partprice" value="<?php echo $partprice ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Part Cost:</td>

		<td><input type="text" name="partcost" value="<?php echo $partcost ?>" class="form-control"/></td>

	</tr>
    
	<tr>

		<td>&nbsp;</td>

		<td><input type="submit" name="save" value="save" class="btn btn-success btn-lg"/></td>

	</tr>

</table></center>



</body>

</html>
<?php

require("db.php");

$id =$_REQUEST['Cust_ID'];



$result = mysql_query("SELECT * FROM cust_info WHERE Cust_ID  = '$id'");

						

$test = mysql_fetch_array($result);

if (!$result) 

		{

		die("Error: Data not found..");

		}

				$fname=$test['F_Name'];

				$lname = $test['L_Name'];					

				$pphone =$test['P_Phone'];
				
				$pemail =$test['P_Email'];
				
				$sfname =$test['SF_Name'];
				
				$slname =$test['SL_Name'];
				
				$sphone =$test['S_Phone'];
				
				$semail =$test['S_Email'];
				
				$streetad =$test['Street_Ad'];




if(isset($_POST['save']))

{	

	$fname_save = $_POST['fname'];

	$lname_save = $_POST['lname'];

	$pphone_save = $_POST['pphone'];
	
	$pemail_save = $_POST['pemail'];
	
	$sfname_save = $_POST['sfname'];
	
	$slname_save = $_POST['slname'];
	
	$sphone_save = $_POST['sphone'];
	
	$semail_save = $_POST['semail'];
	
	$streetad_save = $_POST['streetad'];

	



	mysql_query("UPDATE cust_info SET F_Name ='$fname_save', L_Name ='$lname_save', P_Phone ='$pphone_save', P_Phone ='$pphone_save', P_Email ='$pemail_save', SF_Name ='$sfname_save', SL_Name ='$slname_save', S_Phone ='$sphone_save', S_Email ='$semail_save', Street_Ad ='$streetad_save'  WHERE Cust_ID = '$id'")

				or die(mysql_error()); 

	echo "Saved!";

	

	header("Location: custinfo.php");			

}

mysql_close($conn);

?>

<!DOCTYPE html>

<html>

<head>

<title>Medley</title>

</head>



<body>

<form method="post">

<table>

	<tr>

		<td>First Name:</td>

		<td><input type="text" name="fname" value="<?php echo $fname ?>"/></td>

	</tr>

	<tr>

		<td>Last Name:</td>

		<td><input type="text" name="lname" value="<?php echo $lname ?>"/></td>

	</tr>

	<tr>

		<td>Primary Phone:</td>

		<td><input type="text" name="pphone" value="<?php echo $pphone ?>"/></td>

	</tr>
    <tr>

		<td>Primary Email:</td>

		<td><input type="text" name="pemail" value="<?php echo $pemail ?>"/></td>

	</tr>
    <tr>

		<td>Secondary First Name:</td>

		<td><input type="text" name="sfname" value="<?php echo $sfname ?>"/></td>

	</tr>
    <tr>

		<td>Secondary Last Name:</td>

		<td><input type="text" name="slname" value="<?php echo $slname ?>"/></td>

	</tr>
    <tr>

		<td>Secondary Phone Number:</td>

		<td><input type="text" name="sphone" value="<?php echo $sphone ?>"/></td>

	</tr>
    <tr>

		<td>Secondary Email:</td>

		<td><input type="text" name="semail" value="<?php echo $semail ?>"/></td>

	</tr>
    <tr>

		<td>Street Address:</td>

		<td><input type="text" name="streetad" value="<?php echo $streetad ?>"/></td>

	</tr>

	<tr>

		<td>&nbsp;</td>

		<td><input type="submit" name="save" value="save" /></td>

	</tr>

</table>

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



</body>

</html>
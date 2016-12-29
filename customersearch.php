<!DOCTYPE html>
<html>
<head>
	<title>Customer Search</title>
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
	<h1>Customer Search</h1>
	<div id="status"></div>
	
 
 <center><input type="text" id="search" placeholder="Type to search" size="50"><center>
<center><table  id="table" border="1">
			<?php
			include("db.php");
			$result=mysql_query("SELECT * from job, cust_info, job_info WHERE cust_info.Cust_ID = job.Cust_ID And job.Job_ID = job_info.Job_ID ORDER by F_Name");
			
			while($test = mysql_fetch_array($result))
				{
			$id = $test['Cust_ID'];
			$fid = $test['Cust_Job_ID'];	
				echo "<tr align='center'>";
				
				//echo"<td> <a href ='view.php?Cust_ID=$id'>Edit</a>";
				
				
				
				echo"<td> <a href ='view.php?Cust_Job_ID=$fid'>Edit</a>";
				echo"<td> <a href ='viewcontractinfo.php?Cust_Job_ID=$fid'>View Contract Info</a>";
				
				echo"<td> <a href ='bidcalculator.php?Cust_Job_ID=$fid'>Add Parts to Customer</a>";
				
				echo"<td> <a href='contractor.php?Cust_Job_ID=$fid'>Contractor Jobs</a>";
				
				echo"<td> <a href='newexistcustjob.php?Cust_ID=$id'>New Job</a>";
				
				echo"<td> <a href='printcontract.php?Cust_Job_ID=$fid'>Print Contract</a>";	

				echo"<td><font color='white'>" .$test['F_Name']." " .$test['L_Name']."</font></td>";

				//echo"<td><font color='white'>" .$test['L_Name']."</font></td>";
				
				echo"<td><font color='white'>". $test['Street_Ad']. "</font><td>";

				echo"<td><font color='white'>". $test['P_Phone']. "</font></td>";

				//echo"<td><font color='white'>". $test['P_Email']. "</font></td>";
				
				echo"<td><font color='white'>". $test['Bid_Date']. "</font></td>";
				
				echo"<td><font color='white'>". $test['Job_Status']. "</font></td>";
				
				//echo"<td><font color='white'>". $test['']. "</font></td>";
//				
//				echo"<td><font color='white'>". $test['Job_info']. "</font></td>";
				

				//echo"<td> <a href ='delcustinfo.php?Cust_ID=$id'><center>Delete</center></a>";
				
				
				echo "<td><a onClick=\"javascript: return confirm('**THIS WILL DELETE ALL INFORMATION PERTAINING TO THIS ONE JOB. ARE YOU SURE YOU WANT TO DELETE? THIS CANNOT BE UNDONE**');\" href='deljob.php?Cust_Job_ID=$fid'>Delete Job</a></td>"; 
				echo "<td><a onClick=\"javascript: return confirm('**THIS WILL DELETE ALL CUSTOMER INFO INCLUDING ALL JOBS PERTIANING TO THIS CUSTOMER! THIS CANNOT BE UNDONE. ARE YOU SURE YOU WANT TO DELETE?**');\" href='delcustinfo.php?Cust_ID=$id'>Delete Customer</a></td>"; 

				echo "</tr>";
			}

			mysql_close($conn);

			?>

</body>

 
    
</body>

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
</div>
</div>


</html>

<script>
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>
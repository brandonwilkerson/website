<?php

require("db.php");

$fid =$_REQUEST['Cust_Job_ID'];



$result = mysql_query("SELECT * FROM job, job_info, cust_info, contract_info WHERE job.Contract_ID = contract_info.Contract_ID AND cust_info.Cust_id = job.Cust_Id AND job.Job_ID = job_info.Job_ID AND Cust_Job_ID = '$fid'");

						

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
				
				$city = $test['City'];
				
				$state = $test['State'];
				
				$zip = $test['Zip'];
				
				$jobstreet = $test['Job_Street'];
				
				$jobstreetcity = $test['Job_Street_City'];
				
				$jobstreetstate = $test['Job_Street_State'];
				
				$jobstreetzip = $test['Job_Street_Zip'];
				
				$insopt = $test['INs_opt'];
				
				$callbefore = $test['Call_Before'];
				
				$preftime = $test['Pref_Time'];
				
				$comments = $test['Comments'];
				
				$emrep = $test['Em_Rep'];
				
				$insclaim = $test['Ins_Claim'];
				
				$tearrep = $test['Tear_Rep'];
				
				$inspstordam = $test['Insp_StorDam'];
				
				$biddate = $test['Bid_Date'];
				
				$startdate = $test['Start_Date'];
				
				$compdate = $test['Comp_Date'];
				
				$stories = $test['Stories'];
				
				$steep = $test['Steep'];
				
				$styacc = $test['Sty_Acc'];
				
				$acchow = $test['Acc_How'];
				
				$jobstatus = $test['Job_Status'];
				
				$ptotprice = $test['PTot_Price'];
				
				$ctotprice = $test['CTtot_Price'];
				
				$totsqft = $test['TotSQFT'];
				
				
				




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
	
	$city_save = $_POST['city'];
	
	$state_save = $_POST['state'];
	
	$zip_save = $_POST['zip'];
	
	$jobstreet_save = $_POST['jobstreet'];
	
	$jobstreetcity_save = $_POST['jobstreetcity'];
	
	$jobstreetstate_save = $_POST['jobstreetstate'];
	
	$jobstreetzip_save = $_POST['jobstreetzip'];
	
	$insopt_save = $_POST['insopt'];
	
	$callbefore_save = $_POST['callbefore'];
	
	$preftime_save = $_POST['preftime'];
	
	$comments_save = $_POST['comments'];
	
	$emrep_save = $_POST['emrep'];
	
	$insclaim_save = $_POST['insclaim'];
	
	$tearrep_save = $_POST['tearrep'];
	
	$inspstordam_save = $_POST['inspstordam'];
	
	$biddate_save = $_POST['biddate'];
	
	$startdate_save = $_POST['startdate'];
	
	$compdate_save = $_POST['compdate'];
	
	$stories_save = $_POST['stories'];
	
	$steep_save = $_POST['steep'];
	
	$styacc_save = $_POST['styacc'];
	
	$acchow_save = $_POST['acchow'];
	
	$jobstatus_save = $_POST['jobstatus'];
	
	$ptotprice_save = $_POST['ptotprice'];
	
	$ctotprice_save = $_POST['ctotprice'];
	
	$totsqft_save = $_POST['totsqft'];
	
	
	/*mysql_query("UPDATE address,cust_info, job SET address.Street_Ad = '$streetad_save', 
Zip = '$zip_save', City = '$city_save', State = '$state_save' 
WHERE cust_info.Cust_ID = job.Cust_ID AND address.Street_Ad = cust_info.Street_Ad AND Cust_Job_ID = '$fid'")

	
    or die(mysql_error()); */
	
	


	mysql_query("UPDATE cust_info, job SET F_Name ='$fname_save', L_Name ='$lname_save', P_Phone ='$pphone_save', P_Phone ='$pphone_save', P_Email ='$pemail_save', SF_Name ='$sfname_save', SL_Name ='$slname_save', S_Phone ='$sphone_save', S_Email ='$semail_save', Street_Ad ='$streetad_save', City = '$city_save', State = '$state_save', Zip = '$zip_save'  WHERE  cust_info.Cust_ID = job.cust_ID AND Cust_Job_ID = '$fid'")

				or die(mysql_error()); 
				
				
mysql_query("UPDATE job_info, job SET Job_Street = '$jobstreet_save', Job_Street_City = '$jobstreetcity_save',Job_Street_State = '$jobstreetstate_save', Job_Street_Zip ='$jobstreetzip_save', INs_opt = '$insopt_save', Call_Before = '$callbefore_save', Pref_Time = '$preftime_save', Comments = '$comments_save', Em_Rep = '$emrep_save', Ins_Claim = '$insclaim_save', Tear_Rep = '$tearrep_save', Insp_Stordam = '$inspstordam_save', Bid_Date = '$biddate_save', Start_Date = '$startdate_save', Comp_Date = '$compdate_save', Stories = '$stories_save', Steep = '$steep_save', Sty_Acc = '$styacc_save', Acc_How = '$acchow_save' , Job_Status = '$jobstatus_save', TotSQFT ='$totsqft_save' WHERE job.Job_ID = job_info.Job_ID AND Cust_Job_ID = '$fid'") 

				or die(mysql_error()); 	
				
mysql_query("UPDATE contract_info, job SET PTot_Price = '$ptotprice_save', CTtot_Price = '$ctotprice_save' WHERE job.Cust_Job_ID = '$fid' AND job.Contract_ID = contract_info.Contract_ID")
	
	or die(mysql_error());							

	
	
	// mysql_query("UPDATE contract_info, job SET contract_info.PTot_Price = $grandtotal_Save WHERE job.Cust_Job_ID =$testingpartsid AND job.Contract_ID = contract_info.Contract_ID")
//		
//		or die(mysql_error());
		
		echo "Saved!";
				 

	

	header("Location: thankyou.html");			

}

mysql_close($conn);

?>

<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

<title>Medley</title>
	<ul>
	<li><a href="custinfo.php">Customer Information</a></li>
    <li><a href="customersearch.php">Customer Search</a></li>
    <li><a href="partsedit.php">Parts Edit</a></li>
    <li><a href="contractorparts.php">Contractor Parts Edit</a></li>
	</ul> 
    
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>



<body>
<div class="background">
		<div class="transbox">
	<link rel="stylesheet" type="text/css" href="style.css">
	<center><h1>Edit Customer Information</h1></center>
	<div id="status"></div>

<form method="post">

<center><table>

	<tr>

		<td>First Name:</td>

		<td><input type="text" id = "fname" maxlength="30" name="fname" value="<?php echo $fname ?>" class="form-control"/></td>

		<td>Last Name:</td>

		<td><input type="text" id = "lname" maxlength="30" name="lname" value="<?php echo $lname ?>"class="form-control"/></td>

	</tr>

	<tr>

		<td>Primary Phone:</td>

		<td><input type="text" id = "pphone" name="pphone" maxlength="10" value="<?php echo $pphone ?>" class="form-control"/></td>

		<td>Primary Email:</td>

		<td><input type="text" id = "pemail" name="pemail" maxlength="30" value="<?php echo $pemail ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Secondary First Name:</td>

		<td><input type="text" id = "sfname" name="sfname" maxlength="30" value="<?php echo $sfname ?>" class="form-control"/></td>

		<td>Secondary Last Name:</td>

		<td><input type="text" id = "slname" name="slname" maxlength="30" value="<?php echo $slname ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Secondary Phone Number:</td>

		<td><input type="text" id = "sphone" name="sphone" maxlength="10" value="<?php echo $sphone ?>" class="form-control"/></td>

		<td>Secondary Email:</td>

		<td><input type="text" id = "semail" name="semail" maxlength="30" value="<?php echo $semail ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Street Address:</td>

		<td><input type="text" id = "streetad" name="streetad" maxlength="30" value="<?php echo $streetad ?>" class="form-control"/></td>

		<td>City:</td>

		<td><input type="text" id = "city" name="city" maxlength="15" value="<?php echo $city ?>" class="form-control"/></td>

	</tr>
     <tr>

		<td>State:</td>

		<td><input type="text" id ="state" name="state" maxlength="15" value="<?php echo $state ?>" class="form-control"/></td>

		<td>Zip:</td>

		<td><input type="text" id ="zip" name="zip" maxlength="10" value="<?php echo $zip ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Job Street:</td>

		<td><input type="text" id = "jobstreet" name="jobstreet" maxlength="30" value="<?php echo $jobstreet ?>" class="form-control"/></td>

		<td>Job City:</td>

		<td><input type="text" id = "jobcity" name="jobstreetcity" maxlength="15" value="<?php echo $jobstreetcity ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Job State:</td>

		<td><input type="text" id = "jobstate" name="jobstreetstate" maxlength="10" value="<?php echo $jobstreetstate ?>" class="form-control"/></td>

		<td>Job Zip:</td>

		<td><input type="text" id = "jobzip" name="jobstreetzip" maxlength="10" value="<?php echo $jobstreetzip ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Insurance Option: (Hail,Wind,Both)</td>

		<td><input type="text" id = "insopt" name="insopt" maxlength="15" value="<?php echo $insopt ?>" class="form-control"/></td>

		<td>Call Before:</td>

		<td><input type="text" id = "callbef" name="callbefore" maxlength="15" value="<?php echo $callbefore ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Prefferred Time:</td>

		<td><input type="text" id = "preftime" name="preftime" maxlength="15" value="<?php echo $preftime ?>" class="form-control"/></td>

		<td>Comments:</td>

		<td><input type="text" id = "comments" name="comments" maxlength="300" value="<?php echo $comments ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Emergency Repair:</td>

		<td><input type="text" id = "emrep" name="emrep" maxlength="15" value="<?php echo $emrep ?>" class="form-control"/></td>

		<td>Insurance Claim:</td>

		<td><input type="text" id = "insclaim" name="insclaim" maxlength="15" value="<?php echo $insclaim ?>" class="form-control"/></td>

	</tr>
     <tr>

		<td>Tear off or Repair:</td>

		<td><input type="text" id = "tearrep" name="tearrep" maxlength="15" value="<?php echo $tearrep ?>" class="form-control"/></td>

		<td>Inspection for Storm Damage:</td>

		<td><input type="text" id = "inspstordam" name="inspstordam" maxlength="15" value="<?php echo $inspstordam ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Bid Date:</td>

		<td><input type="text" name="biddate" id="dt1" value="<?php echo $biddate ?>" class="form-control"/></td>

		<td>Start Date:</td>

		<td><input type="text" name="startdate" id="dt2" value="<?php echo $startdate ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Completion Date:</td>

		<td><input type="text" name="compdate" id="dt3" value="<?php echo $compdate ?>" class="form-control"/></td>


		<td>Stories:</td>

		<td><input type="text" id = "stories" name="stories" maxlength="15" value="<?php echo $stories ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Steep:</td>

		<td><input type="text" id = "steep" name="steep" maxlength="15" value="<?php echo $steep ?>" class="form-control"/></td>


		<td>Story Accessible:</td>

		<td><input type="text" id = "styacc" name="styacc" maxlength="15" value="<?php echo $styacc ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Accessible How:</td>

		<td><input type="text" id = "acchow" name="acchow" maxlength="15" value="<?php echo $acchow ?>" class="form-control"/></td>
        
        <td>Job Status:</td>

		<td><input type="text" id = "jobstatus" name="jobstatus" maxlength="15" value="<?php echo $jobstatus ?>" class="form-control"/></td>

	</tr>
    
    <tr>

		<td>Contractor Price:</td>

		<td><input type="text" id = "ctotprice" name="ctotprice" maxlength="15" value="<?php echo $ctotprice ?>" class="form-control"/></td>
        
        <td>Parts Price:</td>

		<td><input type="text" id = "ptotprice" name="ptotprice" maxlength="15" value="<?php echo $ptotprice ?>" class="form-control"/></td>

	</tr>

	<tr>
    	<td>Total Square Footage of Roof:</td>

		<td><input type="text" id = "totsqft" name="totsqft" maxlength="15" value="<?php echo $totsqft ?>" class="form-control"/></td>

		<td>&nbsp;</td>

		<td><input type="submit" name="save" value="save" class="btn btn-success btn-lg" /></td>

	</tr>

</table></center>

<div class="box">
	<a class="button" href="#popup1">Help!</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Help!</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			<p>The customer information screen can be viewed through the customer search or in the top left-hand corner of the screen. This form allows the user to edit all client information. It contains information on the client and details pertaining to the job.
<p>
		</div>
	</div>
</div>  



</body>

</html>

<script>


    
$(document).ready(function () {
    
        $("#dt1").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            onSelect: function (date) {
                var date2 = $('#dt1').datepicker('getDate');
                date2.setDate(date2.getDate() + 1);
                $('#dt2').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#dt2').datepicker('option', 'minDate', date2);
            }
        });
        $('#dt2').datepicker({
            dateFormat: "yy-mm-dd",
            onClose: function () {
                var dt1 = $('#dt1').datepicker('getDate');
                console.log(dt1);
                var dt2 = $('#dt2').datepicker('getDate');
                if (dt2 <= dt1) {
                    var minDate = $('#dt2').datepicker('option', 'minDate');
                    $('#dt2').datepicker('setDate', minDate);
                }
            }
        });
    });

	 $('#dt3').datepicker({
            dateFormat: "yy-mm-dd",
            onClose: function () {
                var dt2 = $('#dt2').datepicker('getDate');
                console.log(dt2);
                var dt3 = $('#dt3').datepicker('getDate');
                if (dt3 <= dt2) {
                    var minDate = $('#dt3').datepicker('option', 'minDate');
                    $('#dt3').datepicker('setDate', minDate);
                }
            }
        });


document.getElementById('fname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}

document.getElementById('lname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('pphone').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('pemail').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \.@$]/, '');

}
document.getElementById('sfname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('slname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('sphone').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('semail').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('streetad').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \.@$]/, '');

}
document.getElementById('city').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('state').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \.@$]/, '');

}
document.getElementById('zip').onkeyup = function(event) {

    this.value = this.value.replace(/[^0-9_ \@$]/, '');

}
document.getElementById('jobstreet').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \.@$]/, '');

}
document.getElementById('jobcity').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \.@$]/, '');

}
document.getElementById('jobstate').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \.@$]/, '');

}
document.getElementById('jobzip').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('insopt').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('callbef').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('preftime').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \:@$]/, '');

}
document.getElementById('comments').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('emrep').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('insclaim').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('tearrep').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('inspstordam').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('stories').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('steep').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('styacc').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('acchow').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('jobstatus').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('ctotprice').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}

document.getElementById('ptotprice').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');
}

document.getElementById('totsqft').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');
}





function validate() {
            if (document.getElementById("streetad").value == "") {
                alert("Street Address cannot be blank");
				 } else if (document.getElementById("city").value == "") {
                alert("City cannot be blank");
				 } else if (document.getElementById("state").value == "") {
                alert("State cannot be blank");
				 }
				 else if (document.getElementById("zip").value == "") {
                alert("Zip Address cannot be blank");
				 }
					 
        }



  
  

</script>

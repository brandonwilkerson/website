<?php

require("db.php");

$id =$_REQUEST['Cust_Job_ID'];



$result = mysql_query("SELECT * FROM job,cust_info, job_info, contract_info where cust_info.Cust_ID = job.Cust_ID AND job.Cust_Job_ID = '$id' AND job.Job_ID = job_info.Job_ID AND contract_info.Contract_ID = job.Contract_ID");

						

$test = mysql_fetch_array($result);

if (!$result) 

		{

		die("Error: Data not found..");

		}

				$fname = $test['F_Name'];

				$lname = $test['L_Name'];
				
				$jobstreet = $test['Job_Street'];
				
				$jobstate = $test['Job_Street_State'];
				
				$jobcity = $test['Job_Street_City'];
				
				$jobzip = $test['Job_Street_Zip'];
				
				$contractprice = $test['PTot_Price'];
				
				
				
						
				
?>			
				
				
<!DOCTYPE html>
<html>
<head>
<title>Medley Roofing Inc. Contract</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>

<h1>Medley Roofing Inc. Contract</h1>
<p>Proposal Submitted To:
 <input type="text" name="fname" maxlength="10" value="<?php echo $fname ?>" class="form-control"/>
  <input type="text" name="lname" maxlength="10" value="<?php echo $lname ?>" class="form-control"/>

<br>
Work To Be Performed At:

 <input type="text" name="jobstreet" maxlength="10" value="<?php echo $jobstreet ?>" class="form-control"/>
  <input type="text" name="jobcity" maxlength="10" value="<?php echo $jobcity ?>" class="form-control"/>
   <input type="text" name="jobstate" maxlength="10" value="<?php echo $jobstate ?>" class="form-control"/>
    <input type="text" name="jobzip" maxlength="10" value="<?php echo $jobzip ?>" class="form-control"/>


<br>

Date Of Completion: 
<input type="text" name="biddate" placeholder = "yyyy-mm-dd" id ="datepicker" class="form-control"/>

*Weather Permitting*

<br>

<h3>We hereby propose to furnish the materials and perform the labor necessary for the completion of…</h3>

<ol>
  <li>Removal of existing roofing system down to the exposed wood substrate, then all debris resulting from our work will be taken from the premises and disposed of properly.</li>
  <li>If needed, we will replace any rotted wood at an additional cost of $45.00 per 3/8” sheet of CDX plywood, $50.00 per 1/2” sheet of CDX plywood, $55.00 per 5/8” sheet of CDX plywood, $60.00 per 3/4” sheet of CDX plywood, $3.00 per linear foot of 1x6, $3.50 per linear foot of 1x8, $4.00 per linear foot of 1x10 or $4.50 per linear foot of 1x12; OVER AND ABOVE THE ORIGINAL CONTRACT PRICE.</li>
  <li>To install a new 3-tab fiberglass shingle, Class A roofing system, manufactured by CertainTeed, over entire area of roof using galvanized roof nails; including 15lb UL felt underlayment.</li>
  <li>All valleys will be cut, closed and lined with ice & water shield.</li>
  <li>All existing static vents will be replaced; plus, all existing soil pipes will be replaced with 4lb lead flashings.</li>
  <li>All workmanship will be guaranteed for a period of 10 years from date of completion; if paid in full.</li>
  <li>Manufacturer issues a 30 year Limited Warranty covering roofing shingles</li>
  <li>Building owner to provide working area next to building for workers, trucks, etc…</li>
</ol> 

<br>
OPTIONAL: Additional $300 for installation of Tamko Heritage 30" architectural shingles, over and above the original contract price. PLEASE INITIAL HERE TO VERIFY APPROVAL __________
<br>

OPTIONAL: Additional $325 for installation of vented ridge, over and above the original contract price. PLEASE INITIAL HERE TO VERIFY APPROVAL __________

<br>

OPTIONAL: Additional $625 for installation of, over and above the original contract price. PLEASE INITIAL HERE TO VERIFY APPROVAL __________

<br>

PLEASE NOTE: Contract price includes <input type="text" name="jobstreet" maxlength="10" value="<?php echo $contractprice ?>" class="form-control"/>

<br>
<br>

All material is guaranteed to be as specified, and the above work to be performed in accordance to specifications submitted for above work and completed in a substantial workmanlike manner for the sum of:




<br>
<br>

With payment to be made as follows:

<br>
<br>


								Respectfully Submitted: Leonard R. Medley
								Per: Medley Roofing Inc.
                                <br>
								______________________
<br>
<br>


<h2>Acceptance of Approval</h2>

Date:  ____________________					Signature:  ________________________________________

											Signature:  ________________________________________

The above prices, specifications and conditions; including having read the back of the contract are satisfactory and are hereby accepted. Medley Roofing Inc is authorized to do the work as specified. Payments will be made as outlined.
 
                





 




</p>

</body>
</html>

<script>

</script>




    

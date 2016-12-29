<title>Medley</title>
<?php

  include("db.php");  



	$pnm =$_REQUEST['Part_Num'];
	$pid = $_REQUEST['Parts_ID'];
	$cjid = $_REQUEST['Cust_Job_ID'];

	

	

	// sending query
	
	mysql_query("Update contract_info, job, job_info,parts_list SET PTot_Price = (PTot_Price - CalQuanPrice) 
	where job.Cust_Job_ID = $cjid AND job.Contract_ID = contract_info.Contract_ID
	AND job.Job_ID = job_info.Job_ID AND job_info.Parts_ID = parts_list.Parts_ID 
	AND parts_list.Parts_ID = $pid AND parts_list.Part_Num = $pnm")
	
	or die(mysql_error());

	mysql_query("DELETE FROM Parts_List WHERE Part_Num = '$pnm' AND Parts_ID = '$pid'")

	or die(mysql_error());  	

	

	header("Location: viewcontractinfo.php?Cust_Job_ID=$cjid");

?> 
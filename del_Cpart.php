<title>Medley</title>
<?php

  include("db.php");  



	$pnm =$_REQUEST['CPart_Num'];
	$pid = $_REQUEST['CParts_ID'];
	$cjid = $_REQUEST['Cust_Job_ID'];

	

	

	// sending query
	
	mysql_query("Update contract_info, job, job_info,contractor_info,contractor_parts_list SET CTtot_Price = (CTtot_Price - CCalQuanPrice) 
	where job.Cust_Job_ID = $cjid AND job.Contract_ID = contract_info.Contract_ID
	AND job.Job_ID = job_info.Job_ID AND job_info.Gutters_ID = contractor_info.Gutters_ID 
	AND contractor_info.CParts_ID = contractor_parts_list.CParts_ID AND contractor_parts_list.CParts_ID = $pid AND contractor_parts_list.CPart_Num = $pnm")
	
	or die(mysql_error());

	mysql_query("DELETE FROM contractor_parts_list WHERE CPart_Num = '$pnm' AND CParts_ID = '$pid'")

	or die(mysql_error());  	

	

	header("Location: viewcontractinfo.php?Cust_Job_ID=$cjid");

?> 
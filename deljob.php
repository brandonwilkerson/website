<title>Medley</title>
<?php
  include("db.php"); 

 $cjid =$_REQUEST['Cust_Job_ID'];
 
 
 // sending query
 mysql_query("DELETE FROM contractor_parts_list where EXISTS (SELECT * from contractor_info, job_info, job where job.Cust_Job_ID = '$cjid' and  job.Job_ID = Job_Info.Job_ID AND job_info.Gutters_ID = contractor_info.Gutters_ID AND contractor_info.CParts_ID = contractor_parts_list.CParts_ID)")
 
 or die(mysql_error());
 
 mysql_query("DELETE FROM contractor_info where EXISTS (SELECT * from job_info, job  where job.Cust_Job_ID = '$cjid' and  job.Job_ID = job_info.Job_ID AND job_info.Gutters_ID = contractor_info.Gutters_ID)")
 
 or die(mysql_error());
 
 mysql_query("DELETE FROM parts_list where EXISTS (SELECT * from job, job_info where job.Cust_Job_ID = '$cjid' and  job.Job_ID = job_info.Job_ID and parts_list.Parts_ID = job_info.Parts_ID)")
 
 or die (mysql_error());
 
 mysql_query("DELETE from job_info where EXISTS(SELECT * from job  where job.Cust_Job_ID = '$cjid' and job.Job_ID = job_info.Job_ID )")
 
 or die (mysql_error());
 
 mysql_query("DELETE FROM contract_info where exists(SELECT * from job  where job.Cust_Job_ID = '$cjid' and job.Contract_ID = contract_info.Contract_ID )")
 or die (mysql_error());
 
 mysql_query("DELETE FROM job where job.Cust_Job_ID = '$cjid'")
 
 or die(mysql_error()); 
 
 header("Location: customersearch.php");
?>
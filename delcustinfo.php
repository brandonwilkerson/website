<title>Medley</title>
<?php
  include("db.php"); 

 $id =$_REQUEST['Cust_ID'];
 
 
 // sending query
/* mysql_query("DELETE FROM address where EXISTS ( SELECT * from cust_info where cust_info.Cust_ID = '$id'  AND cust_info.Street_Ad = address.Street_Ad)") 
 
 or die(mysql_error());*/
 
 
 
 mysql_query("DELETE FROM contractor_parts_list where EXISTS (SELECT * from contractor_info, job_info, job, cust_info where cust_info.Cust_ID = '$id' and cust_info.Cust_ID = job.Cust_ID and job.Job_ID = Job_Info.Job_ID AND job_info.Gutters_ID = contractor_info.Gutters_ID AND contractor_info.CParts_ID = contractor_parts_list.CParts_ID)")
 
 or die(mysql_error());
 
 mysql_query("DELETE FROM contractor_info where EXISTS (SELECT * from job_info, job, cust_info where cust_info.Cust_ID = '$id' and cust_info.Cust_ID = job.Cust_ID and job.Job_ID = job_info.Job_ID AND job_info.Gutters_ID = contractor_info.Gutters_ID)")
 
 or die(mysql_error());
 
 mysql_query("DELETE FROM parts_list where EXISTS (SELECT * from job, job_info, cust_info where cust_info.Cust_ID = '$id' and cust_info.Cust_ID = job.Cust_ID and job.Job_ID = job_info.Job_ID and parts_list.Parts_ID = job_info.Parts_ID)")
 
 or die (mysql_error());
 
 mysql_query("DELETE from job_info where EXISTS(SELECT * from job, cust_info where cust_info.Cust_ID = '$id' and cust_info.Cust_ID = job.Cust_ID and job.Job_ID = job_info.Job_ID and cust_info.Cust_ID = job.Cust_ID)")
 
 or die (mysql_error());
 
 mysql_query("DELETE FROM contract_info where exists(SELECT * from job, cust_info where cust_info.Cust_ID = '$id' and job.Contract_ID = contract_info.Contract_ID and cust_info.Cust_ID = job.Cust_ID)")
 or die (mysql_error());
 
 mysql_query("DELETE FROM job where exists(Select * from cust_info WHERE job.Cust_ID = cust_info.Cust_ID AND cust_info.Cust_ID =  '$id')")
 
 or die(mysql_error());
 
 mysql_query("DELETE FROM cust_info where Cust_ID = '$id'") 
 
 or die(mysql_error());
 
    
 
 header("Location: customersearch.php");
?>
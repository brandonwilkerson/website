<!DOCTYPE html>
<html>
<head>
		
<?php

 try {

$objDb = new PDO('mysql:host=localhost;dbname=Medley', 'root', '');
$objDb->exec('SET CHARACTER SET utf8');

$sql = "SELECT * FROM `contractor_parts`
        ";
$statement = $objDb->query($sql);
$list = $statement->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
echo 'There was a problem';

$cjid =$_REQUEST('Cust_Job_ID');
}

?>

<?php

require("db.php");

$fid =$_REQUEST['Cust_Job_ID'];



$result = mysql_query("SELECT * from job_info, job where job_info.Job_ID = job.Job_ID AND job.Cust_job_ID = '$fid'");

						

$test = mysql_fetch_array($result);

if (!$result)

		{

		die("Error: Data not found..");

		}

				$custjobid=$test['Cust_Job_ID'];
				
				if (isset($_POST['submit']))

	{

					
					$var = 0;
					$testingpartsid = $_POST['customerjobid'];
	 				$grandtotal_Save = $_POST['grandtotal'] ;
					$quantity1field_Save = $_POST['qty1'];
					$quantity2field_Save = $_POST['qty2'];
					$quantity3field_Save = $_POST['qty3'];
					$quantity4field_Save = $_POST['qty4'];
					$quantity5field_Save = $_POST['qty5'];
					$quantity6field_Save = $_POST['qty6'];
					$quantity7field_Save = $_POST['qty7'];
					$quantity8field_Save = $_POST['qty8'];
					$quantity9field_Save = $_POST['qty9'];
				    $quantity10field_Save = $_POST['qty10'];
					$parts1_Save = $_POST['name1'];
					$parts2_Save = $_POST['name2'];
					$parts3_Save = $_POST['name3'];
					$parts4_Save = $_POST['name4'];
					$parts5_Save = $_POST['name5'];
					$parts6_Save = $_POST['name6'];
					$parts7_Save = $_POST['name7'];
					$parts8_Save = $_POST['name8'];
					$parts9_Save = $_POST['name9'];
					$parts10_Save = $_POST['name10'];
					$total1field_Save = $_POST['total1'];
					$total2field_Save = $_POST['total2'];
					$total3field_Save = $_POST['total3'];
					$total4field_Save = $_POST['total4'];
					$total5field_Save = $_POST['total5'];
					$total6field_Save = $_POST['total6'];
					$total7field_Save = $_POST['total7'];
					$total8field_Save = $_POST['total8'];
					$total9field_Save = $_POST['total9'];
					$total10field_Save = $_POST['total10'];
					$ctearoff_Save = $_POST['ctearoff'];
					$cwalkable_Save = $_POST['cwalkable'];
					$cinsopt_Save = $_POST['cinsopt'];
					$cspecialinstruct = $_POST['cspecialinstruct'];
					
					
					
 $rest7 = mysql_query("SELECT CParts_ID FROM contractor_info, job, job_info Where job.Job_ID = job_info.Job_ID AND job.Cust_Job_ID = $testingpartsid AND job_info.Gutters_ID = contractor_info.Gutters_ID")
 or die(mysql_error());
 
 $cpid = mysql_fetch_array($rest7);
 
 
 
 if (!$rest7)
  {
  die("Error: Data not found..");
  }
    $cpartid =$cpid['CParts_ID'];
	
	//$guttersid = mysql_query("Select Gutters_ID from job,job_info where job.Job_ID = job_info.Job_ID AND job.Cust_Job_ID = '$testingpartsid'")
	
	//or die(mysql_error());
	
	mysql_query("Update contractor_info,job,job_info SET C_Tearoff = '$ctearoff_Save' , C_Walkable = '$cwalkable_Save' ,C_Ins_Opt = '$cinsopt_Save' ,CSpecial_Instruct = '$cspecialinstruct' Where job_info.Gutters_ID = contractor_info.Gutters_ID AND job.Job_ID = job_info.Job_ID AND job.Cust_Job_ID = $testingpartsid")
	or die(mysql_error());
	
					
//$res = mysql_query("SELECT * FROM contractor_info ORDER BY Gutters_ID DESC limit 1")
 
 //or die(mysql_error());
 
// $gid = mysql_fetch_array($res);
 
 
 
// if (!$res)
  //{
  //die("Error: Data not found..");
  //}
   // $guttersid = $gid['Gutters_ID'];
					
					
//mysql_query("Update job_info,job SET job_info.Gutters_ID = $guttersid Where job.Job_ID = job_info.Job_ID AND job.Cust_Job_ID = $testingpartsid")
	//		or die(mysql_error());	
	
		
								
												
			if (!empty($parts1_Save)){
		 mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice) 

		 VALUES ('$cpartid', '$parts1_Save','$quantity1field_Save','$total1field_Save')")
		 
		 
    

		 
		
		 or die(mysql_error());
		 
			}
		 
		 
			if(!empty($parts2_Save)){
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice) 

		 VALUES ('$cpartid', '$parts2_Save' ,'$quantity2field_Save','$total2field_Save')")
		 
		
		 
		 or die(mysql_error());
		 
			}
		 
		  if (!empty($parts3_Save)){
			  
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice) 

		 VALUES ('$cpartid', '$parts3_Save' ,'$quantity3field_Save','$total3field_Save')")
		
		 
		 or die(mysql_error());
		 
		  }
		  
		   if (!empty($parts4_Save)){
		
		 mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice) 

		 VALUES ('$cpartid', '$parts4_Save' ,'$quantity4field_Save','$total4field_Save')")
		
		 
		 or die(mysql_error());
		 
		   }
		   
		    if (!empty($parts5_Save)){
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice) 

		 VALUES ('$cpartid', '$parts5_Save' ,'$quantity5field_Save','$total5field_Save')")
		
		 
		 or die(mysql_error());
			}
			
			 if (!empty($parts6_Save)){
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice)

		 VALUES ('$cpartid', '$parts6_Save' ,'$quantity6field_Save','$total6field_Save')")
		
		 
		 or die(mysql_error());
		 
			 }
			 
			 
			  if (!empty($parts7_Save)){
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice)

		 VALUES ('$cpartid', '$parts7_Save' ,'$quantity7field_Save','$total7field_Save')")
		
		 
		 or die(mysql_error());	
		 
			  }
			  
			   if (!empty($parts8_Save)){
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice)

		 VALUES ('$cpartid', '$parts8_Save' ,'$quantity8field_Save','$total8field_Save')")
		
		 
		 or die(mysql_error());
		 
			   }
			   
			    if (!empty($parts9_Save)){
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice)

		 VALUES ('$cpartid', '$parts9_Save' ,'$quantity9field_Save','$total9field_Save')")
		
		 
		 or die(mysql_error());
		 
				}
				
			if (!empty($parts10_Save)){
		 
		  mysql_query("INSERT INTO `contractor_parts_list` (CParts_ID, CPart_Num, CQuantity, CCalQuanPrice)

		 VALUES ('$cpartid', '$parts10_Save' ,'$quantity10field_Save','$total10field_Save')")
		
		 
		 or die(mysql_error());
		 
				 }
				 
		mysql_query("UPDATE contract_info, job SET contract_info.CTtot_Price = $grandtotal_Save WHERE job.Cust_Job_ID =$testingpartsid AND job.Contract_ID = contract_info.Contract_ID")
		
		or die(mysql_error());
		
		

		 
		 
		 header("Location: thankyou.html"); 

	        }
			


?>
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type = "text/javascript"></script>
	<title>Bid Calculator</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
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
	<h1>Bid Calulator</h1>
	<div id="status"></div>
    
<br>
<br>
	
  

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
    
    
 <form method="post">
 <center><form method="post"> 
 <label>Customer Job ID</label>
 <input type="text" name="customerjobid" maxlength="15" value="<?php echo $custjobid ?>" readonly/>
 <br>
   
<label>Material</label>
<select class = "event_selection" name="name1" id="parts1">
      <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                         
                </option>
            <?php } ?>
</select> 

<label>Price</label>
    
<input name="description1" type="text" id="parts1field" oninput="calculate1()" value="0" readonly>
<label>Quantity</label>
 	<input name="qty1" type="text" id="quantity1field"  oninput="calculate1()" value="0">
 <label>Total</label>
 <input name="total1" type="text" id="total1field" value="0">
       
    
    
    
<br>

 <label>Material</label>
<select class = "event_selection" name="name2" id="parts2">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                     
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description2" type="text" id="parts2field" oninput="calculate2()" value="0" readonly>
 <label>Quantity</label>
 	<input name="qty2" type="text" id="quantity2field" oninput="calculate2()" value="0"> 
 <label>Total</label>
 	<input name="total2" type="text" id="total2field" value="0">   
 
 <br>
 
 <label>Material</label>
<select class = "event_selection" name="name3" id="parts3">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                     
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description3" type="text" id="parts3field" oninput="calculate3()" value="0" readonly>  
 <label>Quantity</label>
 	<input name="qty3" type="text" id="quantity3field" oninput="calculate3()" value="0"> 
 <label>Total</label>
 	<input name="total3" type="text" id="total3field" value="0">  
 
 <br>
 
 <label>Material</label>
<select class = "event_selection" name="name4" id="parts4">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                      
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description4" type="text" id="parts4field" oninput="calculate4()" value="0" readonly>
 <label>Quantity</label>
 	<input name="qty4" type="text" id="quantity4field" oninput="calculate4()" value="0"> 
 <label>Total</label>
 	<input name="total4" type="text" id="total4field" value="0">        
 
 <br>
 
 <label>Material</label>
<select class = "event_selection" name="name5" id="parts5">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                      
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description5" type="text" id="parts5field" oninput="calculate5()" value="0" readonly> 
 <label>Quantity</label>
 	<input name="qty5" type="text" id="quantity5field" oninput="calculate5()" value="0"> 
 <label>Total</label>
 	<input name="total5" type="text" id="total5field" value="0">            

<br>
 
 <label>Material</label>
<select class = "event_selection" name="name6" id="parts6">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                   <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                      
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description6" type="text" id="parts6field" oninput="calculate6()" value="0" readonly>
 <label>Quantity</label>
 	<input name="qty6" type="text" id="quantity6field" oninput="calculate6()" value="0"> 
 <label>Total</label>
 	<input name="total6" type="text" id="total6field" value="0">             

<br>

<label>Material</label>
<select class = "event_selection" name="name7" id="parts7">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                      
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description7" type="text" id="parts7field" oninput="calculate7()" value="0" readonly> 
 <label>Quantity</label>
 	<input name="qty7" type="text" id="quantity7field" oninput="calculate7()" value="0"> 
 <label>Total</label>
 	<input name="total7" type="text" id="total7field" value="0">  
 
 <br>

<label>Material</label>
<select class = "event_selection" name="name8" id="parts8">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                     
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description8" type="text" id="parts8field" oninput="calculate8()" value="0" readonly>
 <label>Quantity</label>
 	<input name="qty8" type="text" id="quantity8field" oninput="calculate8()" value="0"> 
 <label>Total</label>
 	<input name="total8" type="text" id="total8field" value="0">       
 
 <br>

<label>Material</label>
<select class = "event_selection" name="name9" id="parts9">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                     
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description9" type="text" id="parts9field" oninput="calculate9()" value="0" readonly>
 <label>Quantity</label>
 	<input name="qty9" type="text" id="quantity9field" oninput="calculate9()" value="0"> 
 <label>Total</label>
 	<input name="total9" type="text" id="total9field" value="0">    
 
 <br>

<label>Material</label>
<select class = "event_selection" name="name10" id="parts10">
        <option value="None"></option>
            <?php foreach($list as $row) { ?>
                    <option value="<?php echo $row['CPart_Num']; ?>">
                    <?php echo $row['CPart_Num']; ?> | <?php echo $row['CPart_Desc']; ?> | <?php echo $row['CPart_Cost']; ?> | <?php echo $row['CPart_Price']; ?>                  
                </option>
            <?php } ?>
</select>

<label>Price</label>

 <input name="description10" type="text" id="parts10field" oninput="calculate10()" value="0" readonly>
 <label>Quantity</label>
 	<input name="qty10" type="text" id="quantity10field"  oninput="calculate10()" value="0"> 
 <label>Total</label>
 	<input name="total10" type="text" id="total10field" value="0"> 
    <br>
    <center><Label>Grand Total</Label></center>
	
   <center> <input name="grandtotal" type="text" id="grandtotalfield" onclick="grandtotalcalc()" value=""></center>
    <br>
    <Label>Tearoff or Repair</Label>
    <input name="ctearoff" type="text" id="ctearoff" value="">
    <Label>Walkable</Label>
    <input name="cwalkable" type="text" id="cwalkable" value="">
    <label>Insurance Option</label>
    <input name="cinsopt" type="text" id="cinsopt" value="">
    <label>Special Instructions</label>
    <input name="cspecialinstruct" type="text" id="cspecialinstruct" value="">
   
		<input type="submit" name="submit" value="add" class="btn btn-success btn-lg"/>
    
    </form>
       
<br>



               
          

</html>


<script>

var $coll = $( '.event_selection' ).on( 'change', function () {
    $coll.children().prop( 'disabled', false );
    $coll.each(function () {
        var val = this.value;
        if ( val === 'original' ) return;
        $coll.not( this ).children( '[value="' + val + '"]' ).prop( 'disabled', true );
    });
});


    $(function () {

        $('#parts1').on('change', function () {
            var selected_text=$( "#parts1 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts1field').val(selected_text[3]);
        });
    })
	
		function calculate1() {
		var partsfield1 = document.getElementById('parts1field').value;	
		var quantityfield1 = document.getElementById('quantity1field').value;
		var result1 = document.getElementById('total1field');	
		var myResult1 = partsfield1 * quantityfield1;
		var math1 = Math.round(myResult1 * 100) / 100
		result1.value = math1;
      
		
	}
	
	
	
	$(function () {

        $('#parts2').on('change', function () {
            var selected_text=$( "#parts2 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts2field').val(selected_text[3]);
        });
    })
	
	function calculate2() {
		var partsfield2 = document.getElementById('parts2field').value;	
		var quantityfield2 = document.getElementById('quantity2field').value;
		var result2 = document.getElementById('total2field');	
		var myResult2 = partsfield2 * quantityfield2;
		var math2 = Math.round(myResult2 * 100) / 100
		result2.value = math2;
      
		
	}
	
	
	
	$(function () {

        $('#parts3').on('change', function () {
            var selected_text=$( "#parts3 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts3field').val(selected_text[3]);
        });
    })
	
	function calculate3() {
		var partsfield3 = document.getElementById('parts3field').value;	
		var quantityfield3 = document.getElementById('quantity3field').value;
		var result3 = document.getElementById('total3field');	
		var myResult3 = partsfield3 * quantityfield3;
		var math3 = Math.round(myResult3 * 100) / 100
		result3.value = math3;
      
		
	}
	
	
	$(function () {

        $('#parts4').on('change', function () {
            var selected_text=$( "#parts4 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts4field').val(selected_text[3]);
        });
    })
	
	
	function calculate4() {
		var partsfield4 = document.getElementById('parts4field').value;	
		var quantityfield4 = document.getElementById('quantity4field').value;
		var result4 = document.getElementById('total4field');	
		var myResult4 = partsfield4 * quantityfield4;
		var math4 = Math.round(myResult4 * 100) / 100
		result4.value = math4;
      
		
	}
	
	$(function () {

        $('#parts5').on('change', function () {
            var selected_text=$( "#parts5 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts5field').val(selected_text[3]);
        });
    })
	
	
	function calculate5() {
		var partsfield5 = document.getElementById('parts5field').value;	
		var quantityfield5 = document.getElementById('quantity5field').value;
		var result5 = document.getElementById('total5field');	
		var myResult5 = partsfield5 * quantityfield5;
		var math5 = Math.round(myResult5 * 100) / 100
		result5.value = math5;
      
		
	}
	
	$(function () {

        $('#parts6').on('change', function () {
            var selected_text=$( "#parts6 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts6field').val(selected_text[3]);
        });
    })
	
	function calculate6() {
		var partsfield6 = document.getElementById('parts6field').value;	
		var quantityfield6 = document.getElementById('quantity6field').value;
		var result6 = document.getElementById('total6field');	
		var myResult6 = partsfield6 * quantityfield6;
		var math6 = Math.round(myResult6 * 100) / 100
		result6.value = math6;
      
		
	}

$(function () {

        $('#parts7').on('change', function () {
            var selected_text=$( "#parts7 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts7field').val(selected_text[3]);
        });
    })
	
	function calculate7() {
		var partsfield7 = document.getElementById('parts7field').value;	
		var quantityfield7 = document.getElementById('quantity7field').value;
		var result7 = document.getElementById('total7field');	
		var myResult7 = partsfield7 * quantityfield7;
		var math7 = Math.round(myResult7 * 100) / 100
		result7.value = math7;
      
		
	}	
	
	$(function () {

        $('#parts8').on('change', function () {
            var selected_text=$( "#parts8 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts8field').val(selected_text[3]);
        });
    })	
	
	function calculate8() {
		var partsfield8 = document.getElementById('parts8field').value;	
		var quantityfield8 = document.getElementById('quantity8field').value;
		var result8 = document.getElementById('total8field');	
		var myResult8 = partsfield8 * quantityfield8;
		var math8 = Math.round(myResult8 * 100) / 100
		result8.value = math8;
      
		
	}	
	
	$(function () {

        $('#parts9').on('change', function () {
            var selected_text=$( "#parts9 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts9field').val(selected_text[3]);
        });
    })	
	
	function calculate9() {
		var partsfield9 = document.getElementById('parts9field').value;	
		var quantityfield9 = document.getElementById('quantity9field').value;
		var result9 = document.getElementById('total9field');	
		var myResult9 = partsfield9 * quantityfield9;
		var math9 = Math.round(myResult9 * 100) / 100
		result9.value = math9;
      
		
	}	
	
	$(function () {

        $('#parts10').on('change', function () {
            var selected_text=$( "#parts10 option:selected" ).text();
            selected_text=selected_text.split('|');
            $('#parts10field').val(selected_text[3]);
        });
    })	
	
	function calculate10() {
		var partsfield10 = document.getElementById('parts10field').value;	
		var quantityfield10 = document.getElementById('quantity10field').value;
		var result10 = document.getElementById('total10field');	
		var myResult10 = partsfield10 * quantityfield10;
		var math10 = Math.round(myResult10 * 100) / 100
		result10.value = math10;
      
		
	}	
	
	function grandtotalcalc() {
		var totalfield1 = document.getElementById('total1field').value;
		var totalfield2 = document.getElementById('total2field').value;
		var totalfield3 = document.getElementById('total3field').value;
		var totalfield4 = document.getElementById('total4field').value;
		var totalfield5 = document.getElementById('total5field').value;
		var totalfield6 = document.getElementById('total6field').value;
		var totalfield7 = document.getElementById('total7field').value;
		var totalfield8 = document.getElementById('total8field').value;
		var totalfield9 = document.getElementById('total9field').value;
		var totalfield10 = document.getElementById('total10field').value;
		var gtResult = document.getElementById('grandtotalfield');	
		var grandtotalResult = parseFloat(totalfield1) + parseFloat(totalfield2) + parseFloat(totalfield3) + parseFloat(totalfield4) + parseFloat(totalfield5) + parseFloat(totalfield6) + parseFloat(totalfield7) + parseFloat(totalfield8) + parseFloat(totalfield9) + parseFloat(totalfield10);
		var grandmath = Math.round(grandtotalResult * 100) / 100
		gtResult.value = grandmath;
      
		
	}	
	
	
	
	
</script>
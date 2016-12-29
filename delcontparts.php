<title>Medley</title>
<?php

  include("db.php");  



	$id =$_REQUEST['CPart_Num'];

	

	

	// sending query

	mysql_query("DELETE FROM contractor_parts WHERE CPart_Num = '$id'")

	or die(mysql_error());  	

	

	header("Location: contractorparts.php");

?> 
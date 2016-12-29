<title>Medley</title>
<?php

  include("db.php");  



	$id =$_REQUEST['Part_Num'];

	

	

	// sending query

	mysql_query("DELETE FROM Parts WHERE Part_Num = '$id'")

	or die(mysql_error());  	

	

	header("Location: partsedit.php");

?> 
<?php
//echo $_REQUEST["username"];
include "dbrw.php";

	   //$conn = mysqli_connect("localhost", "root", "root","club");
	
        $qry="INSERT INTO notice_table (notice,time_date,posted_by) values ('"$_REQUEST['notice']"',now(),'ttg')";

		
		
		$a=getDataFromDB($qry);



?>
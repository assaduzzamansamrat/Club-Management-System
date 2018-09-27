<?php
include("db.php");

	if(isset($_REQUEST["username"])){

	$flag = 0;
	$mssg = "not updated";
	$notice = $_REQUEST["notice"];
	$uname = mysqli_real_escape_string($conn,$_REQUEST["username"]);

	if(!empty($_REQUEST["notice"])){

		$sql="INSERT INTO notice_table (notice, time_date, posted_by) VALUES ('$notice',now(),'uname')";

		$reslt = mysqli_query($conn, $sql);

		
		$a=getDataFromDB($sql);
	}

	
}


?>
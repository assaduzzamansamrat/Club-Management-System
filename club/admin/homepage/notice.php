<?php
include "db_notice.php";

	   //$conn = mysqli_connect("localhost", "root", "root","club");
	

	if(empty($_REQUEST["notice"]) || empty($_REQUEST["user"]) || 
		empty($_REQUEST["club"])){

		echo "<h3 class='updated' style=' font-weight: lighter; font-family: Tw Cen MT,ROBOTO,helvetica; margin-left:43%; color: #cc0000; width: 200px; background-color: #ffb3b3; text-align: center; border-radius:20px; padding: 5px 5px;'>No field can be empty.</h3>";

	}else{

        $sql="INSERT INTO notice_table(notice, time_date, posted_by, club_ID) values ('".$_REQUEST["notice"]."', now(), '".$_REQUEST["user"]."','".$_REQUEST["club"]."')";

	//	$reslt = mysqli_query($conn, $sql);

		
		$a=getDataFromDB($sql);
		//echo "abc";
		
}

?>
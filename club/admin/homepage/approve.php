<?php
$conn = mysqli_connect("localhost","root","","club");
	if(isset($_REQUEST["username"])){
		if(isset($_REQUEST["value"])){
			$sql="UPDATE studentinfo SET is_active='".$_REQUEST["value"]."' where username='".$_REQUEST["username"]."'";
			$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
			echo "done";

			if($_REQUEST["value"]=='Y'){
			$message = urlencode("Approved!");
			header("Location: homepage.php?decision=".$message);	
			}
			if($_REQUEST["value"]=='N'){
			$message = urlencode("Rejected!");
			header("Location: homepage.php?decision=".$message);	
			}
			if($_REQUEST["value"]=='W'){
			$message = urlencode("Send to waiting list.");
			header("Location: homepage.php?decision=".$message);	
			}
		}
	
	

	}

?>
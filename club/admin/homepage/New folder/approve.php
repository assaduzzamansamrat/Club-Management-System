<?php
$conn = mysqli_connect("localhost","root","root","club");
	if(isset($_REQUEST["username"])){
		if(isset($_REQUEST["value"])){
			$sql="UPDATE studentinfo SET is_active='".$_REQUEST["value"]."' where username='".$_REQUEST["username"]."'";
			$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
			echo "done";
		}
	
	

	}

?>
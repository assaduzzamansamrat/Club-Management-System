<?php
function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","club");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$stmt = $conn->prepare($sql);
	  $stmt->execute();
	  echo "Notice Posted!";

	  //"<h3 class='updated' style=' font-family: Tw Cen MT,ROBOTO,helvetica; margin-left:36%; color: #e6e6e6; width: 30%; background-color: rgba(255, 80, 80,0.7); text-align: center; border-radius:20px; padding: 5px 5px;'>Updated successfully.&nbsp;<a style=' transition: all 400ms; text-decoration: none; color: #fff;' href='profile.php' class='fa fa-refresh' aria-hidden='true'></a></h3>";
}
?>

<style type="text/css">
	.updated a:hover{
		transform: scale(1.2);
	}
</style>
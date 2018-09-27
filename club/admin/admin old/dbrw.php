<?php
function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","club");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	  echo "done";
}
?>

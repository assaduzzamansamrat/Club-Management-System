<?php 

function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "root","club");
	$stmt = $conn->prepare($sql);
	 $stmt->execute();
	 // echo " records UPDATED successfully";
	 // echo (url);
	//echo $sql;
	//$result = mysqli_query($conn, $sql)or die(mysqli_error($$conn));
	//$arr=array();
	//print_r($result);
	/*while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;*/
}

 ?>
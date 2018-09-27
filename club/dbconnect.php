<?php

$db = mysqli_connect("localhost","root","root","club");
//server,username,password,database_name

//error handler
if(!$db){
	die("Connection failed: ".mysql_connect_error());
			/*Do not use mysql_connect_error() in real website as you will be prone to SQL injection (hacking)*/

}

/*function getDataFromDB($sql){
	$db = mysqli_connect("localhost","root","","club");
	$result = mysqli_query($db, $sql)or die(mysqli_error($db));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
}*/
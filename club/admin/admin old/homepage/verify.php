<?php
/*

$db = mysqli_connect("localhost","root","","club");
//server,username,password,database_name

//error handler
if(!$db){
	die("Connection failed: ".mysql_connect_error());
			/*Do not use mysql_connect_error() in real website as you will be prone to SQL injection (hacking)*/
/*
}

if (isset($_POST['save_value'])) {

 	
	$decision = mysqli_real_escape_string($db, $_POST['decision']);


	mysql_query("UPDATE studentinfo SET is_active = '$decision'");

	header('Location: homepage.php');
}


*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "club";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE studentinfo SET is_active ='Y' WHERE username='{$row["username"]}'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

 ?>
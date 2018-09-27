<?php

$db = mysqli_connect('localhost', 'root', '', 'club');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql_query = "SELECT name FROM studentinfo WHERE username='$username'";

	$rslt = mysqli_query($db, $sql_query);

	if(mysqli_num_rows($rslt)>0){

		$row = mysqli_fetch_assoc($rslt);
		$full_name = $row['name'];

		$_SESSION['full_name'] = $full_name;
	}

 ?>
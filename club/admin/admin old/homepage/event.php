<?php
session_start();

include '../../dbconnect.php';

if (isset($_POST['post_event'])){

	include 'upload.php';

	if(empty($_POST['eventName'])){
		array_push($errors, "Event name not.");	
	}

}
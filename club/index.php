<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
</head>
<body>
	

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
		

			<?php include 'homepage/homepage.php' ?>



			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		



		<?php endif ?>
		
</body>
</html>
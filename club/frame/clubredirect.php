<?php 

if(isset($_GET["id"])){

	if($_GET["id"]=='3'){
		header('Location: ../homepage/homepage.php?clubid='.$_GET["id"].'');
	}
	if($_GET["id"]=='1' || $_GET["id"]=='2' || $_GET["id"]=='4'){
		header('Location: ../homepage/homepage.php?clubid='.$_GET["id"].'');
	}
	else{
		echo "test";
	}
}

 ?>
<?php
//include ("update.php");
         	$conn = mysqli_connect("localhost", "root", "root","club");
		 $sql="INSERT INTO club_relation(club_ID,club_Name, user_ID) values ('".$_REQUEST["clubname"]."','".$_REQUEST["cl"]."','".$_REQUEST["username"]."')";
		
         $reslt = mysqli_query($conn, $sql);

?>


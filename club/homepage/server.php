<?php
include("db.php");

if(isset($_REQUEST["uname"])){
	$sql="SELECT * FROM studentinfo WHERE name like '".$_REQUEST["uname"]."%' OR username like '".$_REQUEST["uname"]."%'";

	$a=getDataFromDB($sql);

	foreach($a as $v){
		//echo "<p>".$v["name"]." from ".$v["dept"]."</p>";
		//echo "<p>".$v["name"]."</p>";
		echo "<a href='details.php?uid=".$v['username']."'>".$v["name"]."</a><br/>";
		

	}
}
?>
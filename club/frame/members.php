<script type="text/javascript">


	function toggleMemberList(){
		document.getElementById("mem_list").classList.toggle('active');
	}

	function showMsg(a){
		document.getElementById("msg_box").style.visibility = 'visible';
		document.getElementById("msg_box").classList.toggle('active');
		document.getElementById("msg_txt").classList.toggle('active');
		alert(a);
	}


</script>



<div id="mem_list">
	<div class="mem_list_topbar" onclick="toggleMemberList()">
		<p>Member List</p>
	</div>

	<?php
	   include 'db.php'; 

	   $clubID = $_SESSION['clubid'];
	   $username=$_SESSION['username'];
	  // $un = "abc";

        $query = "SELECT * FROM studentinfo WHERE clubID = '$clubID' AND username NOT IN ('$username')";
		$results = mysqli_query($db, $query);
		echo '<ul>';
		while($row = mysqli_fetch_assoc($results)) {
			        echo '<a onclick="showMsg('.$row['username'].')"><li>'.'<img style="vertical-align:middle; border-radius:20px; height:35px; width:35px; margin-right:10px;" src="../profile_images\\'.$row['avatar'].'" alt="profile image"/><span style="vertical-align:middle">'.$row['name'].'</span></li></a>';
				
		}
   echo '</ul>';

?>
</div>


<style type="text/css">
	
	#mem_list{


		position: fixed;

		width: 200px;
		height: 500px;
		background : #e6e6e6;
		left:83%;
		bottom: -473px;
		border-top-right-radius: 10px;
		border-top-left-radius: 10px;
		transition: all 300ms linear;
		border: 4px ridge #333333;
		
	}


	#mem_list ul li{
		
		width: 200px;
		
		list-style: none;
		font-size: 17px;
		border-bottom: 1px solid rgba(100,100,100,1);
		padding: 10px 10px 10px 10px;
	}

	.mem_list_topbar{
		cursor: pointer;
		padding: 3px 0 6px 0;
		background-color: #660066;
		border-top-right-radius: 5px;
		border-top-left-radius: 5px;
	}

	.mem_list_topbar p{
	
	font-size: 17px;
	color: #fff;
	text-align: center;
	font-weight: bold;	
}

#mem_list.active{
	
	bottom: 0px;

}

#mem_list a{

	cursor: pointer;
	color: #333333;
	text-decoration: none;
}

#mem_list a:hover{
	text-decoration: underline;
}


</style>
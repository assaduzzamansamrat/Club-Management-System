<script>
// xmlhttp = new XMLHttpRequest();
function showHint() {
	var  xmlhttp = new XMLHttpRequest();
	var str=document.getElementById('mytext').value;	
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;;
		}
	};
 	var url="../homepage/server.php?uname="+str;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
</script>

<aside>
	<div id="sidebar">

		<div class="toggle-btn" onclick="toggleSidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
			<div id="profileImage">
			
				<?php
				//for showing profile image
		
				echo'<div class="profile">'
						.'<img style="height:180px; width:146px; ;display: block;" src="../profile_images\\'.$_SESSION['admin_avatar'].'" alt="profile image" />'.
					'</div>';
								 
				?>
				
				<h6 style="text-align: center; color: #fff;
				font-size: 13px;">Member Type : <p>Admin</p></h6>

				<span></span>
				<center><a href="../profile/profile.php"><b style="font-size: 16px;"><?php echo  $_SESSION['admin_name'] ; ?></b></a>
				
				<span></span></center>
			</div>
	<div class="aside_list">
		<ul>
			<a href=""><li>Recent Events</li></a>
			<a href=""><li>Image Gallery</li></a>
			
			<input type="text" onkeyup="showHint()" id="mytext" placeholder="Search Member">
			<h4 id="txtHint"></h4>

		</ul>
	</div>
		
	</div>
</aside>

<style type="text/css">



	#profileImage p{
		text-align: center;
		color: #99cc00;
		font-size: 15px;
		font-family: 'Ubuntu';
	}




	#mytext{
		padding: 10px 0;
		text-align: center;
		width: 150px;
		margin-left: -20px;
		margin-top: 20px;
		overflow: hidden;
		margin-bottom: 10px;
	}

	

	#txtHint{

		color: #0066ff;
		font-size: 15px;
		height: 100px;
		width: 150px;
		white-space: nowrap; 
  	    overflow: hidden;
	    text-overflow: ellipsis;
	  

	}



	#txtHint a:hover{
		transition: 0.3s;
		text-decoration: underline;
		
	}



</style>





<script type="text/javascript">

//------Sidebar start------
	function toggleSidebar(){
		document.getElementById("sidebar").classList.toggle('active');
		
	}
//------Sidebar ends-----




</script>
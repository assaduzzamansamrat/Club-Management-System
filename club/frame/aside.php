<script type="text/javascript">
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
			m.innerHTML=xmlhttp.responseText;
		}
	};
 	var url="../homepage/server.php?uname="+str;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}

function Applealert() {
	var val1,val2,val3;
	if(document.getElementById("c1").checked==true){
		var val1=1;
		
			var  xmlhttp = new XMLHttpRequest();
	//var str=document.getElementById('mytext').value;
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
		}
	};
	var un="<?php echo $_SESSION['username']; ?>";
 	var url="../frame/add.php?clubname="+val1+"&username="+un+"&cl=APAC";
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
	}
	if(document.getElementById("c2").checked==true){
		var val2=2;
		
			var  xmlhttp = new XMLHttpRequest();
	//var str=document.getElementById('mytext').value;
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
		}
	};
	var un="<?php echo $_SESSION['username']; ?>";
 	var url="../frame/add.php?clubname="+val2+"&username="+un+"&cl=ACC";
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
	}
	if(document.getElementById("c3").checked==true){
		var val=3;
		
		
			var  xmlhttp = new XMLHttpRequest();
	//var str=document.getElementById('mytext').value;
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
		}
	};
	var un="<?php echo $_SESSION['username']; ?>";
 	var url="../frame/add.php?clubname="+val2+"&username="+un+"&cl=Somoy club";
 	//var url="../frame/add.php?clubuname="+val3;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
	}
	
}
</script>



<aside>
	<div id="sidebar">

		<div class="toggle-btn" style="cursor: pointer;" onclick="toggleSidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
			<div id="profileImage">
			
				<?php
				//for showing profile image
		
				echo'<div class="profile">'
						.'<img style="height:180px; width:146px; ;display: block;" src="../profile_images\\'.$_SESSION['avatar'].'" alt="profile image" />'.
					'</div>';
								 
				?>
				
				<h6 style="text-align: center; color: #fff;
				font-size: 13px;">Member Type : </h6>
				<p>General Member</p>
				<span></span>
				<center><a href="../profile/profile.php"><b style="font-size: 16px;"><?php echo  $_SESSION['full_name'] ; ?></b></a>
				</center>
				<span></span>
			</div>
		<ul>
			<a href="#event"><li>Recent Events</li></a>
			<a href=""><li>Image Gallery</li></a>
			
			<input type="text" onkeyup="showHint()" id="mytext" placeholder="Search Member">
			<i class="fa fa-search" onclick="showHint()"></i>
			<h4 id="txtHint"></h4>

			<li class="jn-club" style="background-color: rgba(77, 102, 0,0.8);">Join Another Club
				<ul>
					<li style="border-bottom: 1px solid rgb(129, 152, 48);";>
					APAC&nbsp;&nbsp;
					<input type="checkbox" id ="c1" name="c1" onclick = "Applealert();"  value="1" >
					</li>
					<li style="border-bottom: 1px solid rgb(129, 152, 48);";>
					Computer Club&nbsp;&nbsp;
					<input type="checkbox" id ="c2" name="c2" onclick = "Applealert();" value="3" >
					</li>
					<li style="border-bottom: 1px solid rgb(129, 152, 48);";>
					Shomoy Club&nbsp;&nbsp;
					<input type="checkbox" id ="c3" name="c3" onclick = "Applealert()" value="2" >
					</li>
				</ul>
			</li>
			

			

		</ul>
	</div>
</aside>

<style type="text/css">


	

	ul li ul li{
		
		width: 180px;
		position: relative;
		background-color: rgba(57, 77, 0,1);


	}
	ul ul{
	visibility: hidden;
	opacity: 0;
	transition: all 0.3s;
	position: absolute;
	left: 0;
	top: 56%;

	}

	ul li:hover > ul{
	opacity: 1;
	visibility: visible;
}

	#profileImage p{
		text-align: center;
		color: #99cc00;
		font-size: 15px;
		font-family: 'Ubuntu';
	}

	.ds{

		width: 100px;
		height: 100px;
		top: 10%;
		left: 20%;
	}

	ul li{
		text-align: center;
	}


	#mytext{
		padding: 10px 0;
		text-align: center;
		width: 150px;
		margin-left: 10px;
		margin-top: 20px;
		overflow: hidden;
		margin-bottom: 10px;
	}

	.fa-search{
		padding-left: 2px;
		font-size: 1.7em;
		color: #e6e6e6;
		cursor: pointer;

	}

	#txtHint{

		color: #0066ff;
		font-size: 15px;
		height: 100px;
		width: 150px;
		white-space: nowrap; 
  	    overflow: hidden;
	    text-overflow: ellipsis;
	    margin-left: 20px;

	}



	#txtHint a:hover{
		transition: 0.3s;
		text-decoration: underline;
		
	}

	#search{
		cursor: pointer;
	  text-overflow: ellipsis;
	  white-space: nowrap;
	  overflow: hidden;
	  font-size: 12px;
	  height: 40px;
	  background-color: #516ec8;
	  color: #fff;
	  border: 1px solid rgba(255, 255, 255, 0.15);
	
	  border-radius: 2px;
	  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
	  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

#search:hover,
#search:focus {
  background-color: #314b9b;
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}





</style>





<script type="text/javascript">

//------Sidebar start------
	function toggleSidebar(){
		document.getElementById("sidebar").classList.toggle('active');
		document.getElementById("logo").classList.toggle('active');
		document.getElementById("footer").classList.toggle('active');

	}
//------Sidebar ends-----




</script>
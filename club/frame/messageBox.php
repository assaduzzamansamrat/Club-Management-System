<script type="text/javascript">
function Msg() {
	var  xmlhttp = new XMLHttpRequest();
	var str=document.getElementById('msg').value;
    var	user = "<?php echo $_SESSION['username']; ?>";	
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
			//var m=document.getElementById("txtHint");
			
			alert(xmlhttp.responseText);
		}
	};
 	var url="insertmessage.php.php?massege="+str+"&from="+user;
	alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}

	function toggleMsg(){
		document.getElementById("msg_box").classList.toggle('active');
		document.getElementById("msg_txt").classList.toggle('active');

	}

	function close_msg(){
	
		document.getElementById("msg_box").style.visibility = 'hidden';
		document.getElementById("msg_txt").style.visibility = 'hidden';
	
	}


</script>



<div id="msg_box">
	
	<div id="msg_head" onclick="toggleMsg()">Name<i style="margin-left:63%; color: rgb(242, 242, 242);" class="fa fa-window-close fa-lg" aria-hidden="true" onclick="close_msg()"></i></div>

<div class="msg_container">
	
	<div class="fnd_txt">
		<p>hello</p>
	</div>

	<div class="my_txt"">
		<p>Hi</p>
	</div>
</div>
	

	

</div>
<div id="msg_txt">
		<input type="text" id="msg" style="

		background: transparent;
            border-top: transparent !important;
            border-left: transparent !important;
            border-right: transparent !important;
            border-bottom: 4px solid !important; padding: 15px 10px;width: 230px;" name="message" placeholder="Type your message...">
		<a onclick="Msg()"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
	</div>

<style type="text/css">
	#msg_box{

		position: fixed;
		width: 300px;
		height: 400px;
		left:55%;
		bottom: -361.9px;
		border-top-right-radius: 10px;
		border-top-left-radius: 10px;
		transition: all 300ms linear;
		border: 4px ridge #333333;
		background-color: #fff;
		visibility: hidden;
	}

	#msg_box.active{

		bottom: 0px;

	}

	#msg_head{
		padding: 10px 0 10px 0;
		background-color: rgba(102, 0, 102,0.9);
		color: #fff;
		text-align: center;
		font-size: 17px;
		cursor: pointer;
	}

	#msg_txt{
		position: fixed;
		bottom: -50px;
		left: 55.25%;
		border-top: 1px solid rgb(204, 204, 204);
		
	}

	#msg_txt.active{
		bottom: 0px;
	}

	#msg_txt input:focus{
   /* outline: none;
    */background: transparent;
            border-top: transparent !important;
            border-left: transparent !important;
			border-right: transparent !important;
            border-bottom: 4px solid !important;
}

	.msg_container{
		position: relative;
		overflow: auto;
		height: 295px;
	}

	.my_txt{

		text-align: right;

	}

	.fnd_txt{
		text-align: left;
	}

	.my_txt p{
		background-color: rgb(255, 206, 153);
		margin: 10px 5px 10px 5px;
		padding: 10px 10px 10px 10px;
		border-radius: 20px;

		width: 200px;
		display:inline-block;
		overflow: hidden;
		word-wrap: break-word;
	}

	.fnd_txt p{
		background-color: rgb(128, 191, 255);
		margin: 10px 5px 10px 5px;
		padding: 10px 10px 10px 10px;
		border-radius: 20px;
		margin-right: auto;
		width: 200px;
		display:inline-block;
		overflow: hidden;
		word-wrap: break-word;

	}

	

	
</style>
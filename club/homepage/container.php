<div class="container-wrap">

<div class="container">

		<h5><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;Notice</h5>

		<div class="notice">
			<p><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;<?php echo $_SESSION['notice']; ?>
			<i class="fa fa-quote-right" aria-hidden="true"></i></p>
			<div class="notice_tbl_wrap">
			<table  class="notice_tbl">
				<tr>
					
					<td><p>Date/Time : <?php echo $_SESSION['notice_time']; ?></p></td>
					<td class="notice_by"><p>Posted by : <?php echo $_SESSION['notice_by']; ?></p></td>
					
				</tr>
			</table>
			</div>
		</div>


	<form>
	 	<h5>Club Hub</h5>
	    <div class="comment-box">
		    <div class="c_img">
		    	<img style="height:60px; width:50px;" src="../img/profileImage.jpg">
		    </div>
		   
		  
			    <label class="c_name"><a href="#">N Zaman Redoy</a>&nbsp;says</label>
			    
			    <p class="c_text">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
			    <label></label>
		<div class="Comment">
			    <textarea placeholder="Comment here..."></textarea>
			    <a href="#" style="color: #333333;"><button>Send</button></a>
		</div>
			    <span></span>
			    <div class="commented">
			    	<a href="#">N Red</a>
			    	<p>lorem ipsum lorem ipsum lorem ipsum.</p>
		  		</div>
	    </div>
</form>

</div>


	<div class="event">
		<h5><i class="fa fa fa-list" aria-hidden="true"></i><a name="event"></a>&nbsp;Event List</h5>
		<table class="common_tbl">
			<tr class="t_head">
				<th>Name</th>
				<th>Venue</th>
				<th>Date</th>
				<th>Time</th>
				<th>Capacity</th>
				<th colspan="3" id="t_join">Join</th>
			</tr>
			<tr>
				<td>lorem ipsum lorem ipsum lorem ipsum</td>
				<td>AIUB banani campus</td>
				<td>09-Dec-2017</td>
				<td>10:00 AM</td>
				<td>100</td>
				<td>50</td>
				<td><input type="radio" name="join_1">&nbsp;Join</td>
				<td><input type="radio" name="join_1">&nbsp;Maybe</td>
			</tr>
			<tr>
				<td>lorem ipsum lorem ipsum lorem ipsum</td>
				<td>AIUB permanent campus</td>
				<td>10-Dec-2017</td>
				<td>10:00 AM</td>
				<td>150</td>
				<td>50</td>
				<td><input type="radio" name="join_2">&nbsp;Join</td>
				<td><input type="radio" name="join_2">&nbsp;Maybe</td>
			</tr>
			<tr>
				<td>lorem ipsum lorem ipsum lorem ipsum</td>
				<td>AIUB banani campus</td>
				<td>11-Dec-2017</td>
				<td>10:00 AM</td>
				<td>200</td>
				<td>50</td>
				<td><input type="radio" name="join_3">&nbsp;Join</td>
				<td><input type="radio" name="join_3">&nbsp;Maybe</td>
			</tr>
		</table>
		
	</div>

</div>

<style type="text/css">

	.notice_tbl tr .notice_by{
		padding-left: 400px;
	}

	.notice_tbl_wrap{

		padding: 1px 1px 1px 1px;
		border: 1px solid #cca300;
		background-color: rgb(255, 195, 77);

	}

	.notice_tbl tr td p{
		font-size: 13px;
	}


	.container-wrap{
		
		background-color: #f2f2f2;
		border-radius: 30px;
		border: 1px solid #bfbfbf;
		padding-bottom: 40px;
		margin: 10% 18%;

	}

	
	.notice{

		background-color: #ffe066;
		color: #1a1a1a;
		border-radius: 5px;
		border: 1px solid #cca300;
	
	}

	.notice p{
		font-size: 18px;
		padding: 10px 10px;
	}



	 .common_tbl{
		background-color: rgba(230, 230, 230,0.8);
		color: #1a1a1a;
	}

	.common_tbl td {
    border: 1px groove black;
    border-radius: 10px;
}

.common_tbl th{
	border: 2px solid #808080;
	width: 200px;
}

	.event{
		margin-top:30px;
		margin-left: 10%;
		width: 80%;
		text-align: center;

	}

	.t_head td{
		font-size: 20px;
		font-weight: bold;
		padding: 0 40px;
	}

	#t_join{
		padding: 0 70px;
	}


	
.container{
	margin: 2% 10%;
}

.c_img img{
	top:10%;
	border: 1px solid #333333;
	border-radius: 50%;
	margin: 0 1%;
	margin-top: 1%;
}

.c_name a{

	padding-left: 20px;
	font-size: 18px;
	font-weight: bold;
	text-decoration: none;
	font-family: Tw Cen MT, Lato;
	color: #262626;
	 -webkit-transition: font-size .5s; /* For Safari 3.1 to 6.0 */
    transition: font-size .5s;
}

.c_name a:hover{
	text-decoration: underline;
	font-size: 20px;
	color: black;

}

.c_text{

	padding: 0 2%;
	color: #000;
    overflow: auto;
    border-radius: 10px;
}



h5{
	margin-top: 60px;
	font-family: Tw Cen MT, Lato;
	background-color: rgb(128, 0, 128);
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	color: white;
	border-top: 2px solid rgb(128, 0, 128);
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	margin-bottom: 10px;
	
}

textarea{
	width: 90%;
	height: 60px;
	border: 0;
	-webkit-box-shadow: 0 0 0px 1000px white inset;

	margin-left: 2%;
	margin-top: 2%;
}


.fa-chevron-circle-right{
	text-decoration: none;
	position: relative;
	left: 1%;
	font-size: 2em;
	color: rgba(77, 77, 77, 0.6);
}


.commented{
	padding: 20px 20px;
}


.commented a{
	font-weight: bold;
	color: #1a1a1a;
}


.comment-box{

	
	background-color: rgba(230, 230, 230,0.8);
	color: #1a1a1a;
	border-radius: 10px;
	border: 1px solid 	rgb(128, 128, 128);

}

.comment-box span{

	display: block;
	
	height: 3px;
	background: #D9D9DA;
	margin: 5px 0px;
}

.comment{
	margin-left: 20px;
}



</style>
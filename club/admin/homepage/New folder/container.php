<script type="text/javascript">	
function postEvent() {

	var xmlhttp = new XMLHttpRequest();

    var fileToUpload = document.getElementById('fileToUpload').value;
    var venue = document.getElementById('venue').value;
    var capacity = document.getElementById('capacity').value;

    var temp = '-';
    var tempt = ':';

	var ev_d = document.getElementById('ev_d').value;
	var ev_m = document.getElementById('ev_m').value;
	var ev_y = document.getElementById('ev_y').value;

	var ev_date = ev_d.concat(temp,ev_m,temp,ev_y);

	var ev_t = document.getElementById('ev_t').value;
	var ev_tp = document.getElementById('ev_tp').value;

	var ev_time = ev_t.concat(tempt,ev_tp);



    var ev_bx = document.getElementById('event_box').value;
    var ev_head = document.getElementById('ev_head').value;

    var ev_msg = document.getElementById('ev_msg');

    var n_ev = document.getElementById('event_drop');
    var club_slct = n_ev.options[n_ev.selectedIndex].value;

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			ev_msg.innerHTML = xmlhttp.responseText ;
			
		}
	};
 	var url="event.php?event="+ev_bx+"&ev_head="+ev_head+"&fileToUpload="+fileToUpload+"&venue="+
 	venue+"&capacity="+capacity+"&ev_date="+ev_date+
 	"&ev_time="+ev_time+"&club_slct="+club_slct;
    
	xmlhttp.open("GET", url,true);
	xmlhttp.send();


}
	

</script>




<div class="event_wrap">
	<form action="upload_event.php" enctype="multipart/form-data" method="POST" name="event-form"><br><br>
		<h3>Events :</h3>
		<p id="ev_msg"><?php echo $_SESSION['ev_msg']; ?></p>
		<div class="event">
			<label>Select Image : </label>
			<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
			<input type="text" name="ev_head" id="ev_head" size="66" style="padding: 5px 0px 5px 5px;" placeholder="Write Event Header"><br><br>
			<textarea id="event_box" style="padding: 10px 0 0 10px;" rows="2" cols="50" placeholder="Write Event Detail here" size="200"></textarea>
		</div><br>

		Venue :
		<input type="text" name="venue" id="venue">
		Capacity :
		<input type="text" name="capacity" id="capacity"><br><br>

		Date :
		<select name="day" class="combine" id="ev_d"> 
			  <option>Day</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
			  <option value="13">13</option>
			  <option value="14">14</option>
			  <option value="15">15</option>
			  <option value="16">16</option>
			  <option value="17">17</option>
			  <option value="18">18</option>
			  <option value="19">19</option>
			  <option value="20">20</option>
			  <option value="21">21</option>
			  <option value="22">22</option>
			  <option value="23">23</option>
			  <option value="24">24</option>
			  <option value="25">25</option>
			  <option value="26">26</option>
			  <option value="27">27</option>
			  <option value="28">28</option>
			  <option value="29">29</option>
			  <option value="30">30</option>
			  <option value="31">31</option>
			</select>

			 <select name="month" class="combine" id="ev_m">
			  <option value="">Month</option>
			  <option value="Jan">Jan</option>
			  <option value="Feb">Feb</option>
			  <option value="Mar">Mar</option>
			  <option value="Apr">Apr</option>
			  <option value="May">May</option>
			  <option value="Jun">Jun</option>
			  <option value="Jul">July</option>
			  <option value="Aug">Aug</option>
			  <option value="sep">Sep</option>
			  <option value="Oct">Oct</option>
			  <option value="Nov">Nov</option>
			  <option value="Dec">Dec</option>
			</select>

			 <select name="year" class="combine" id="ev_y">
			  <option value="">Year</option>
			  <option value="2019">2019</option>
			  <option value="2018">2018</option>
			  <option value="2017">2017</option>
			</select><br><br>

		Time :
		<select name="time" class="combine1" id="ev_t">
			  <option value="12">12</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
		</select>
		<select name="day_night" class="combine1" id="ev_tp">
			  <option value="AM">AM</option>
			  <option value="PM">PM</option>
	    </select><br><br>

	    <?php
	   include 'conn.php'; 


        $query = "SELECT * FROM clubinfo";
		$results = mysqli_query($db, $query);

		
        echo '<select name="club" size="1" id="event_drop">';
		echo '<option value="">select club</option>';
		while($row = mysqli_fetch_assoc($results)) {
        echo '<option value="'.$row['club_ID'].'">'.$row['club_Name']. '</option>';
		//echo $row['id'];
		
		}
   echo '</select>';

?>


		<input type="submit" onclick="postEvent()" name="post_event" value="Post Event">
	</form>
</div>
<br>
		<hr width="500px">
<div>


<script type="text/javascript">	
function Notice() {

	var	user = "<?php echo $_SESSION['admin_name']; ?>";
	var xmlhttp = new XMLHttpRequest();
    var str=document.getElementById('notice_box').value;
	var e = document.getElementById('notice_drop');
    var clb = e.options[e.selectedIndex].value;
    var msg = document.getElementById('notice_msg');

	//alert(smstr);
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);

		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
		//a.style.color="#86b300";
		
		//m.innerHTML="Name field cannot be empty.";
		msg.innerHTML = xmlhttp.responseText ;
		//	alert(xmlhttp.responseText);	

		}
	};
 	var url="notice.php?notice="+str+"&club="+clb+"&user="+user;
    
	xmlhttp.open("GET", url,true);
	xmlhttp.send();


}
	

</script>

	<form  action="notice.php" method="GET" name="notice-form">
		<h3>Post Notice :</h3>
		<p id="notice_msg"></p>
		<textarea style="padding: 10px 0 0 10px;" rows="4" cols="50" name="nb" id="notice_box" placeholder="Write Notice here" size="500"></textarea><br>
<?php
	   include 'conn.php'; 


        $query = "SELECT * FROM clubinfo";
		$results = mysqli_query($db, $query);

		
        echo '<select name="club" size="1" id="notice_drop">';
		echo '<option value="">select club</option>';
		while($row = mysqli_fetch_assoc($results)) {
        echo '<option value="'.$row['club_ID'].'">'.$row['club_Name']. '</option>';
		//echo $row['id'];
		
		}
   echo '</select>';

?>

	<button type="button" onclick="Notice()">Post Notice</button> 
	</form>
	
</div>
<br>

<hr width="500px">




	<div class="event_list">
		
		<h3>Event List</h3>
		<table align = "center">
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

		</div><br>

<hr width="500px">

<br>
<div class="join_request">
	
	<h3>Join Requests :</h3>

<form action='container.php' method='GET' name='verify_form'>

<table  class="join_table" align='center'>

	<tr>
		<th>Club Name</th>
		<th>ID</th>
		<th>Name</th>
		<th>Request Date</th>
		<th>View Info.</th>
		<th>State</th>
		<th colspan='3'>Accept/Reject</th>
	</tr>

<?php
	
	$sql = "SELECT * FROM studentinfo";
	$result = mysqli_query($db, $sql);



	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {

	    	$_SESSION['user'] = $row["username"];//$sql="UPDATE studentinfo SET is_active = 'verify".$row["username"]."' WHERE username='".$row["username"]."'";
	    	
	    	echo "<tr>
	    			<td>" . $row["clubname"]."</td>".
    				"<td>" . $row["username"]."</td>".
	    			"<td>" . $row["name"]."</td>".
	    			"<td>" . $row["dateTime"]."</td>".
	    			"<td>".$row["is_active"]."</td>".
	    			"<td>View</td>".
	    			"<td>
                <a style='color:white;' href='approve.php?username=". $row["username"]."&value=Y'><i class='fa fa-check' aria-hidden='true'></i></a>
                <a style='color:white;' href='approve.php?username=". $row["username"]."&value=N'><i class='fa fa-times' aria-hidden='true'></i></a>
                <a style='color:white;' href='approve.php?username=". $row["username"]."&value=W'><i class='fa fa-street-view' aria-hidden='true'></i></a>
				
			</td>
			</tr>";


			//foreach($row["username"] as $k=> $v)
	         

	        /*echo "Id: " . $row["id"]. " - Club : " . $row["clubname"]." - Name : "  . $row["name"].
	         	" - Username : "  . $row["username"]. 
	         	" - Department : "  . $row["dept"]. 
	         	" - Semester : "  . $row["semester"].
	         	" - Gender : "  . $row["gender"].
	         	" - DOB : "  . $row["dob"].
	         	" - Admission Year : "  . $row["admissionyear"].
	         	" - Phone : "  . $row["phone"].
	         	" - Email : "  . $row["email"].
	         	" - Active Status : "  . $row["is_active"].
	         	" - Registration Date : "  . $row["dateTime"].

	        "<br>";*/
	    }
	} else {
	    echo "0 results";
	}

	
	mysqli_close($db);
?>

	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><?php// echo $rad_nm; ?></td>
		<td>
	</tr>
	
	</table>
</form>



</div>
	

	<style type="text/css">
		
		table tr th{
			padding: 0px 40px 0px 40px;
		}

		th{
			border: 1px solid black;
		}

		.join_request{

			color: #fff;
			border: 2px solid #000;
			margin: 0 210px 0 210px;
			padding-bottom: 20px;
			background-color: rgb(64, 64, 64);
		}



	</style>

<div class="event_wrap">
	<form action="#" enctype="multipart/form-data" method="POST" name="event-form"><br><br>
		<h3>Events :</h3>	
		<div class="event">
			<label>Select Image : </label>
			<input type="file" name="fileToUpload" id="fileToUpload"><br>
			<textarea rows="2" cols="50" placeholder="Write Event info here" size="200"></textarea>
		</div><br>

		Venue :
		<input type="text" name="venue">
		Capacity :
		<input type="text" name="capacity"><br><br>

		Date :
		<select name="day" class="combine">
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

			 <select name="month" class="combine">
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

			 <select name="year" class="combine">
			  <option value="">Year</option>
			  <option value="2019">2019</option>
			  <option value="2018">2018</option>
			  <option value="2017">2017</option>
			</select><br><br>

		Time :
		<select name="time" class="combine1">
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
		<select name="day_night" class="combine1">
			  <option value="AM">AM</option>
			  <option value="PM">PM</option>
	    </select><br><br>

		<input type="submit" name="post_event" value="Post Event">
	</form>
</div>
<br>
		<hr width="500px">
<div>

<script type="text/javascript">	
function Notice() {
     var str=document.getElementById('notice_box').value;
	  xmlhttp = new XMLHttpRequest();

	//alert(smstr);
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
		//a.style.color="#86b300";
		
		//m.innerHTML="Name field cannot be empty.";
		//a.innerHTML = xmlhttp.responseText ;

		alert(str);	
		}
	};
 	var url="notice.php?username="+str;
    
	xmlhttp.open("GET", url,true);
	xmlhttp.send();


}
	

</script>

	<form  action="" method="GET" name="notice-form">
		<h3>Post Notice :</h3>
		<textarea rows="4" cols="50" id="notice_box" placeholder="Write Notice here" size="500"></textarea><br>
	   <?php
	   include 'conn.php'; 


        $query = "SELECT * FROM clubinfo";
		$results = mysqli_query($db, $query);

		
        echo '<select name="club" size="1" id="dropdown">';
		echo '<option value="0">select club</option>';
		while($row = mysqli_fetch_assoc($results)) {
        echo '<option value="' . $row['id'] . '">' . $row['clubname'] . '</option>';
		//echo $row['id'];
		
		
	

	}
   echo '</select>';

	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   ?>

	<button type="button" onclick="Notice()">Click Me!</button> 
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

<form action='homepage/verify.php' method='POST' name='verify_form'>

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
	
/*


$result = mysql_query("SELECT id, link FROM items LIMIT 3");

while($row = mysql_fetch_assoc($result))

{

   $url=($row['link']);

   $res2 = mysql_escape_string(get_final_url($url));

   $result2 = mysql_query("UPDATE items SET link = '{$res2}' WHERE id = {$row['id']}")

   or die(mysql_error());
}
	*/

	$sql = "SELECT * FROM studentinfo";
	$result = mysqli_query($db, $sql);



	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {

	    	$username = $row["username"];
	    	
	    	echo "<tr>
	    			<td>" . $row["clubname"]."</td>".
    				"<td>" . $row["username"]."</td>".
	    			"<td>" . $row["name"]."</td>".
	    			"<td>" . $row["dateTime"]."</td>".
	    			"<td>View</td>".
	    			"<td>".$row["is_active"]."</td>".
	    			"<td>
	    		
				<input type= 'checkbox' value='Y' name= 'decision' >Accept
				<input type= 'checkbox' value='0' name= 'decision' >Reject
				<input type= 'checkbox' value='N' name= 'decision' >Waiting
				
			</td>
			</tr>";
	         

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
		<td></td>
		<td>
	<input type='submit' value='Save' name="save_value"></td>
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
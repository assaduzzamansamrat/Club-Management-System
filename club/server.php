<?php

session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";


// connect to database
//$db = mysqli_connect('localhost', 'root', '', 'club');
include 'dbconnect.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form

	$clubname = mysqli_real_escape_string($db,$_POST['clubname']);
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$dept = mysqli_real_escape_string($db,$_POST['dept']);
	$semester = mysqli_real_escape_string($db,$_POST['semester']);
	$gender = mysqli_real_escape_string($db,$_POST['gender']);

	$dob = mysqli_real_escape_string($db,$_POST['day']."/".$_POST['month']."/".$_POST['year']);

	$admissionyear = mysqli_real_escape_string($db,$_POST['admissionyear']);

	$phone = mysqli_real_escape_string($db,$_POST['phone']);
	//$avatar = mysqli_real_escape_string($db,$_POST['avatar']);


	
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($clubname)) { array_push($errors, "Club name is required"); }
	if (empty($name)) { array_push($errors, "Name is required"); }

	if (str_word_count($name)< 2 or !preg_match("/^[a-zA-Z ]*$/",$name))
	{
		array_push($errors, "Name should contain at least two words and should have upper case and or lower case letters.");
	}

	/*if(strlen($password)<6 or !preg_match('/^[a-zA-Z0-9]+$/',$password))
	{
		array_push($errors, "Password must be greater than 6 character and can contain letters and numbers.");
	}*/

	
	if (empty($username)) { array_push($errors, "University ID is required"); }
	

	$format = '/^[0-9]{2}-[0-9]{5}-[0-9]{1}|[0-9]{4}-[0-9]{3}-[0-9]{1}$/';

	if (!preg_match($format, $username)) {
	    array_push($errors, "<font color='#a94442'>Invalid ID format. ID looks like XX-XXXXX-X or XXXX-XXX-X.</font>");
	}


	if (empty($dept)) { array_push($errors, "Department is required"); }
	if (empty($dob)) { array_push($errors, "DOB is required"); }
	if (empty($admissionyear)) { array_push($errors, "Admission year is required"); }
	if (empty($phone)) { array_push($errors, "Phone number is required"); }
	else if(strlen($phone)!=11) { array_push($errors, "Phone number must contain 11 digits.");}
	if (empty($email)) { array_push($errors, "Email is required"); }
	else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) { array_push($errors, "Enter a valid Email."); }
	
	if (empty($password_1)) { array_push($errors, "Password is required"); }
	if(strlen($password_1)<6 or !preg_match('/^[a-zA-Z0-9]+$/',$password_1))
		{
			array_push($errors, "Password must be greater than 6 character and can contain letters and numbers.");
		}

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	//user existance check
	$user_qry = "SELECT * FROM studentinfo WHERE username='$username'";
	$chck_user = mysqli_query($db, $user_qry);


	if (mysqli_num_rows($chck_user) == 1) {

		array_push($errors, "User already exists.");	
	}

	//Email existance check
	$email_qry = "SELECT * FROM studentinfo WHERE email='$email'";
	$chck_email = mysqli_query($db, $email_qry);


	if (mysqli_num_rows($chck_email) == 1){

		array_push($errors, "This email has been used.");	
	}

	//Phone existance check
	$phone_qry = "SELECT * FROM studentinfo WHERE phone='$phone'";
	$chck_phone = mysqli_query($db, $phone_qry);


	if (mysqli_num_rows($chck_phone) == 1){

		array_push($errors, "Phone number is already used.");	
	}



include 'registration/upload.php';

	// register user if there are no errors in the form
	if (count($errors) == 0) {


		$clubID = 'Undefined';

	if( strcmp($clubname, "APAC")==0)
	{	$clubID = '1';
	}if(strcmp($clubname, "Shomoy Club")==0){
		$clubID = '2';
	}if(strcmp($clubname, "Computer Club")==0){
		$clubID = '3';
	}if(strcmp($clubname, "Film Club")==0){
		$clubID = '4';
	}if(strcmp($clubname, "Drama Club")==0){
		$clubID = '5';
	}if(strcmp($clubname, "Photography Club")==0){
		$clubID = '6';
	}



		//$password = md5($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO studentinfo (clubname, name, username, dept, semester, gender, dob, admissionyear, phone, email, password, avatar, dateTime, clubID)
								VALUES ('$clubname','$name','$username','$dept','$semester'
										,'$gender','$dob','$admissionyear','$phone','$email','$password_1','$target_file', now(),$clubID)";
		
		$query_2 = "INSERT INTO club_relation (club_ID, club_Name, user_ID)
		VALUES ('$clubID','$clubname','$username')";

		$reslt2 = mysqli_query($db, $query_2);


		$reslt = mysqli_query($db, $query);

/*		while($row = mysqli_fetch_assoc($reslt)) {

		$_SESSION['avatar'] = $row['avatar'];

	}*/

		$_SESSION['avatar'] = $target_file;
		$_SESSION['username'] = $username;
		$_SESSION['name'] = $name;
		//$_SESSION['success'] = "Please login now";
	
		header('location: thank-you.php');
	

	}


}


// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "<font color='#a94442'>Username is required</font>");
	}


	$format = '/^[0-9]{2}-[0-9]{5}-[0-9]{1}|[0-9]{4}-[0-9]{3}-[0-9]{1}$/';

	if (!preg_match($format, $username)) {
	    array_push($errors, "<font color='#a94442'>Invalid ID format. ID looks like XX-XXXXX-X or XXXX-XXX-X.</font>");
	}


	if (empty($password)) {
		array_push($errors, "<font color='#a94442'>Password is required</font>");
	}

	if (count($errors) == 0) {


		//Admin check

		$admin_format = '/^[0-9]{4}-[0-9]{3}-[0-9]{1}$/';

		if (preg_match($admin_format, $username)) {

			$ad_query = "SELECT * FROM admininfo WHERE username='$username' AND password='$password'";
		$ad_results = mysqli_query($db, $ad_query);

		

		if (mysqli_num_rows($ad_results) == 1) {

		while($row = mysqli_fetch_assoc($ad_results)) {

			$_SESSION['admin_name'] = $row['name'];
			$_SESSION['admin_avatar'] = $row['avatar'];
			
			}
			
			$_SESSION['success'] = "Welcome to Admin Portal.";
			$_SESSION['username'] = $username;
			header("location: admin/index.php");
		}

	    
	}


		//$password = md5($password);
		$query = "SELECT * FROM studentinfo WHERE username='$username' AND password='$password' AND is_active='Y'";
		$results = mysqli_query($db, $query);

		

		if (mysqli_num_rows($results) == 1) {

			while($row = mysqli_fetch_assoc($results)) {

			$_SESSION['full_name'] = $row['name'];
			$_SESSION['avatar'] = $row['avatar'];
			$_SESSION['clubname'] = $row['clubname'];
			//$_SESSION['clubid'] = $row['clubID'];
			$clubbID = $row['clubID'];
			/*$_SESSION['dept'] = $row['dept'];
			$_SESSION['semester'] = $row['semester'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['dob'] = $row['dob'];
			$_SESSION['admissionyear'] = $row['admissionyear'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['email'] = $row['email'];
			*/


			}
			$notice_qry = "SELECT * FROM notice_table WHERE club_ID ='$clubbID'";

		$notice_rslt = mysqli_query($db, $notice_qry);

		if (mysqli_num_rows($notice_rslt) > 0) {

			while($row = mysqli_fetch_assoc($notice_rslt)) {

			$_SESSION['notice'] = $row['notice'];
			$_SESSION['notice_time'] = $row['time_date'];
			$_SESSION['notice_by'] = $row['posted_by'];
			$_SESSION['clubid'] = $row['club_ID'];
			
			}

		}
		else{

			$_SESSION['notice'] = "No Notice Posted.";
			$_SESSION['notice_time'] = "---";
			$_SESSION['notice_by'] = "---";
			
		}


		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in.";
		header("location: homepage/homepage.php?id=".$_SESSION['username']);
	

			
		}else {
			array_push($errors, "<font size='2px' font color='#a94442'>Wrong username/password combination. Or, your account is inactive.</font>");
		}
	}


//-------------Select Name-----------

//$sql_query = "SELECT * FROM studentinfo WHERE username='$username'";

	//$rslt = mysqli_query($db, $query);

	
}


?>
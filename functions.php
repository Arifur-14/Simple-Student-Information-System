<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'multi_login');

	// variable declaration
	$username = "";
	$email    = "";
	$password="";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}


	// REGISTER USER
	function register(){
		// call these variables with the global keyword to make them available in function
		global $db, $errors, $username, $email;

		// receive all input values from the form. Call the e() function
	    // defined below to escape form values
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);



		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: home.php');
			}else{
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: index.php');				
			}
		}
	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}
	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'Admin' ) {
			return true;
		}else{
			return false;
		}
	}
	// log user out if logout button clicked
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: login.php");
	}
	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	// LOGIN USER
	function login(){
		global $db, $email, $errors;

		// grap form values
		$email = e($_POST['email']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'Admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are successfully login";
					header('location:home.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are successfully loggin";

					header('location: index.php');
				}
			}else {
				array_push($errors, "username or password not match");
			}
		}
	}
	$db = mysqli_connect('localhost', 'root', '', 'student_database');
	// initialize variables
	$studentname = "";
	$fathername="";
	$mothername="";
	$studentid="";
	$birthdate="";
	$gender="";
	$department="";
	$batch="";
	$semester="";
	$religion="";
	$email="";
	$contact="";
	$address = "";
	$id = 0;
	$update = false;
	if (isset($_POST['save'])) {
		$studentname = 	$_POST['studentname'];
		$fathername = 	$_POST['fathername'];
		$mothername = 	$_POST['mothername'];
		$birthdate =	$_POST['birthdate'];
		$gender =		$_POST['gender'];
		$studentid = 	$_POST['studentid'];
		$department = 	$_POST['department'];
		$batch 		= 	$_POST['batch'];
		$semester = 	$_POST['semester'];
		$religion = 	$_POST['religion'];
		$email = 		$_POST['email'];
		$contact = 		$_POST['contact'];
		$address = 		$_POST['address'];


		mysqli_query($db, "INSERT INTO student (studentname, fathername,mothername,birthdate,gender,studentid,department,batch,semester,religion,email,contact,address) VALUES ('$studentname','$fathername','$mothername','$birthdate','$gender',	'$studentid','$department','$batch','$semester','$religion','$email','$contact','$address')"); 
		$_SESSION['message'] = "Address Saved Successfully"; 
		header('location: home.php');
	}
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$studentname = $_POST['studentname'];
		$fathername = $_POST['fathername'];
		$mothername = $_POST['mothername'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['gender'];
		$studentid = $_POST['studentid'];
		$department = $_POST['department'];
		$batch = $_POST['batch'];
		$semester = $_POST['semester'];
		$religion = $_POST['religion'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];

	mysqli_query($db, "UPDATE student SET 	studentname='$studentname', 
											fathername='$fathername', 
											mothername='$mothername', 	
											birthdate='$birthdate', 
											gender='$gender', 
											studentid='$studentid', 
											department='$department', 
											batch='$batch', 
											semester='$semester', 
											religion='$religion', 
											email='$email',
											contact='$contact' , 
											address='$address' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location:home.php');
	}
	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM student WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: home.php');
	}	

?>
<?php 
session_start();
$voter_username='';
$voter_email='';
$errors= array();
$db= mysqli_connect('localhost', 'root', '', 'voting');
if(isset($_POST['voter_register'])){
	$voter_username = ($_POST['voter_username']);
	$voter_email = ($_POST['voter_email']);
	$voter_password_1 = ($_POST['voter_password_1']);
	$voter_password_2 = ($_POST['voter_password_2']);
	// ensuring the forms are properly filled
	if (empty($voter_username)) {
		array_push($errors, "Username is required");
		# code...
	}
	if (empty($voter_email)) {
		array_push($errors, "email is required"); 
		# code...
	}
	if (empty($voter_password_1)) {
		array_push($errors, "Password is required");
		# code...
	}
	if ($voter_password_1!=$voter_password_2) {
		array_push($errors, "Passwords do not match");
		# code...
	}
	//if form fields are filled , saving user now to the database
	if (count($errors) == 0) {
		$voter_password= md5($voter_password_1);//encrypting password before storing in database for security
		$sql="INSERT INTO voters (voter_username, voter_email, voter_password)
			 VALUES ('$voter_username', '$voter_email', '$voter_password')";
			 mysqli_query($db, $sql);
			 $_SESSION['voter_username']=$voter_username;
			 $_SESSION['success']="You are now logged in";
			 header('location: homepage.php');//redirect to homepage
	}
}
//login user from login page
if (isset($_POST['voter_login'])) {
	$voter_username = ($_POST['voter_username']);
	$voter_password = ($_POST['voter_password']);
	// ensuring the forms are properly filled
	if (empty($voter_username)) {
		array_push($errors, "Username is required");
		# code...
	}
	
	if (empty($voter_password)) {
		array_push($errors, "Password is required");
	}
		if (count($errors) == 0) {
		$voter_password= md5($voter_password);//encrypting password before storing in database for security
		$query= "SELECT*FROM voters WHERE voter_username='$voter_username' AND voter_password='$voter_password'";
		$result=mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1) {
			//log in user
			$_SESSION['voter_username']=$voter_username;
			$_SESSION['voter_email']=$voter_email;
			$_SESSION['success']="You are now logged in";
			header('location: homepage.php');//redirect to homepage
		}
		else{
			array_push($errors, "wrong usernsame/password");
			header('location: 2.php');
		}
		
	}
}

//logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['voter_username']);
	header('location:2.php');
	# code...
}
 ?>

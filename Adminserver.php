<?php 
session_start();
$admin_username='';
$admin_email='';
$errors= array();
$db= mysqli_connect('localhost', 'root', '', 'voting');
if(isset($_POST['admin_register'])){
	$admin_username = ($_POST['admin_username']);
	$admin_email = ($_POST['admin_email']);
	$admin_password_1 = ($_POST['admin_password_1']);
	$admin_password_2 = ($_POST['admin_password_2']);
	// ensuring the forms are properly filled
	if (empty($admin_username)) {
		array_push($errors, "Username is required");
		# code...
	}
	if (empty($admin_email)) {
		array_push($errors, "email is required"); 
		# code...
	}
	if (empty($admin_password_1)) {
		array_push($errors, "Password is required");
		# code...
	}
	if ($admin_password_1!=$admin_password_2) {
		array_push($errors, "Passwords do not match");
		# code...
	}
	//if form fields are filled , saving user now to the database
	if (count($errors) == 0) {
		$admin_password= md5($admin_password_1);//encrypting password before storing in database for security
		$sql="INSERT INTO admin (admin_username, admin_email, admin_password)
			 VALUES ('$admin_username', '$admin_email', '$admin_password')";
			 mysqli_query($db, $sql);
			 $_SESSION['admin_username']=$admin_username;
			 $_SESSION['success']="You are now logged in";
			 header('location: Admin.php');//redirect to homepage
	}
}
//login user from login page
if (isset($_POST['admin_login'])) {
	$admin_username = ($_POST['admin_username']);
	$admin_password = ($_POST['admin_password']);
	// ensuring the forms are properly filled
	if (empty($admin_username)) {
		array_push($errors, "Username is required");
		# code...
	}
	
	if (empty($admin_password)) {
		array_push($errors, "Password is required");
	}
		if (count($errors) == 0) {
		$admin_password= md5($admin_password);//encrypting password before storing in database for security
		$query= "SELECT*FROM admin WHERE admin_username='$admin_username' AND admin_password='$admin_password'";
		$result=mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1) {
			//log in user
			$_SESSION['admin_username']=$admin_username;
			$_SESSION['success']="You are now logged in";
			header('location: Admin.php');//redirect to homepage
		}
		else{
			array_push($errors, "wrong usernsame/password");
			header('location: Adminlogin.php');
		}
		
	}
}

//logout
if (isset($_GET['Adminlogout'])) {
	session_destroy();
	unset($_SESSION['Adminusername']);
	header('location:Adminlogin.php');
	# code...
}
 ?>

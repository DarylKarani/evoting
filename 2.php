<?php include('server.php'); ?>
<!DOCTYPE html>
	<html>
	<head>
		<style type="text/css">
			body {
  text-align: center;
  background-image: url(vote.jpg) ;
  background-size: cover;
  background-repeat: no-repeat;
  margin: 0;
  font-family: calibri;
  color: grey;
}
		</style>
		<title>Animated Login Form</title>
		<link rel="stylesheet" type="text/css" href="login1.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<div class="login-content">
				<form method="post" action="2.php">
					<?php include('errors.php'); ?>
					<img src="avatar.svg">
					<h2 class="title">Proceed to fill the fields provided<br><span style="font-size: 22px"></span></h2>
	           		<div class="input-div one">
	           		   <div class="i">
	           		   		<i class="fas fa-user"></i>
	           		   </div>
	           		   <div class="div">
	           		   		<h5>Username</h5>
	           		   		<input type="text" name="voter_username" class="input">
	           		   </div>
	           		</div>
	           		<div class="input-div pass">
	           		   <div class="i"> 
	           		    	<i class="fas fa-lock"></i>
	           		   </div>
	           		   <div class="div">
	           		    	<h5>Password</h5>
	           		    			<input type="password" name="voter_password" class="input">

	            	   </div>
	            	</div>
	            	Don't have an account?<br>
	            	<a href="1.php"> Signup</a><br>
	            	<a href="Adminlogin.php">Log in as Admin</a><br><br>
	            			<a href="index.php"><button type="submit" name="voter_login" class="btn">Login</button></a> 

	            </form>
	        </div>
	    </div>
	    <script type="text/javascript" src="login.js"></script>
	</body>
	</html>


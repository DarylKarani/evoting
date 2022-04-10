<?php include('Adminserver.php'); ?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Animated Login Form</title>
		<link rel="stylesheet" type="text/css" href="login1.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
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
.topnav {
  overflow: hidden;
  background-color: #43464B;
}

.topnav a {
  float:left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14;
}

.topnav a:hover {
  background-color:;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style><p>
	<div class="topnav">
  <a class="Home" href="homepage.php">Home</a>
  <a href="sign up.html">Sign-up</a>
  <a href="Logout.html">sign-out</a>
</div> <br>
</p>
		<div class="container">
			</div>
			<div class="login-content">
				<form method="post" action="Adminlogin.php">
					<?php include('errors.php'); ?>
					<img src="avatar.svg">
					<h2 class="title">Welcome<br><span style="font-size: 22px"> Log in as Voter Administrator</span></h2>
	           		<div class="input-div one">
	           		   <div class="i">
	           		   		<i class="fas fa-user"></i>
	           		   </div>
	           		   <div class="div">
	           		   		<h5>Username</h5>
	           		   		<input type="text" name="admin_username" class="input">
	           		   </div>
	           		</div>
	           		<div class="input-div pass">
	           		   <div class="i"> 
	           		    	<i class="fas fa-lock"></i>
	           		   </div>
	           		   <div class="div">
	           		    	<h5>Password</h5>
	           		    			<input type="password" name="admin_password" class="input">

	            	   </div>
	            	</div>
	            	<a href="2.php">Log in as user</a><br>

		<button type="submit" name="admin_login" class="btn">Login</button> 

	            </form>
	        </div>
	    </div>
	    <script type="text/javascript" src="login.js"></script>
	    <a href="Adminlogout.php" style="color: ; text-decoration: none; padding: 0px;">Logout</a>

	</body>
	</html>


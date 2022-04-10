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
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			</div>
			<div class="login-content">
				<form method="post" action="1.php">
				<?php include('errors.php'); ?>
					<h2 class="title">Welcome<br><span style="font-size: 22px"> Create your online voting account</span></h2>
	           		<div class="input-div one">
	           		   <div class="i">
	           		   		<i class="fas fa-user"></i>
	           		   </div>
	           		   <div class="div">
	           		   		<h5>Username</h5>
		<input type="text" name="voter_username" class="input" value="<?php echo $voter_username; ?>">
	           		   </div>
	           		</div>
	           		<div class="input-div one">
	           		   <div class="i">
	           		   		<i class="fas fa-user"></i>
	           		   </div>
	           		   <div class="div">
	           		   		<h5>E-mail</h5>
		<input type="email" name="voter_email" class="input" value="<?php echo $voter_email; ?>" >
	           		   </div>
	           		</div>
	           		<div class="input-div pass">
	           		   <div class="i"> 
	           		    	<i class="fas fa-lock"></i>
	           		   </div>
	           		   <div class="div">
	           		    	<h5>Password</h5>
		<input type="password" name="voter_password_1" class="input">
	            	   </div>
	            	</div>
	            	<div class="input-div pass">
	           		   <div class="i"> 
	           		    	<i class="fas fa-lock"></i>
	           		   </div>
	           		   <div class="div">
	           		    	<h5>Confirm Password</h5>
		<input type="password" name="voter_password_2" class="input">
	            	   </div>
	            	</div>
	            	Already a member?<br>
	            	<a href="2.php"> Log in</a>
	            	<br>
	            	<a href="Adminlogin.php">Log in as Admin</a><br><br>
		<button type="submit" name="voter_register" class="btn">Register</button> 
	            </form>
	        </div>
	    </div>
	    <script type="text/javascript" src="login.js"></script>
	</body>
	</html>


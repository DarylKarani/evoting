<?php include('Adminserver.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> System Admin </title>

	<style type="text/css">
	body{
		background-image: url('.jpg');
		background-size: 100% 100%;
	}
		table{
		width: 100%;
	}
		table,td {
			border:0px solid black;
			border-collapse: collapse;
			margin:0px;
			margin-bottom:0px;
			padding: 0px;
		}
	</style>
</head>
<body style="background-color: white;">

	<h2> ADMIN REGISTER</h2>
</div>
<form method="post" action="Adminregister.php">
<?php include('errors.php'); ?>
	<div class="input-group">
		<input type="text" name="admin_username"  placeholder="Enter username">
	</div>
	<div class="input-group">
		<input type="email" name="admin_email" placeholder="Enter email adress">
	</div>
	<div class="input-group">
		<input type="password" name="admin_password_1" placeholder="Enter password">
	</div>
	<div class="input-group">
		<input type="password" name="admin_password_2" placeholder="Confirm password">
	</div>
	<div class="input-group">
		<button type="submit" name="admin_register" class="btn">AdminRegister</button> 
	</div>




</form>
		


					
		

			</div><!-- end of #tab2 -->
			





	</section>
       </div>
</div>
<a href="Adminlogout.php" style="color:; text-decoration: none; padding: 0px;">Logout</a>

</body>

</html>
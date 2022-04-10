<?php include('Adminserver.php'); ?>
<?php 
if (!isset($_SESSION['admin_username'])) {
  header('location:Adminlogin.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <style>
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
</style>
	<title></title>
</head>
<body>
  <div class="topnav">
  <a class="Home" href="homepage.php">Home</a>
  <a href="2.php">Sign-in</a>
  <a href="Logout.php">log-out</a>
</div>
<a href="create.php">register</a><br><br>

<a href="Adminlogout.php" style="color:; text-decoration: none; padding: 0px;">Logout</a>

</body>
</html>
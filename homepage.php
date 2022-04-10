<?php include('server.php'); ?>
<?php 
if (!isset($_SESSION['voter_username'])) {
  header('location:1.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>

<div class="topnav">
  <a href="index2.php">cast vote</a>
  <a href="Logout.php">log-out</a>
</div>
<p>
 <h2>Welcome to your online voting system</h2><br>
Account created successfully.<br> <br>
Navigate to the voting page in order to cast your votes.
</p>

</body>
</html>
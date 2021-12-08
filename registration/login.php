<?php include('server.php'); include('../header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>AirTra: Search | Travel | Explore</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>

	<div id="frm">
 	<form method="post" action="login.php"> 
 		<!-- display validation here -->
 		<?php include('errors.php'); ?>

 	<p>
 		<label>Email id:&nbsp;&nbsp;</label>
 		<input type="Email" id="user" name="username" placeholder="airtra@gmail.com"/>
 	</p>
 	<p>
 		<label>Password:</label>
 		<input type="password" id="pass" name="password" placeholder="password"/>
 	</p>
 	<p>
 		<button type="submit" name="login" class="btn">Login <a href="register.php"> </a> </button> <br><br><a href="" >Forgot Password?</a>
 	</p>
 	<p>Not a member yet? <a href="register.php">Register</a> </p>

 	</form>
 </div>
  <style>
 body{
    background-image: url("../images/airtrajoin.jpg");
    background-size: 1400px 900px;
    background-repeat: no-repeat;
    }
</style>
<!-- <div id="frm">
 	<form action="process.php" method="POST"> 
 	<p>
 		<label>Username:</label>
 		<input type="text" id="user" name="user" />
 	</p>
 	<p>
 		<label>Password:</label>
 		<input type="password" id="pass" name="pass" />
 	</p>
 	<p>
 		<input type="submit" id="btn" value="Login" /> <a href="user.php"></a>
 	</p>
 	<p>Not a member yet? <a href="../registration/register.php">Register</a> </p>

 	</form>
 </div> -->

</body>
</html>

<?php echo file_get_contents('../copyright.php')?>

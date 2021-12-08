<?php
include('../registration/userheader.php');
 $username = "";
 $password = "";
 $errors = array();

 //connect to database
 $db = mysqli_connect('localhost', 'root','','airtra');

 //if the register button is clciked
 if (isset($_POST['login'])) {
  $username = addslashes($_POST['username']);
  $password = addslashes($_POST['password']);

//ensure that the form fields are filled properly
  if(empty($username)) {
    array_push($errors, "Email is required");
  }
  if(empty($password)) {
    array_push($errors, "Password is required");
  }
  //if there are no error, save user to database.

$query = "SELECT *FROM ecash WHERE userid= '$username' AND password='$password' ";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
  $diduct = $row['balance'];
  echo ("$diduct");
}

?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form>
	
		<link rel="stylesheet" type="text/css" href="../registration/loginstyle.css">
</head>
<body>

	<div id="frm">
 	<form method="post" action="ecashaccount.php"> 
 		<!-- display validation here -->
 		<?php include('../registration/errors.php'); ?>

 	<p>
 		<label>User ID :&nbsp;&nbsp;</label>
 		<input type="text" id="user" name="username" placeholder="Esewa User ID"/>
 	</p>
 	<p>
 		<label>Password:</label>
 		<input type="password" id="pass" name="password" placeholder="password"/>
 	</p>
 	<p>
 		<button type="submit" name="login" class="btn">Login <a href="register.php"> </a> </button> <br><br><a href="" >Forgot Password?</a>
 	</p>


 	</form>
 </div>
  <style>
 body{
    background-image: url("../images/esewaa.jpg");
    background-size: 1400px 700px;
    background-repeat: no-repeat;
    }
</style>
</form>
</body>
</html>
<?php include('../copyright.php'); ?>
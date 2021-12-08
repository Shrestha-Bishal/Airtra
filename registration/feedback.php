<?php  include('userheader.php');
$feedback="";
session_start();
$username=$_SESSION['username'];
 $db = mysqli_connect('localhost', 'root','','airtra');
if (isset($_POST['submit'])) {
    $feedback = addslashes($_POST['feedback']);
    $sql = "INSERT INTO feedback (email, feedback) VALUES ('$username', '$feedback')";
 		mysqli_query($db, $sql);
 		echo "Your Feedback has been Submitted.";
 		echo  nl2br("\n");
 		echo "The essence of all beautiful art is gratitude. –Friedrich Nietzche";
 		

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AirTra: Search | Travel | Explore</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="frm">
 	<form method="post" action="feedback.php"> 

	<p>
 		<label>Feedback:</label><br>
 		<input type="text" id="pass" name="feedback" autocomplete="off" style="font-size: 10pt; height: 70px; width:400px; " size="55" height="100" width="600" placeholder="Your valuable feedback to better improve our AIRTRA community"/>
 	</p>
 	<p>
 		<button type="submit" name="submit" class="btn">Submit <a href="feedback.php"> </a> </button> 
 	</p>

 	</form>
 </div>
  <style>
 body{
    background-image: url("../images/feedback.jpg");
    background-size: 1400px 700px;
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

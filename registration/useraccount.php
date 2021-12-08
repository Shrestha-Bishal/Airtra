<?php include('userheader.php'); 
$errors=array();
session_start();
$username=$_SESSION['username'];?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<div id="frm">
 	<form method="post" action="useraccount.php"> 
 		<!-- display validation here -->
 		<?php include('errors.php'); ?>

 	<p>
 		<label>Please enter your email id and password to view your details</label> <br><br>
 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	<!--	<label>Email id:&nbsp;&nbsp;</label>
 		<input type="Email" id="user" name="username" placeholder="airtra@gmail.com"/>
-->
 		<label>Password:</label>
 		<input type="password" id="pass" name="password" placeholder="password"/>

 		<button type="submit" name="login" class="btn">View Account</button> 
 	</p>
 	</form>
 </div>
</body>
</html>
<?php 
 $username = "";
  $password = "";
$username=$_SESSION['username'];
$db = mysqli_connect('localhost', 'root','','airtra');
 if (isset($_POST['login'])) {
 	//$username = addslashes($_POST['username']);
 	$password = addslashes($_POST['password']);
       //ensure that the form fields are filled properly
 	if(empty($username)) {
 		array_push($errors, "Email is required");
 	}
 	if(empty($password)) {
 		array_push($errors, "Password is required");
 	}
 	if (count($errors) == 0) {
        $password = md5($password);
 		$query = "SELECT * FROM members WHERE email='$username' AND password='$password'";
 		$result = mysqli_query($db,$query);
 		if (mysqli_num_rows($result) ==1) {
	$link = mysqli_connect('localhost', 'root', '', 'airtra');
    $errors = array();
   // if (count($errors) ==0) {
    	$query = "SELECT * FROM user_info WHERE email='$username' ";
        $result=mysqli_query($link,$query);
 echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
        echo "User Information:";echo  nl2br("\n"); echo  nl2br("\n");

        if(mysqli_num_rows($result)>0){

        	while(($row = mysqli_fetch_row($result))!=null)
	{
		$onwardFlightStatus = $row[0];
		if($onwardFlightStatus != 0)
		{
			echo("<tr><td id='InstanceId' style=\"display: none;\"></td><td>
		Full Name: ". $row[1]. "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Gender: " .$row[2]. "</td><td>&nbsp;&nbsp;&nbsp&nbsp;
		Mobile Number: " .$row[3]. "</td><td>&nbsp;&nbsp;
		Email: " .$row[4]. "</td><td>&nbsp;&nbsp;&nbsp; 
		Address: ".$row[5]."</td><td>&nbsp;&nbsp;&nbsp;   
		State: ".$row[6]."</td><td>&nbsp;&nbsp;&nbsp; 
		Country: ".$row[7]."</td><td>&nbsp;&nbsp;&nbsp;
		");

		echo  nl2br("\n"); echo  nl2br("\n");

		//search flight history via flight id
      //include ('../airport/searchflightviaid.php'); 



		}

	}          echo("</tbody></table>");

        } 

                 else {  
echo "Wrong Credentials";


                   }
          
 		}
 	}}


?>
<?php include('../copyright.php'); 
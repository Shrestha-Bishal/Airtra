<?php
 session_start();
 $username = "";
 $gender = "";
 $phnumber = "";
  $email = "";
 $staddress = "";
 $state = "";
 $country = "";
 $password_1 = "";
 $password_2 = "";
 $errors = array();

 //connect to database
 $db = mysqli_connect('localhost', 'root','','airtra');

 //if the register button is clciked
 if (isset($_POST['register'])) {
    $username = addslashes($_POST['username']);
    $gender = addslashes($_POST['gender']); 
    $phnumber = addslashes($_POST['phnumber']); 
 	$email = addslashes($_POST['email']);
    $staddress = addslashes($_POST['staddress']); 
    $state = addslashes($_POST['state']); 
    $country = addslashes($_POST['country']); 
 	$password_1 = addslashes($_POST['password_1']);
 	$password_2 = addslashes($_POST['password_2']);   

 	//ensure that form fields are filled properly
 	if(empty($username)) {
 		array_push($errors, "Full Name is required");
 	}
 	if(empty($gender)) {
 		array_push($errors, "Gender is required");
 	}
 	if(empty($phnumber)) {
 		array_push($errors, "Phone Number is required");
 	}

 	if(empty($staddress)) {
 		array_push($errors, "State Address is required");
 	}
 	if(empty($state)) {
 		array_push($errors, "State is required");
 	}
 	if(empty($country)) {
 		array_push($errors, "Country is required");
 	}

 	if(empty($email)) {
 		array_push($errors, "Email is required");
 	}
 	if(empty($password_1)) {
 		array_push($errors, "Password is required");
 	}

 	if ($password_1 != $password_2) {
 		array_push($errors, "The two password donot match");
 	}

 	//if there are no error, save user to database.
 	if (count($errors) == 0) {
 		$password_2 = $password_1;
 		$password = md5($password_1); //encrypt password before storing in the database(secutity)
 		$sql = "INSERT INTO user_info (fullname, gender, phnumber, email, address, state, country, password) VALUES ('$username','$gender','$phnumber', '$email', '$staddress', '$state', '$country', '$password_2')";
 		mysqli_query($db, $sql);

 		$sql = "INSERT INTO members (username, email, password) VALUES ('$username','$email', '$password')";
 		mysqli_query($db, $sql);

 		$_SESSION['username'] = $username;
 		$_SESSION['success'] = "You are now logged in";
 		header('location: user.php'); //redirect to home page
 	}
 }


  //log user in from login page
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
 	if (count($errors) == 0) {

 		$query = "SELECT * FROM admin_info WHERE email='$username' AND password='$password'";
 		$result = mysqli_query($db,$query);
 		if (mysqli_num_rows($result) ==1) {
 			//log user in
 			$_SESSION['username'] = $username;
 		    $_SESSION['success'] = "You are now logged in";
 		    header('location: ../adminpanel/adminindex.php'); //redirect to home page
 		}


 	if (count($errors) == 0) {
 		$password = md5($password); //encrypt password before comparing with the database
 		$query = "SELECT * FROM members WHERE email='$username' AND password='$password'";
 		$result = mysqli_query($db,$query);
 		if (mysqli_num_rows($result) ==1) {
 			//log user in
 			$_SESSION['username'] = $username;
 		    $_SESSION['success'] = "You are now logged in";
 		    header('location: user.php'); //redirect to home page
 		}
 		
 		else{
 			array_push($errors, "wrong Email/password combination");
 		}  }
 	}
}



 //logout
 if (isset($_GET['logout'])) {
 	session_destroy();
 	unset($_SESSION['username']);
 	header('location: login.php');
 }
 ?>
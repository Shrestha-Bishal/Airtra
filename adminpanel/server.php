<?php
 session_start();
 $username = "";
 $gender = "";
 $phnumber = "";
 $address = "";
 $email = "";
 $aname = "";
 $password_1 = "";
 $password_2 = "";
 $branch_id = "";
 $branch_location = "";

 $errors = array();

 //connect to database
 $db = mysqli_connect('localhost', 'root','','airtra');

 //if the register button is clciked
 if (isset($_POST['register'])) {
    $username = addslashes($_POST['username']);
    $gender = addslashes($_POST['gender']); 
    $phnumber = addslashes($_POST['phnumber']); 
    $address = addslashes($_POST['address']);
 	$email = addslashes($_POST['email']);
 	$aname = addslashes($_POST['aname']);     
 	$password_1 = addslashes($_POST['password_1']);
 	$password_2 = addslashes($_POST['password_2']);  
 	$branch_id = addslashes($_POST['branch_id']); 
 	$branch_location = addslashes($_POST['branch_location']);

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

 	if(empty($address)) {
 		array_push($errors, "Address is required");
}
 	if(empty($email)) {
 		array_push($errors, "Email is required");
 	}
 	 	if(empty($aname)) {
 		array_push($errors, "Admin ID is required");
 	}
 	if(empty($password_1)) {
 		array_push($errors, "Password is required");
 	}
 	 	if(empty($branch_id)) {
 		array_push($errors, "Branch ID is required");
 	}
 	 	if(empty($branch_location)) {
 		array_push($errors, "Branch Location is required");
 	}

 	if ($password_1 != $password_2) {
 		array_push($errors, "The two password donot match");
 	}


 	//if there are no error, save user to database.
 	if (count($errors) == 0) {
 		$password_2 = $password_1;
 		
 		$sql = "INSERT INTO admin_info (fullname, gender, address, phnumber, email, username, password, branch_id, branch_location) VALUES ('$username','$gender', '$address','$phnumber', '$email','$aname', '$password_2', '$branch_id', '$branch_location')";
 		mysqli_query($db, $sql);
 		$_SESSION['username'] = $username;
 		$_SESSION['success'] = "You are now logged in";
 		header('location: adminindex.php'); //redirect to home page
 	}
 }


 
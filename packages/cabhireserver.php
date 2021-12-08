<?php
 session_start();
 $username = "";
 $address = "";
 $phnumber = "";
 $pickup = "";
 $dropoff = "";
 $pickupdate = "";
 $pickuptime = "";
 $errors = array();

 //connect to database
 $db = mysqli_connect('localhost', 'root','','airtra');

 //if the register button is clciked
 if (isset($_POST['register'])) {
    $username = addslashes($_POST['username']);
    $address = addslashes($_POST['address']); 
    $phnumber = addslashes($_POST['phnumber']); 
 	$pickup = addslashes($_POST['pickup']);
    $dropoff = addslashes($_POST['dropoff']); 
    $pickupdate = addslashes($_POST['pickupdate']); 
    $pickuptime = addslashes($_POST['pickuptime']); 



 	//ensure that form fields are filled properly
 	if(empty($username)) {
 		array_push($errors, "Full Name is required");
 	}
 	if(empty($address)) {
 		array_push($errors, "Address is required");
 	}
 	if(empty($phnumber)) {
 		array_push($errors, "Phone Number is required");
 	}

 	if(empty($pickup)) {
 		array_push($errors, "Pickup Location is required");
 	}
 	if(empty($dropoff)) {
 		array_push($errors, "Dropoff Location is required");
 	}
 	if(empty($pickupdate)) {
 		array_push($errors, "Pick Up Date is required");
 	}

 	if(empty($pickuptime)) {
 		array_push($errors, "Pick Up Time is required");
 	} 

 	//if there are no error, save user to database.
 	if (count($errors) == 0) {
 		$sql = "INSERT INTO cabhire (username, address, phnumber, pickup, dropoff, pickupdate, pickuptime) VALUES ('$username','$address','$phnumber', '$pickup', '$dropoff', '$pickupdate', '$pickuptime')";
 		mysqli_query($db, $sql);
 		header('location: ../cabhire.php'); //redirect to home page
 	}
 } 

  
 ?>
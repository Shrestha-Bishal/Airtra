<?php
 session_start();
 $airportname = "";
 $code = "";
 $type = "";
 $cityname = "";
 $state = "";
 $country ="";
 $errors = array();

 //connect to database
 $db = mysqli_connect('localhost', 'root','','airtra');

 //if the register button is clciked
 if (isset($_POST['register'])) {
    $airportname = addslashes($_POST['airportname']);
    $code = addslashes($_POST['code']);
    $type = addslashes($_POST['type']); 
    $cityname = addslashes($_POST['cityname']); 
    $state = addslashes($_POST['state']);
 	$country = addslashes($_POST['country']);

 	//ensure that form fields are filled properly
 	if(empty($airportname)) {
 		array_push($errors, "Airport Name is required");
 	}
 	 	if(empty($code)) {
 		array_push($errors, "Airport Code is required");
 	}
 	if(empty($type)) {
 		array_push($errors, "Type is required");
 	}
 	if(empty($cityname)) {
 		array_push($errors, "City Name is required");
 	}

 	if(empty($state)) {
 		array_push($errors, "State is required");
 	}

 	if(empty($country)) {
 		array_push($errors, "Country is required");
 	}
 	 	

 	//if there are no error, save user to database.
 	if (count($errors) == 0) { 		
 		$sql = "INSERT INTO airport (airportname, code, type, cityname, state, country) VALUES ('$airportname', '$code', '$type', '$cityname','$state', '$country')";
 		mysqli_query($db, $sql);
 		$_SESSION['airportname'] = $airportname;
 		$_SESSION['success'] = "Airport Details Added successfully";
 		header('location: ../adminpanel/adminindex.php'); //redirect to home page
 }
 }	



   
<?php
 session_start();
 //add flight
 $company ="";
 $airbus_id ="";
 $typee ="";
 $trip ="";
 $From ="";
 $To ="";
 $scheduledeparture ="";
 $schedulearrival ="";
 $fromairportid ="";
 $toairportid ="";
 $datee ="";
 $rdatee ="";
 $first_class = "";
 $business_class = "";
 $economy_class = "";
 $first_class_seats = "";
 $business_class_seats = "";
 $economy_class_seats = "";
 $errors = array();

  $db = mysqli_connect('localhost', 'root','','airtra');

  if (isset($_POST['register'])) {
    $company = addslashes($_POST['company']);
    $airbus_id = addslashes($_POST['airbus_id']);
    $typee = addslashes($_POST['typee']);
    $trip = addslashes($_POST['trip']);
    $From = addslashes($_POST['From']);
    $To = addslashes($_POST['To']);
    $scheduledeparture = addslashes($_POST['scheduledeparture']); 
    $schedulearrival = addslashes($_POST['schedulearrival']); 
    $fromairportid = addslashes($_POST['fromairportid']);
 	$toairportid = addslashes($_POST['toairportid']);
 	$datee = addslashes($_POST['datee']);
    $rdatee = addslashes($_POST['rdatee']);
    $first_class = addslashes($_POST['first_class']);
    $business_class = addslashes($_POST['business_class']);
    $economy_class = addslashes($_POST['economy_class']);
    $first_class_seats = addslashes($_POST['first_class_seats']);
    $business_class_seats = addslashes($_POST['business_class_seats']);
    $economy_class_seats = addslashes($_POST['economy_class_seats']);

 	//ensure that form fields are filled properly
 	if(empty($company)) {
 		array_push($errors, "Company Name is required");
 	}
 	 	if(empty($airbus_id)) {
 		array_push($errors, "Airbus Id is required");
 	}
 	if(empty($scheduledeparture)) {
 		array_push($errors, "Scheduled Departure is required");
 	}
 	if(empty($schedulearrival)) {
 		array_push($errors, "Scheduled Arrival is required");
 	}

 	if(empty($fromairportid)) {
 		array_push($errors, "From Airport Code is required");
 	}

 	if(empty($toairportid)) {
 		array_push($errors, "To Airport Code is required");
 	}
 	 	if(empty($datee)) {
 		array_push($errors, "Flight Date is required");
 	}
            if(empty($rdatee)) {
        array_push($errors, "Return Date is required");
    }
            if(empty($first_class)) {
        array_push($errors, "First Class Fare is required");
    }
            if(empty($business_class)) {
        array_push($errors, "Business Class Fare is required");
    }
            if(empty($economy_class)) {
        array_push($errors, "Economy Class Fare is required");
    }
    if(empty($first_class_seats)) {
        array_push($errors, "First Class Seat are required");
    }
            if(empty($business_class_seats)) {
        array_push($errors, "Business Class Seats are required");
    }
            if(empty($economy_class_seats)) {
        array_push($errors, "Economy Class Seats are required");
    }
 	 	

 	//if there are no error, save user to database.
 	if (count($errors) == 0) { 		
 		$sql = "INSERT INTO addflights (Company, airbus_id, type, trip, fromdes, todes, SheduledDeparture, ScheduledArrival, From_Airport_id, To_Airport_id, Datee, rdatee, first_class, business_class, economy_class, first_class_seats, business_class_seats, economy_class_seats) VALUES (' $company', '$airbus_id', '$typee', '$trip', '$From','$To','$scheduledeparture', '$schedulearrival', '$fromairportid','$toairportid', '$datee', '$rdatee', '$first_class', '$business_class', '$economy_class','$first_class_seats' , '$business_class_seats', '$economy_class_seats')";
 		mysqli_query($db, $sql);
 		$_SESSION['company'] = $company;
 		$_SESSION['success'] = "Flight Details Added successfully";
 		header('location: ../adminpanel/adminindex.php'); //redirect to home page
 } }
<?php include('../registration/userheader.php'); 
$errors=array(); $passengername=""; $email=""; $reason=""; $userid="";  ?>

<?php 

//codes for booking success
 session_start();
$db = mysqli_connect('localhost', 'root','','airtra');
//if book now button is clicked proceed to booking
if (isset($_POST['cancel'])) {
	$passengername = addslashes($_POST['passengername']);
	$email = addslashes($_POST['email']);
  $userid = addslashes($_POST['userid']);
$airlinesid = addslashes($_POST['airlinesid']);
$seatno = addslashes($_POST['seatno']);
$code = addslashes($_POST['code']);
$reason = addslashes($_POST['reason']);


//ensure that the form fields are filled properly
if(empty($passengername)) {
 		array_push($errors, " Passenger Name required");
 	}
 	if(empty($email)) {
 		array_push($errors, " Email ID required");
 	}
      if(empty($userid)) {
    array_push($errors, " User ID is required");
  }
  
if(empty($airlinesid)) {
 		array_push($errors, " Airlines ID required");
 	}
 	if(empty($seatno)) {
 		array_push($errors, "Seat No is required");
 	}
 	if(empty($code)) {
 		array_push($errors, "Code is required");
 	}


if (count($errors) == 0) {
	$query = "SELECT * FROM reservation WHERE confirmation_code='$code' AND name='$passengername' AND email='$email' AND seatno='$seatno' AND airbus_id='$airlinesid'";
 		$result = mysqli_query($db,$query);
 		if (mysqli_num_rows($result) ==1) {
 		$sql = "INSERT INTO cancelation (confirmation_code, name, email, seatno, airbus_id, reason) VALUES ('$code','$passengername','$email', '$seatno', '$airlinesid', '$reason')";
 		mysqli_query($db, $sql);

                             echo '<i style="color:blue;font-size:30px;font-family:calibri ;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Reserved SEAT is Canceled</i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

                              echo '<i style="color:green;font-size:20px;font-family:calibri ;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cash is REFUNDED to your eSEWA account with deduction of 25% flight fare for cancelation. </i> ';


//update balance to ecash
$query = "SELECT *FROM ecash_confirmation WHERE paymentid='$code' AND userid='$userid'";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
 $diduct = $row['amount'];
  $commision = 0.25;
  $earn = $diduct * $commision;
  $totald= $diduct- $earn;
$query = "SELECT *FROM ecash WHERE userid='$userid'";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
 $diducta = $row['balance'] + $totald;
   $sql = "UPDATE ecash SET balance='$diducta' WHERE userid='$userid'  ";
   mysqli_query($db, $sql);



 //total balance of airtra 
$query = "SELECT *FROM airtra_balance ";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
 $total = $row['airtra_balance'] + $earn;
   $sql = "UPDATE airtra_balance SET airtra_balance='$total'";
   mysqli_query($db, $sql);
$date = date('Y-m-d '); 
date_default_timezone_set("Asia/Kathmandu");
$time = date('H:i:s');
$reserved = "Cancelled";
$sql= "INSERT INTO  airtra_draft (amount, timee, datee, status) VALUES ('$earn', '$time', '$date', '$reserved') ";
mysqli_query($db,$sql);

               $sql = "DELETE FROM reservation WHERE confirmation_code='$code' AND name='$passengername' AND email='$email' AND seatno='$seatno' AND airbus_id='$airlinesid' ";
                mysqli_query($db, $sql);   
                    $reserved = "Available";

   $sql = "UPDATE seats_availability SET status='$reserved' WHERE seat_no='$seatno' ";
   mysqli_query($db, $sql);           
 		}
 		else{
 			array_push($errors, "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wrong Credential Combination");
}
		
 		} 



}


    
?>

<!-- id flight is needed to cancel flight -->

<!DOCTYPE html>
<html>
<body>
  <form method="post" action="cancelflights.php">
  	<br>
  	<label style="color: BLUE">Proceed To Cancelation </label><br>
  	<label>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>

<br>
<label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Cancelled Flight Fare is refunded to your eCASH account with 25% diduction for cancellation. <br></label>

<div class="input-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <label>Passenger Name </label><input type="text" name="passengername" placeholder="Passenger Name"  style="width: 100px , height: 50px" size="36" value="<?php echo $passengername; ?>"> &nbsp;&nbsp;

   &nbsp;
   <label>Email </label><input type="Email" name="email" placeholder="Passenger Email"  style="width: 100px , height: 50px" size="36" value="<?php echo $email; ?>"> &nbsp;&nbsp; 
<label>Esewa User ID: </label><input type="text" name="userid" placeholder="Esewa User ID"  style="width: 50px , height: 50px" size="20" value="<?php echo $userid; ?>">

 </div><br>
<div class="input-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <label>Enter the Flight ID Number you booked: </label><input type="number" name="airlinesid" placeholder="Flight ID number"  style="width: 100px , height: 50px" size="36" value="<?php echo $airlinesid; ?>"> &nbsp;&nbsp;
   <?php $seatno = "";  $code = ""; ?>
   <label>Enter the Seat Number: </label><input type="text" name="seatno" placeholder="Seat number"  style="width: 50px , height: 50px" size="10" value="<?php echo $seatno; ?>"> 
    &nbsp;&nbsp;
<label>Enter the Confirmation Code: </label><input type="text" name="code" placeholder="Confirmation Code"  style="width: 50px , height: 50px" size="20" value="<?php echo $code; ?>"><br> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Reason for Cancelation : </label><input type="text" name="reason" placeholder="Reason worth mentioning?"  style="width: 100px , height: 1000px" size="108" value="<?php echo $reason; ?>">
         <button type="submit" name="cancel" class="btn">Cancel Booking?</button> 
    <!-- display booking validation errors here -->
    <?php include('../registration/errors.php'); ?>
</div>
</body>
</html>






  	<label>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>
<?php include('../copyright.php'); ?>




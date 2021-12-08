<?php include('../header.php'); ?><br>
<?php
 session_start();
 $random_hash ="";
 $username ="";
 $userid= "";
$airbusid= "";
$seatno= "";
$cash= "";
 $password_1 = "";
 $password_2 = "";
 $diffrernce ="";
 $errors = array();
  $db = mysqli_connect('localhost', 'root','','airtra');
  if (isset($_POST['register'])) {
  	
     
//ensure that form fields are filled properly
 	

 }

 if (isset($_POST['register'])) {
 	$username = addslashes($_POST['username']);
 	$userid = addslashes($_POST['userid']);
    $airbusid = addslashes($_POST['airbusid']); 
    $seatno= addslashes($_POST['seatno']); 
    $cash = addslashes($_POST['cash']); 
 	$password_1 = addslashes($_POST['password_1']);
 	$password_2 = addslashes($_POST['password_2']);
   if(empty($username)) {
 		array_push($errors, "User Name is required");
 	}
 	if(empty($userid)) {
 		array_push($errors, "User Id is required");
 	}
 	if(empty($airbusid)) {
 		array_push($errors, "Airbus ID is required");
 	}
 	if(empty($seatno)) {
 		array_push($errors, "Seat Number is required");
 	}

 	if(empty($cash)) {
 		array_push($errors, "Amount is required");
 	}
 	 	if(empty($password_1)) {
 		array_push($errors, "Password is required");
 	}

 	if ($password_1 != $password_2) {
 		array_push($errors, "The two password donot match"); 
 	}
 	if (count($errors) == 0) {

 		$query = "SELECT * FROM ecash WHERE userid='$userid' AND password='$password_1'";
 		$result = mysqli_query($db,$query);
 		if (mysqli_num_rows($result) ==1) {

$query = "SELECT *FROM seats_availability WHERE seat_no='$seatno' AND airtra_fair='$cash'";
 $result= mysqli_query($db,$query);
if (mysqli_num_rows($result)==1) {
  $random_hash = substr(md5(uniqid(rand(), true)), 16, 16);
 $sql = "INSERT INTO ecash_reservation (paymentid, username, userid, fare, airbus_id, seat_no) VALUES ('$random_hash', '$username', '$userid', '$cash', '$airbusid', '$seatno')";
 		mysqli_query($db, $sql);
 echo("Please Copy the Confirmation Code and paste in the booking section for confirmation validation: &nbsp;" );
echo "$random_hash";
/////////////////////////////

//update balance to ecash
$query = "SELECT *FROM ecash WHERE userid='$userid'";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
 $diduct = $row['balance'] - $cash;
   $sql = "UPDATE ecash SET balance='$diduct' WHERE userid='$userid' ";
   mysqli_query($db, $sql);

   //total balance of airtra 
$query = "SELECT *FROM airtra_balance ";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
  $commision = 0.25;
   $earned = $cash *  $commision;
 $total = $row['airtra_balance'] + $earned;


   $sql = "UPDATE airtra_balance SET airtra_balance='$total'";
   mysqli_query($db, $sql);

$date = date('Y-m-d '); 
date_default_timezone_set("Asia/Kathmandu");
$time = date('H:i:s');
$reserved = "Booked";
$sql= "INSERT INTO  airtra_draft (amount, timee, datee, status) VALUES ('$cash', '$time', '$date', '$reserved') ";
mysqli_query($db,$sql);

 //echo "Result:" .$row['balance'];

/*
$query = "SELECT *FROM ecash WHERE userid='$userid' ";
 $result= mysqli_query($db,$query);
if (mysqli_num_rows($result)==1) {

	$query = "SELECT $result-$cash AS   WHERE userid='$userid'";
 $result= mysqli_query($db,$query);
////////////////////////////////
	$query = "SELECT balance *FROM ecash  WHERE userid='$userid'";
 $result= mysqli_query($db,$query);
 	$query = "SELECT airtra_fair *FROM seats_availability  WHERE seat_no='$seatno'";
 $resu= mysqli_query($db,$query);
$diduct = $result- $resu;
  $sql = "UPDATE ecash SET balance='$diduct' WHERE userid='$userid' ";
   mysqli_query($db, $sql);

}
*/

////////////////////////////
$reserved = "Booked";
   $sql = "UPDATE seats_availability SET status='$reserved' WHERE seat_no='$seatno' ";
   mysqli_query($db, $sql);



}

else { echo "Enterred Flight Fare is insufficient, Please review your amount"; }


/*         Update  
$sql = "UPDATE ecash ". "SET balance = '$balance' ";
   mysqli_query($db, $sql);


 		$query = "SELECT * FROM ecash WHERE userid='$userid' AND password='$password_1'";
 		$result = mysqli_query($db,$query);
 		if (mysqli_num_rows($result) ==1) {
   $random_hash = substr(md5(uniqid(rand(), true)), 16, 16);

$sql = "INSERT INTO ecash (paymentid, userid, password) VALUES ('$random_hash','$userid', '$password_1')";
 		mysqli_query($db, $sql);
 echo("Please Copy the Confirmation ID and paste in the booking section for confirmation validation: &nbsp;" );
echo "$random_hash";
$sql = "UPDATE ecash ". "SET balance = '$balance' ";
   mysqli_query($db, $sql);

   
*/
 		    
 		}
 		 		else{
 			array_push($errors, "wrong user id/password combination");
 		} 

 	}


 }
 ?>



<!--
$sql = "SELECT value FROM ecash WHERE userid= '$userid' AND balance='test.flag';";
    $result = mysqli_query($db, $sql);
    echo "<p>".$result."</p><br>";
echo "$result";
 		$difference = $balance - $cash;
        $balance=$difference;

-->
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>
<body>
	<div class="header">
		<h2>eSEWA Payment</h2>
	</div>

	<form method="post" action="ecashpayment.php">
		<!-- display validation errors here -->
		<?php include('../registration/errors.php'); ?>
		<div class="input-group">
			<input type="text" name="username" placeholder="User Name" style="height:35px" size="36" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="userid" placeholder="User ID" style="height:35px" size="36" value="<?php echo $userid; ?>">
		</div>
				<div class="input-group">
			
			<input type="Number" name="airbusid" placeholder="Airbus ID Number" style="height:35px" size="36" value="<?php echo $airbusid; ?>">
		</div>
				<div class="input-group">
			
			<input type="text" name="seatno" placeholder="Seat Number" style="height:35px" size="36" value="<?php echo $seatno; ?>">
		</div>

				<div class="input-group">
			
			<input type="Number" name="cash" placeholder="Payment Amount" style="height:35px" size="36" value="<?php echo $cash; ?>">
		</div>
						<div class="input-group">
			
			<input type="password" name="password_1" placeholder="Password">
		</div>
		<div class="input-group">
			
			<input type="password" name="password_2" placeholder="Confirm Password">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Pay</button>
		</div>

	</form>

</body>
</html>

<style>
 body{
    background-image: url("../images/esewaa.jpg");

      background-size: 450px 400px;
    background-repeat: repeat;

    }
</style>

<?php echo file_get_contents('../copyright.php')?>




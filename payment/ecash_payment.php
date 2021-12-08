<?php include('../registration/userheader.php'); ?><br>
<?php
 session_start();
 $random_hash ="";
 $userid= "";
$cash= "";
 $password_1 = "";
 $password_2 = "";
 $diffrernce ="";
 $errors = array();
  $db = mysqli_connect('localhost', 'root','','airtra');


 if (isset($_POST['register'])) {
 	$userid = addslashes($_POST['userid']);
    $cash = addslashes($_POST['cash']); 
 	$password_1 = addslashes($_POST['password_1']);
 	$password_2 = addslashes($_POST['password_2']);
 	if(empty($userid)) {
 		array_push($errors, "User Id is required");
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
//if user is found give usear a token and decrease the amount from his wallet
  $random_hash = substr(md5(uniqid(rand(), true)), 16, 16);
  $ecash_status="Paid";
  $airtras="Not_Received";
     $date = date('Y-m-d '); 
date_default_timezone_set("Asia/Kathmandu");
$time = date('H:i:s');
$reserved = "Booked";
 $sql = "INSERT INTO ecash_confirmation (userid, amount, paymentid,ecash_status,datee,timee, airtra_status) VALUES ('$userid', '$cash', '$random_hash', '$ecash_status', '$date', '$time', '$airtras')";
 		mysqli_query($db, $sql);
 echo("Please Copy the Confirmation Code and paste in the booking section for confirmation validation: &nbsp;" );
echo "$random_hash";
/////////////////////////////
$_SESSION['username'] = $userid;

//update balance to ecash
$query = "SELECT *FROM ecash WHERE userid='$userid'";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
 $diduct = $row['balance'] - $cash;
   $sql = "UPDATE ecash SET balance='$diduct' WHERE userid='$userid' ";
   mysqli_query($db, $sql);

   }
 		 		else{
 			array_push($errors, "wrong user id/password combination");
 		} 
}
 	}
 ?>



<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>
<body>
	<div class="header">
		<h2>eCASH Payment</h2>
	</div>

	<form method="post" action="ecash_payment.php">
		<!-- display validation errors here -->
		<?php include('../registration/errors.php'); ?>
		<div class="input-group">
			<input type="text" name="userid" placeholder="User ID" style="height:35px" size="36" value="<?php echo $userid; ?>">
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
    background-image: url("../images/ecash.jpg");

      background-size: 450px 400px;
    background-repeat: repeat;

    }
</style>

<?php echo file_get_contents('../copyright.php')?>




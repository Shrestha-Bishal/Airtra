<?php include('../registration/userheader.php');
 

$errors=array(); 
$passengername=""; $email=""; 
$useridd="";
?>

<?php 
//codes for booking success

$db = mysqli_connect('localhost', 'root','','airtra');
//if book now button is clicked proceed to booking

if (isset($_POST['booknow'])) {
	$passengername = addslashes($_POST['passengername']);
	$email = addslashes($_POST['email']);
  $useridd = addslashes($_POST['useridd']);
$airlinesid = addslashes($_POST['airlinesid']);
$seatno = addslashes($_POST['seatno']);
$code = addslashes($_POST['code']);


/*
//if book now button is clicked proceed to booking
$_SESSION['namee']='Bishal';
echo $_SESSION['namee'];
<$_SESSION['namee']='Bishal';
echo $_SESSION['namee'];
if (isset($_POST['booknow'])) {

  $passengername = $_SESSION['passengername'];
  $email = addslashes($_POST['email']);

$airlinesid = addslashes($_POST['airlinesid']);
$seatno = addslashes($_POST['seatno']);
$code = addslashes($_POST['code']);  */

//ensure that the form fields are filled properly
if(empty($passengername)) {
 		array_push($errors, " Passenger Name required");
 	}
 	if(empty($email)) {
 		array_push($errors, " Email ID required");
 	}
      if(empty($useridd)) {
    array_push($errors, " eCASH User ID is required");
  }
if(empty($airlinesid)) {
 		array_push($errors, " Airlines ID required");
 	}
 	if(empty($seatno)) {
 		array_push($errors, "Seat No is required");
 	}
 	if(empty($code)) {
 		array_push($errors, " Code is required");
 	}



if (count($errors) == 0) {
$query = "SELECT *FROM seats_availability WHERE seat_no='$seatno' ";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
 $seatprice= $row['airtra_fair'];
 //echo $seatprice;
$ecashstatus="Paid";
$airtrastatus="Not_Received";
	$query = "SELECT * FROM ecash_confirmation WHERE userid='$useridd' AND paymentid='$code' AND ecash_status='$ecashstatus' AND amount='$seatprice' AND airtra_status='$airtrastatus'";
 		$result = mysqli_query($db,$query);
 		if (mysqli_num_rows($result) ==1) {
//insert into booking database
 		$sql = "INSERT INTO reservation (confirmation_code, name, email, seatno, airbus_id) VALUES ('$code','$passengername','$email', '$seatno', '$airlinesid')";
 		mysqli_query($db, $sql);
    $reserved = "Booked";
   $sql = "UPDATE seats_availability SET status='$reserved' WHERE seat_no='$seatno' ";
   mysqli_query($db, $sql);
   echo '<i style="color:green;font-size:30px;font-family:calibri ;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your SEAT is BOOKED</i> ';
   // update airtra status in database for security
    $airtrastatustwo = "Received";
   $sql = "UPDATE ecash_confirmation SET airtra_status='$airtrastatustwo' WHERE userid='$useridd' AND paymentid='$code' AND ecash_status='$ecashstatus' ";
   mysqli_query($db, $sql);

 //total balance of airtra 
$query = "SELECT *FROM airtra_balance ";
 $result= mysqli_query($db,$query);
 $row = mysqli_fetch_assoc($result);
  $commision = 0.25;
   $earned = $seatprice *  $commision;
 $total = $row['airtra_balance'] + $earned;
 $sql = "UPDATE airtra_balance SET airtra_balance='$total'";
   mysqli_query($db, $sql);
$date = date('Y-m-d '); 
date_default_timezone_set("Asia/Kathmandu");
$time = date('H:i:s');
$reserved = "Booked";
$sql= "INSERT INTO  airtra_draft (amount, timee, datee, status) VALUES ('$earned', '$time', '$date', '$reserved') ";
mysqli_query($db,$sql);


 	}
    else{
      array_push($errors, "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wrong Credential Combination or Amount is Insufficient, Please review your amount in eCASH");
                            
 		}

}
		
 		} 


    
?>


<br>

<form>
    <!--formmethod="post" action="index.php">-->
  <!--  <style>
    body{
    background-image: url("../images/mountaino.jpg");
  }
    </style> -->

      <div class="input-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="radio-inline"><input type="radio" name="optradioo" value="roundtrip">Round Trip</label>
    <label class="radio-inline"><input type="radio" name="optradio" value="oneway">One way</label> 

    <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>From:    
  <select name="From" class="form-control" placeholder="From" required>
  <option value="kathmandu">Kathmandu</option>
  <option value="Pokhara">Pokhara</option>
  <option value="Lukla">Lukla</option>
  <option value="Bharatpur">Bharatpur</option>
  <option value="Nepalgunj">Nepalgunj</option>
  <option value="Jumla">Jumla</option>
  <option value="Talcha">Talcha (Mugu)</option>
  <option value="Simikot">Simikot (Humla)</option>
  <option value="Bhadrapur">Bhadrapur</option>
  <option value="Biratnagar">Biratnagar</option>
  <option value="Simara">Simara</option>
  <option value="Janakpur">Janakpur</option>
  <option value="Tumlingtar">Tumlingtar</option>
  <option value="Bhojpur">Bhojpur</option>
  <option value="Phalpu">Phalpu</option>
  <option value="Kangeldanda">Kangel Danda</option>
  <option value="Lamidanda">Lamidanda</option>
  <option value="Jufal">Jufal</option>
   <option><p>------International-------</p></option> 
  <option value="Kathmandu (Nepal)">Kathmandu (Nepal)</option>
  <option value="Delhi (India)">Delhi (India)</option>
  <option value="Kualalumpur (Malasia)">Kualalampur (Malasia)</option>
  <option value="London (England)">London (England)</option>
  <option value="New York (USA)">New York (USA)</option>
  <option value="Dallas (USA)">Dallas (USA)</option>
  <option value="Texas (USA)">Texas (USA)</option>
  <option value="Karachi (Pakistan)">Karachi (Pakistan)</option>
<option><p>------Mountain-------</p></option>
<option value="Kathmandu">Kathmandu</option>
<option value="Pokhara">Pokhara</option>
<option value="Kathmandu">Kathmandu</option>
<option value="Nepalgunj">Nepalgunj</option>

  
  </select>     </label>
        <label>To:
  <select name="To" class="form-control"  placeholder="To" required>
   <option value="pokhara">Pokhara</option>
    <option value="Lukla">Lukla</option>
  <option value="Kathmandu">Kathmandu</option>
  <option value="Nepalgunj">Nepalgunj</option>
  <option value="Bharatpur">Bharatpur</option>
  <option value="Simara">Simara</option>
  <option value="Biratnagar">Biratnagar</option>
  <option value="Jumla">Jumla</option>
  <option value="Talcha">Talcha (Mugu)</option>
  <option value="Simikot">Simikot (Humla)</option>
  <option value="Bhadrapur">Bhadrapur</option>
  <option value="Bhojpur">Bhojpur</option>
  <option value="Phalpu">Phalpu</option>
  <option value="Kangeldanda">Kangel Danda</option>
  <option value="Lamidanda">Lamidanda</option>
  <option value="Janakpur">Janakpur</option>
  <option value="Tumlingtar">Tumlingtar</option>
  <option value="Jufal">Jufal</option>
  <option><p>------International-------</p></option>
    <option value="Kathmandu (Nepal)">Kathmandu (Nepal)</option>
  <option value="Delhi (India)">Delhi (India)</option>
  <option value="Kualalumpur (Malasia)">Kualalampur (Malasia)</option>
  <option value="London (England)">London (England)</option>
  <option value="New York (USA)">New York (USA)</option>
  <option value="Dallas (USA)">Dallas (USA)</option>
  <option value="Texas (USA)">Texas (USA)</option>
  <option value="Karachi (Pakistan)">Karachi (Pakistan)</option>
  <option><p>------Mountain-------</p></option>
  <option value="Lukla">Lukla</option>
  </select>   </label>

        <label>Depart:</label> <input type="Date" name="Depart" style="height: 20px">
        <label>Return:</label> <input type="Date" name="Return" style="height: 20px">
       <label>Guests:
   <select name="Guests" class="form-control"  placeholder="Guests" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

 </select>    </label>
        <label>Cabin Class:
         <select name="seatclass" class="form-control" placeholder="seatclass" required>
          <option value="firstclass">First Class</option>
          <option value="businessclass">Business Class</option>
          <option value="economyclass">Economy Class</option>           
         </select>        </label> 
  
        <button type="submit" name="searchflights" class="btn">Search Flights</button>
      </div>
      
    </form>
    <br>

<?php include('flightsadminserver.php'); ?>


<!-- id flight is needed to book flight -->

<!DOCTYPE html>
<html>
<body>
  <form method="post" action="bookflights.php">
  	<br>
  	<label style="color: BLUE">Proceed To Booking </label><br>
  	<label>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>

<br>
<label>Check Seat Availability :&nbsp;</label> <button><a href="checkseats.php" target="_blank">Check</a></button>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Make a Payment to Book :&nbsp;</label> <button><a href="../payment/ecash_payment.php" target="_blank">Payment</a></button><br> <br>



<div class="input-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <label>Passenger Name </label><input type="text" name="passengername" placeholder="Passenger Name"  style="width: 100px , height: 50px" size="36" value="<?php echo $passengername; ?>"> &nbsp;&nbsp;

   &nbsp;
   <label>Email </label><input type="Email" name="email" placeholder="Passenger Email"  style="width: 100px , height: 50px" size="36" value="<?php echo $email; ?>"> &nbsp;&nbsp; 
<label>eCash User ID: </label><input type="text" name="useridd" placeholder="eCASH User ID"  style="width: 100px , height: 50px" size="24" value="<?php echo $useridd; ?>"> &nbsp;&nbsp;
 </div><br>
<div class="input-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <label>Enter the Flight ID Number to book: </label><input type="number" name="airlinesid" placeholder="Flight ID number"  style="width: 100px , height: 50px" size="36" value="<?php echo $airlinesid; ?>"> &nbsp;&nbsp;
   <?php $seatno = "";  $code = ""; ?>
   <label>Enter the Seat Number: </label><input type="text" name="seatno" placeholder="Seat number"  style="width: 50px , height: 50px" size="10" value="<?php echo $seatno; ?>"> 
    &nbsp;&nbsp;
<label>Enter the Confirmation Code: </label><input type="text" name="code" placeholder="Confirmation Code"  style="width: 50px , height: 50px" size="20" value="<?php echo $code; ?>"> 
         <button type="submit" name="booknow" class="btn">Book Now?</button> 
    <!-- display booking validation errors here -->
    <?php include('../registration/errors.php'); ?>
</div>
</body>
</html>






  	<label>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>
<?php include('../copyright.php'); ?>




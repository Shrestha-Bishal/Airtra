<!DOCTYPE html>
<html>
<head>
  <title>AirTra: Search | Travel | Explore</title>
  <link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body>
<?php include('adminheader.php'); ?>
  <h3> <p></p>  </h3>



<?php include('../registration/server.php'); 
// if user is not logged in they cannot access this page
                 if (empty($_SESSION['username'])) {//    ekdam important for security turn it on after finished 
    header('location: ../registration/login.php');




}?>


<!DOCTYPE html>
<body>

<div class="content">
  <?php if (isset($_SESSION['success'])): ?>
    <div class="error success">
      <h3>
        <?php 
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
      </h3>
    </div>
  <?php endif ?>

  <?php if (isset($_SESSION["username"])): ?>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Welcome ADMIN : <strong><?php echo $_SESSION["username"]; ?></strong>
    <a href="../registration/login.php?logout='1'" style="color: red;">Logout</a></p>
  <?php endif ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <style>
.button {
    background-color: #036C83; /* Green */
    border: none;
    color: white;
    padding: 8px 18px;
    text-align: center;
    text-decoration: bold;
    display: inline-block;
    font-color: white;
    font-size: 9px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #036C83;
background-color: #036C83;
background-color: #036C83; /* Green */
    border: none;
    color: white;
    padding: 8px 18px;
    text-align: center;
    text-decoration: bold;
    display: inline-block;
    font-color: white;
    font-size: 11px;
    margin: 4px 2px;
    cursor: pointer;}
.button3 {background-color: #036C83;}
.button4 {background-color: #036C83;}
.button5 {background-color: #036C83;}
.button6 {background-color: #036C83;}

</style>
</head>
<body>
<a href="../payment/total_balance.php" ><button class="button"><b>Balance</b></button></a>
<a href="../payment/ecash_transaction.php" ><button class="button"><b>eCASH Transaction</b></button></a>
<a href="../booking/adminviewreservation.php" ><button class="button"><b>View Reservation</b></button></a>
<a href="../booking/adminviewcancelation.php"><button class="button"><b>View Cancellation</b></button></a>
<a href="../airport/flightsadmin.php""><button class="button"><b>Flights</b></button></a>
<a href="../airport/airportflights.php"><button class="button"><b>Airport Flights</b></button></a>
<a href="../adminpanel/addadmin.php"><button class="button"><b>Add Admin</b></button></a>
<a href="../registration/register.php"><button class="button"><b>Add User</b></button></a>
<a href="../about.php"><button class="button"><b>About</b></button></a>
<a href="../help.php"><button class="button"><b>Help</b></button></a>
<a href="viewfeedback.php"><button class="button"><b>Feedback</b></button></a>

</body>





    <?php include('../slidenew.php'); ?>
       
         <!--
        <img src="../images/mountaino.jpg" width="1332" height="300"/> -->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <form2> <a class="button2" href="http://google-maps.pro/satellite/Nepal" target="_blank">Map of Nepal</a> </form2>
     <form2> <a class="button2" href="https://earth.google.com/web/" target="_blank">Google Earth</a></form2>
     <form2> <a class="button2" href="https://planefinder.net//" target="_blank">See Flights above You</a></form2>
     
  	</div>
  	<!-- <form1><a class="btn" href="flight">Flight</a></form> -->
<flight>

      <?php include ('../search_flight.php'); ?>
      
</flight> 
    <body>

<?php echo file_get_contents("../flights.php"); ?>

 </body>
</body>
</html>
<br>

<?php echo file_get_contents( "../copyright.php" ); ?>

<?php include('cabhireserver.php'); include('../header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>
<body>
        
	<div class="header"> <h2>Cab Hire</h2> </div>
    <form method="post" action="cabhire.php">
        <!-- display validation errors here -->
        <?php include('../registration/errors.php'); ?>
<form method="post" action="cabhire.php">
	<div class="input-group"> <label>Name</label> <input type="Name" name="username"> </div>
    <div class="input-group"> <label>Address</label> <input type="Address" name="address"> </div>
    <div class="input-group"> <label>Contact</label> <input type="Contact" name="phnumber"> </div>
    <div class="input-group"> <label>Pick-up Location</label> <input type="Location" name="pickup"> </div>
    <div class="input-group"> <label>Drop-off Location</label> <input type="Location" name="dropoff"> </div>
    <div class="input-group"> <label>Pick-up Date</label> <input type="Date" name="pickupdate"> </div>
    <div class="input-group"> <label>Time</label> <input type="Time" name="pickuptime"> </div>
    <div class="input-group"> <button type="submit" name="register" class="btn">Hire</button> </div>
    <p>Standard Charges are applied and Cab is hired.</p>

</form>  </form>
</body>
</html>
<div> <style> body{ background-image: url("../images/cabhire.jpg");  background-size: 1400px 900px; } 
</style> </div>
<?php echo file_get_contents("../copyright.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>
<body>
	<div class="header"> <h2>Cab Hire</h2> </div>
<form method="post" action="cabhire.php">
	<div class="input-group"> <label>Name</label> <input type="Name" name="cabname"> </div>
    <div class="input-group"> <label>Address</label> <input type="Address" name="cabadress"> </div>
    <div class="input-group"> <label>Contact</label> <input type="Contact" name="cabcontact"> </div>
    <div class="input-group"> <label>Pick-up Location</label> <input type="Location" name="cabpickuplocation"> </div>
    <div class="input-group"> <label>Drop-off Location</label> <input type="Location" name="cabdropofflocation"> </div>
    <div class="input-group"> <label>Pick-up Date</label> <input type="Date" name="cabpickupdate"> </div>
    <div class="input-group"> <label>Time</label> <input type="Time" name="cabtime"> </div>
    <div class="input-group"> <button type="submit" name="Hire" class="btn">Hire</button> </div>
    <p>Standard Charges are applied.</p>
</form> 
</body>
</html>
<div> <style> body{ background-image: url("../images/cabhire.jpg");  background-size: 1400px 900px; } 
</style> </div>
<?php echo file_get_contents("copyright.php"); ?>
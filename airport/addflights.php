<?php include('addflightsserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>AirTra: Search | Travel | Explore</title>
    <link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>
<body>
	<form1> <a class="btn" href="../adminpanel/adminindex.php">AIRTRA Home</a> </form1>
	<div class="header">
		<h2>Add Flights</h2>
	</div>

	<form method="post" action="addflights.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<input type="text" name="company" placeholder="Company" style="height:35px" size="36" value="<?php echo $company; ?>">
		</div>
         <div class="input-group">	
			<input type="text" name="airbus_id" placeholder="Airbus ID" style="height:35px" size="36" value="<?php echo $airbus_id; ?>">
		</div>

<label>Flight: <select name="typee" class="form-control" placeholder="typee" required="" value="<?php echo $company; ?>"> 
<option value="domestic">Domestic</option> <option value="international">International</option></select></label>

<label>Trip: <select name="trip" class="form-control" placeholder="trip" required="" value="<?php echo $trip; ?>"> 
<option value="oneway">One Way</option> <option value="roundtrip">Round Trip</option></select></label>

				<div class="input-group">
<!--<input type="text" name="from" placeholder="From" style="height:35px" size="36" value="<?phpecho $from; ?>"> -->

<td><nobr><i class="flag-bfh-ES">
		 <NOBR> <label> From: <select name="From" class="form-control" placeholder="From" required=""  value="<?php echo $From; ?>"> <option value="Kathmandu">Kathmandu</option>
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
</select></label>  


  <label>To: <select name="To" class="form-control"  placeholder="To" required=""  value="<?php echo $To; ?>"> <option value="Pokhara">Pokhara</option>
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
  </select>  </label>   </NOBR>    	</i></nobr></td>

		</div>
				<div>		
			<label>Scheduled Departure: <input type="Time" name="scheduledeparture" placeholder="Schdeduled Departure" value="<?php echo $scheduledeparture; ?>"></label>
		</div>
						<div> <br>		
			<label>Scheduled Arrival: <input type="Time" name="schedulearrival" placeholder="Schdeduled Arrival"  value="<?php echo $schedulearrival; ?>"></label>
		</div>
				<div class="input-group">
			<input type="text" name="fromairportid" placeholder="From Airport Code" style="height:35px" size="36" value="<?php echo $fromairportid; ?>">
		</div>
						<div class="input-group">
			<input type="text" name="toairportid" placeholder="To Airport Code" style="height:35px" size="36" value="<?php echo $toairportid; ?>">
		</div>
								<div class="input-group">
			<label>Flight Date:<input type="Date" name="datee" placeholder="Flight Date" style="height:35px" size="36" value="<?php echo $datee; ?>">
		</label> </div> 
										<div class="input-group"> <label>Return Date: </label>
			<input type="Date" name="rdatee" placeholder="Return Date" style="height:35px" size="36" value="<?php echo $rdatee; ?>">
		</div>
		<label>Fares: USD $ </label><br>
										<div class="input-group">
			<input type="Number" name="first_class" placeholder="First Class Fare" style="height:35px" size="36" value="<?php echo $first_class; ?>">
		</div>
										<div class="input-group">
			<input type="Number" name="business_class" placeholder="Business Class Fare" style="height:35px" size="36" value="<?php echo $business_class; ?>">
		</div>
								<div class="input-group">
			<input type="Number" name="economy_class" placeholder="Economy Class Fare" style="height:35px" size="36" value="<?php echo $economy_class; ?>">
		</div>
		<label>Available Seats:</label><br>
		<div class="input-group">
			<input type="Number" name="first_class_seats" placeholder="Available First Class Seats" style="height:35px" size="36" value="<?php echo $first_class_seats; ?>">
		</div>
		<div class="input-group">
			<input type="Number" name="business_class_seats" placeholder="Available Business Class Seats" style="height:35px" size="36" value="<?php echo $business_class_seats; ?>">
		</div>
		<div class="input-group">
			<input type="Number" name="economy_class_seats" placeholder="Available Economy Class Seats" style="height:35px" size="36" value="<?php echo $economy_class_seats; ?>">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Add Airport</button>
		</div>
	</form>

</body>
</html>

<style>
 body{
    background-image: url("../images/airtrajoin.jpg");
    background-size: 1400px 900px;
    background-repeat: no-repeat;
    }
</style>
<br>
<?php echo file_get_contents('../copyright.php')?>
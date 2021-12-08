<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>AirTra: Search | Travel | Explore</title>
    <link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>
<body>
	<form1> <a class="btn" href="../adminpanel/adminindex.php">AIRTRA Home</a> </form1>
	<div class="header">
		<h2>Add Airport Details</h2>
	</div>

	<form method="post" action="airport_details.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
<!-- <label>Full Name</label> -->
			<input type="text" name="airportname" placeholder="Airport Name" style="height:35px" size="36" value="<?php echo $airportname; ?>">
		</div>


         <div class="input-group">	
			<input type="text" name="code" placeholder="Airport Code" style="height:35px" size="36" value="<?php echo $code; ?>">
		</div>

         <div class="input-group">
			
			<input type="text" name="type" placeholder="International/Domestic Airport" style="height:35px" size="36" value="<?php echo $type; ?>">
		</div>
				<div class="input-group">
			<input type="text" name="cityname" placeholder="City Name" style="height:35px" size="36" value="<?php echo $cityname; ?>">
		</div>

				<div class="input-group">
			
			<input type="State" name="state" placeholder="State" style="height:35px" size="36" value="<?php echo $state; ?>">
		</div>
				<div class="input-group">
			
			<input type="Country" name="country" placeholder="Country" style="height:35px" size="36" value="<?php echo $country; ?>">
		</div>
				<div class="input-group">
		
			
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
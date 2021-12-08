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
		<h2>Admin Registration</h2>
	</div>

	<form method="post" action="addadmin.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
<!-- <label>Full Name</label> -->
			<input type="text" name="username" placeholder="Full Name" style="height:35px" size="36" value="<?php echo $username; ?>">
		</div>
				<div class="input-group">
			
			<input type="Gender" name="gender" placeholder="Gender" style="height:35px" size="36" value="<?php echo $gender; ?>">
		</div>
				<div class="input-group">
			
			<input type="Phone" name="phnumber" placeholder="Country Code + Phone Number" style="height:35px" size="36" value="<?php echo $phnumber; ?>">
		</div>

				<div class="input-group">
			
			<input type="Address" name="address" placeholder="Address" style="height:35px" size="36" value="<?php echo $address; ?>">
		</div>
				<div class="input-group">
		
			<input type="Email" name="email" placeholder="Email: airtra@gmail.com" value="<?php echo $email; ?>">
		</div>
						<div class="input-group">
		
			<input type="text" name="aname" placeholder="Admin ID" value="<?php echo $aname; ?>">
		</div>
		<div class="input-group">
			
			<input type="password" name="password_1" placeholder="Password">
		</div>
		<div class="input-group">
			
			<input type="password" name="password_2" placeholder="Confirm Password">
		</div>
						<div class="input-group">
		
			<input type="Number" name="branch_id" placeholder="Branch ID" value="<?php echo $branch_id; ?>">
		</div>
						<div class="input-group">
		
			<input type="Address" name="branch_location" placeholder="Branch Location" value="<?php echo $branch_location; ?>">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="../registration/login.php">Login</a>
		</p>
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

<?php echo file_get_contents('../copyright.php')?>
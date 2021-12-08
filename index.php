<?php require 'header.php' ?><br>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../index.css">
<body>	

  	<div>
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <label>Be a AIRTRA member today to Book Cheap Flight Tickets via AIRTRA </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
background-color: #036C83; /* Green */
    border: none;
    color: white;
    padding: 8px 18px;
    text-align: center;
    text-decoration: bold;
    display: inline-block;
    font-color: white;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;}
.button3 {background-color: #036C83;}
.button4 {background-color: #036C83;}
.button5 {background-color: #036C83;}
.button6 {background-color: #036C83;}

</style>
</head>
<body>

<a href="about.php" ><button class="button"><b>About</b></button></a>
<a href="help.php"><button class="button"><b>Help</b></button></a>
<a href="../registration/login.php"><button class="button"><b>Login</b></button></a> 
<a href="../registration/register.php""><button class="button"><b>Register</b></button></a>



</body>
     <!-- <form1> <a class="btn" href="about.php"> About</a> </form1>
      <form1> <a class="btn" href="help.php">Help</a></form1>
-->  <!--
      <form1> 
                                <!--                  <a href="../registration/user.php">user</a>
                                                  <a href="../adminpanel/adminindex.php">admin</a>   -->
                                                 <!-- <p align="right"> -->
      
      <!--<button type="Login" name="Login" class="btn">Login</button>-->
        </form1>
 
      <br>
     <!-- <img src="mountain.jpg" width="525" height="250">  <img src="AirTra.jpg" width="1332" 
      height="250"> -->  
     
     <?php include('slidenew.php'); ?>
     <!--
        <img src="../images/mountaino.jpg" width="1332" height="300" /> <br> -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <form2> <a class="button2" href="http://google-maps.pro/satellite/Nepal" target="_blank">Map of Nepal</a> </form2>
     <form2> <a class= "button2" href="https://earth.google.com/web/" target="_blank">Google Earth</a></form2>
     <form2> <a class= " button2" href="https://planefinder.net/" target="_blank">See Flights above you</a></form2>
     
  	</div>
    <?php include ('search_flight.php'); ?>
  <!--  <?phpechofile_get_contentssearchflight); ?> 



    <body>
 <!--<form3>-->
  
      <!--<img src="https://wallpapercave.com/wp/WotWFoI.jpg">->>
      <img src="Pokhara.jpg">
                                <p>not working </p>  <img src="C:\Users\Bishal>/xampp/htdocs/images/Pokhara.jpg">
                                  <img src="/Users/Bishal/Desktop/Pokhara.jpg">-->


 <flight> 

<?php

    echo file_get_contents("flights.php");

?>
</flight>   
<?php
   echo file_get_contents( "topdestination.php" ); // get the contents, and echo it out.
?>
 </body>
</body>
<form>
<?php echo file_get_contents("indexdefination.php"); ?>
</form>
</html>


<?php include( "copyright.php" ); ?>

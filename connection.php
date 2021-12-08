<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $dbname="airtra";

   $conn = mysqli_connect($servername, $username,$password,$dbname)  or die ("unable to connect");
/*  if (!$conn) {
   	echo "could not connect";
   }
   else {
   	echo "Connected";
   }   */
   
?>
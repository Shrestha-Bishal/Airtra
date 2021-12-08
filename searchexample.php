<?php 
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $dbname="airtra";
$conn = mysqli_connect($servername, $username,$password,$dbname)  or die ("unable to connect");
$output='';
//collect posting of the script
if (isset($_POST['search'])) {
$searchkey = $_POST['search'];
 $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);
     $query = mysqli_query($conn,"SELECT * FROM members WHERE username LIKE '%$searchkey%' OR email LIKE '%$searchkey%'") or die("Could not search!");
     $count = mysqli_num_rows($query);
     if($count == 0){
        $output="There was no search result!";
    }else{
        while($row=mysqli_fetch_array($query)){
            $username=$row['username'];
            $email=$row['email'];
            $id= $row['id'];

            $output .='<div> '.$username.' '.$email.' </div>';
            echo "$output";
        }
}
}

?>

<!DOCTYPE html>
<html>
<body>
	<form action="searchexample.php" method="post">
		<input type="text" name="search" placeholder="Search for members" />
		<input type="submit" value=">>" />
	</form>
<?php print("$output"); ?>
</body>
</html>
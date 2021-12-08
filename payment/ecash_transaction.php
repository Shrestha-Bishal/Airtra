<?php include('../adminpanel/adminheader.php'); ?>
<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
		color:#024250  ;
		font-family: monospace;
		font-size: 15px;
		text-align: left;
	}
	th {
		background-color: #588c7e;
		color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2}
</style>


<br>
<?php
	$link = mysqli_connect('localhost', 'root', '', 'airtra');
    $errors = array();
   // if (count($errors) ==0) {
    	$query = "SELECT * FROM ecash_confirmation";
        $result=mysqli_query($link,$query);
         echo ("No.&nbsp;| 
         	eCASH username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| 
         	Amount&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp; 
         	Confirmation Code  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| 
         	Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
         	Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
         	eCASH Status|
         	AIRTRA Status"); 		echo  nl2br("\n"); echo  nl2br("\n");
        if(mysqli_num_rows($result)>0){

        	while(($row = mysqli_fetch_row($result))!=null)
	{
		$onwardFlightStatus = $row[0];
		if($onwardFlightStatus != 0)
		{
echo "<table border = '2'>";
echo "<tr>";
echo "<td>" .$row[0] ."</td>";
echo "<td>" .$row[1] ."</td>";
echo "<td>" .$row[2] ."</td>"; echo "<td>" .$row[3] ."</td>"; echo "<td>" .$row[4] ."</td>";echo "<td>" .$row[5] ."</td>"; echo "<td>" .$row[6] ."</td>"; echo "<td>" .$row[7] ."</td>";
echo "</tr>";
echo "</table>";


		echo  nl2br("\n"); 
		}

	}          echo("</tbody></table>");

        } 
                 else { echo("No eCASH Transaction");   }







?>




<?php include('../copyright.php'); ?>








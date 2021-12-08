<?php ?>
<form method="post" >
	<div class="input-group">

			<input type="text" name="number" placeholder="Airbus ID" style="height:25px" size="36" ">


			<button  name="register" value="register" class="btn">View</button>
		</div>

</form>


<?php 
if (isset($_POST['register'])) {
	$number = addslashes($_POST['number']);
$db = mysqli_connect('localhost', 'root','','airtra');
$query = "SELECT * FROM addflights WHERE flight_no='$number'";
        $result=mysqli_query($db,$query);
         echo ("Passenger Number&nbsp;| Confirmation Code &nbsp;| Passenger Name&nbsp;&nbsp;|&nbsp; Email  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| Seat No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Airbus ID&nbsp;|&nbsp; "); 		echo  nl2br("\n"); echo  nl2br("\n");
        if(mysqli_num_rows($result)>0){

        	while(($row = mysqli_fetch_row($result))!=null)
	{
		$onwardFlightStatus = $row[0];
		if($onwardFlightStatus != 0)
		{
			echo("<tr><td id='InstanceId' style=\"display: none;\"></td><td>"
		. $row[0]. "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		". $row[1]. "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row[2]. "</td><td>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row[3]. "</td><td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row[4]. "</td><td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[5]."</td><td>&nbsp;&nbsp;&nbsp;");

		echo  nl2br("\n"); echo  nl2br("\n");
		}

	}          echo("</tbody></table>");

        } 
                 else { echo("We are sorry! We do not have any onward flights for this route.");   }






}
?>









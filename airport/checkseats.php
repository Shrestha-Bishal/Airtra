<?php include('../registration/userheader.php'); ?>
<form> <div>
   <label>Airbus ID:   
  <select name="airbusid" class="form-control" placeholder="From" required>
  	<option>Select Airbus ID</option>
  	<option>----- Buddha Air -----</option>
  <option value="A302">Buddha Air A302</option>
  <option value="A305">Buddha Air A305</option>
  <option>----- Yeti Air -----</option>
  <option value="Y312"> Yeti Airlines Y312</option>
  <option value="y319"> Yeti Airlines y319</option>
  <option>----- Simrik Air -----</option>
  <option value="S104"> Simrik Air S104</option>
  <option>----- Tara Air -----</option>
  <option value="T137"> Tara Air T137</option>
  <option>----- Summit Air -----</option>
  <option value="U124"> Summit Air U124</option>
  <option>----- Fistail Air -----</option>
  <option value="F168"> Fistail Air F168</option>
  <option>----- Nepal Air -----</option>
  <option value="A147"> Nepal Air A147</option>
  <option value="N980"> Nepal Air N980</option>
  <option value="N890"> Nepal Air N890</option>
  <option>----- Makalu Air -----</option>
  <option value="M674"> Makalu Air M674 </option>
  </select>     </label>
  <label> Status:
    <select name="status" class="form-control" placeholder="From" required> </label>
    	<option value="Available">Available</option>
    </select>
            <button type="submit" name="checkseatnobtn" class="btn">Check</button>

    </div> </form>



<!--search flight -->
<?php
   if(isset($_GET['checkseatnobtn']))
  {
	$airbusid = $_GET['airbusid'];
	$status = $_GET['status'];
	
	echo("<h3>Showing Seat Availability of Airbus ID: ".$airbusid."</h3>");
  }
  ?>
</div>
<!-- Display filghts -->
<!--List reservations-->



 <?php

if (isset($_GET['checkseatnobtn'])) {
$airbusid = $_GET['airbusid'];
	$link = mysqli_connect('localhost', 'root', '', 'airtra');
    $errors = array();
   // if (count($errors) ==0) {
    	$query = "SELECT * FROM seats_availability WHERE airbus_id='$airbusid' AND status='$status'";
        $result=mysqli_query($link,$query);
        echo ("Airbus ID   &nbsp;  | Seat No  &nbsp; | Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| Flight Fare&nbsp;&nbsp;| AIRTRA Fair &nbsp;|"); echo  nl2br("\n");echo  nl2br("\n");
        if(mysqli_num_rows($result)>0){

        	while(($row = mysqli_fetch_row($result))!=null)
	{
		$onwardFlightStatus = $row[0];
		if($onwardFlightStatus != 0)
		{
			echo("<tr><td id='InstanceId' style=\"display: none;\"> &nbsp;&nbsp;&nbsp; "
		. $row[1]. "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row[2]. "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row[3]."</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row[4]."</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row[5]."" );


		echo  nl2br("\n"); echo  nl2br("\n");
		}
	}
		echo("</tbody></table>");
        } 
                 else { echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"); 
                 echo '<i style="color:blue;font-size:30px;font-family:calibri ;">
      No Seats Available for this route. </i> ';  }

}





?>
<br>
<label>Domestic Airbus cabin</label>
<p style="color: BLUE">FC: First Class | BC: Business Class | EC: Economy Class</p> <br>
<img src="../images/cabin.jpg" width="1332" height="1332" /> <br>

<?php include('../copyright.php'); ?>
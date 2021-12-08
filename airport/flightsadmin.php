<?php include('../adminpanel/adminheader.php'); ?>
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
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}</style>
<form1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a class="button" href="../airport/addflights.php">Add Flights</a> </form1> 
  <form1> <a class="button" href="../booking/airlinesnumber.php">Flight Record</a> </form1> <br> <br>
<form>
  <div>
<label>View All Flights:</label> <label>Depart:</label> <input type="Date" name="Depart" style="height: 20px"> 
<button type="submit" name="searchflightsalland" class="btn">View All Flights</button> <br><br>       </div>
      
    </form>
<?php include('flightsadminserversearch.php'); ?>


<br><br>
<label>View Ongoing Flights:</label><br>


<br>
<form>
    <!--formmethod="post" action="index.php">-->
  <!--  <style>
    body{
    background-image: url("../images/mountaino.jpg");
  }
    </style> -->
    <!--
    <label>Trip: <select name="trip" class="form-control" placeholder="trip" required="" value="<?php echo $trip; ?>"> 
<option value="oneway">One Way</option> <option value="roundtrip">Round Trip</option></select></label> 

        <label>From:    
  <select name="From" class="form-control" placeholder="From" required>
  <option value="kathmandu">Kathmandu</option>
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

  
  </select>     </label>
        <label>To:
  <select name="To" class="form-control"  placeholder="To" required>
  <option value="pokhara">Pokhara</option>
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
  </select>   </label>

        <label>Depart:</label> <input type="Date" name="Depart" style="height: 20px">
        <label>Return:</label> <input type="Date" name="Return" style="height: 20px">

  

        <button type="submit" name="searchflights" class="btn">View Flights</button>
      </div>
      
    </form>
    <br>

-->

<?php include('../search_flight.php');
//include('../search_flight_server.php');
//include('flightsadminserver.php'); ?>
<?php include('../copyright.php'); ?>
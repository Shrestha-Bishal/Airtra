<!DOCTYPE html>
<html>

<?php include('../header.php'); ?>

	<h5>Search Domestic Flights:  </h5>
<form>

    <!--formmethod="post" action="index.php">-->
  <!--  <style>
    body{
    background-image: url("../images/mountaino.jpg");
  }
    </style> -->
      <div class="input-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="radio-inline"><input type="radio" name="optradio" value="roundtrip">Round Trip</label>
    <label class="radio-inline"><input type="radio" name="optradio" value="oneway">One way</label> <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>From:    
  <select name="From" class="form-control" placeholder="From" required>
  <option value="kathmandu">Kathmandu</option>
  <option value="pokhara">Pokhara</option>
  <option value="lukla">Lukla</option>
  <option value="bharatpur">Bharatpur</option>
  <option value="nepalgunj">Nepalgunj</option>
  <option value="jumla">Jumla</option>
  <option value="talcha">Talcha (Mugu)</option>
  <option value="simikot">Simikot (Humla)</option>
  <option value="bhadrapur">Bhadrapur</option>
  <option value="biratnagar">Biratnagar</option>
  <option value="simara">Simara</option>
  <option value="janakpur">Janakpur</option>
  <option value="tumlingtar">Tumlingtar</option>
  <option value="bhojpur">Bhojpur</option>
  <option value="phalpu">Phalpu</option>
  <option value="kangeldanda">Kangel Danda</option>
  <option value="lamidanda">Lamidanda</option>
  <option value="jufal">Jufal</option>

  
  </select>     </label>
        <label>To:
  <select name="To" class="form-control"  placeholder="To" required>
  <option value="pokhara">Pokhara</option>
  <option value="lukla">Lukla</option>
  <option value="kathmandu">Kathmandu</option>
  <option value="nepalgunj">Nepalgunj</option>
  <option value="bharatpur">Bharatpur</option>
  <option value="simara">Simara</option>
  <option value="biratnagar">Biratnagar</option>
  <option value="jumla">Jumla</option>
  <option value="talcha">Talcha (Mugu)</option>
  <option value="simikot">Simikot (Humla)</option>
  <option value="bhadrapur">Bhadrapur</option>
  <option value="bhojpur">Bhojpur</option>
  <option value="phalpu">Phalpu</option>
  <option value="kangeldanda">Kangel Danda</option>
  <option value="lamidanda">Lamidanda</option>
  <option value="janakpur">Janakpur</option>
  <option value="tumlingtar">Tumlingtar</option>
  <option value="jufal">Jufal</option>
  </select>   </label>

        <label>Depart:</label> <input type="Date" name="Depart" style="height: 20px">
        <label>Return:</label> <input type="Date" name="Return" style="height: 20px">
        <label>Guests:
  <select name="Guests" class="form-control"  placeholder="Guests" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

 </select>    </label>
        <label>Cabin Class:
         <select name="seatclass" class="form-control" placeholder="seatclass" required>
          <option value="firstclass">First Class</option>
          <option value="businessclass">Business Class</option>
          <option value="economyclass">Economy Class</option>           
         </select>        </label>

        <button type="submit" name="searchflights" class="btn">Search Flights</button>
      </div>
      
    </form>
    <br>

<?php include('../search_flight_server.php'); ?>


<label>Domestic Flights</label> <br> <img src="../images/domestic_nepal.jpg" width="1332" height="396" > 
<p>Domestic Flights via AirTra provides all the domestic sector flights ticket in Nepal for your Journey. Traveling by Vehicle in Nepal may not be comfortable and reliable , it may take long time to reach destination so travelling by domestic flights & Airlines in Nepal is secure and comfortable and can save you your valuable time. Also Domestic Flights gives you access to lots of remotes area in Nepal where you can travel only by flights and no other transportation so AirTra access you all the domestic sector by  providing  you domestic Airlines ticket at affordable cost.</p> 
<body>
<a href="bookdomesticflight.php"><p style="font-size: 14px; color: Blue; font-weight: bold;font-style: italic;"> Kathmandu-Pokhara Flight</p></a>
	<p>Kathmandu Pokhara Flights are a short 25 minutes flight from Kathmandu Airport. You can catch daily Kathmandu Pokhara flights from Morning 8.30 AM to 16.00 PM in the evening.You can take this Kathmanu Pokhara flights making your journey short and comfortable with beauty of Dhaulagiri, Annapurna, Fishtail and Manaslu Range as well as surrounding peaks.</p>
	<a href="bookdomesticflight.php"><p style="font-size: 14px; color: Blue; font-weight: bold;font-style: italic;"> Kathmandu Bhairahwa Flight</p></a>
	<p>Kathmandu Bhairahawa Flight takes 40 minutes from Kathmandu to get Bhairahawa. Yeti Airlines, Buddha Air & Simrik Airlines are operation flight for this Kathmandu to Bhairahawa or Bhairahawa Sector in daily basis. Kathmandu Bhairahawa Flights gives you and quick access into Lumbini.</p>
	<a href="bookdomesticflight.php"><p style="font-size: 14px; color: Blue; font-weight: bold;font-style: italic;"> Kathmandu Lukla Flight</p></a> 
	<p>Kathmandu Lukla Flights are only of 35 minutes in air which gives you access to Lukla, starting point of Khumbu region.Tara Air, Agni Air, Sita Air, Goma Air & Nepal Airlines are operating this Kathmandu Lukla flights daily between 6.30 AM to 12.00 PM.</p>
	<a href="bookdomesticflight.php"><p style="font-size: 14px; color: Blue; font-weight: bold;font-style: italic;"> Kathmandu Bharatpur Flight</p></a>
	<p>Kathmandu Bharatpur flights is of only 25 minutes giving you instant access to famous Chitwan of Nepal. Kathmandu Bharatpur flights is very short and comfortable than travelling by road which gives you plenty of time to visit Chitwan National Park. These Kathmandu to Bharatpur flights are reliable, quick and time saving operated Yeti Airlines and Buddha Air twice a day.</p>
</body>
</html><style type=""></style>

<?php echo file_get_contents('../copyright.php')?>


<!DOCTYPE html>
<html>
  <head>

	
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 98%;
	width: 100%;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBABGScJQIfCPdEHscp_YPmr79uAtdYU-k&sensor=false&region=IN"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 4,
    center: new google.maps.LatLng(27, 75),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

    
}
function get_marker(lat,lon) {
var myLatlng = new google.maps.LatLng(lat,lon);
 var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
var infowindow = new google.maps.InfoWindow({
      content: 'My lat is ' + lat + 'My lon is ' + lon
  });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

function codeAddress(address) {
  var geocoder;
   geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          title: address
      });
      var infowindow = new google.maps.InfoWindow({
      content: address
  });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
codeAddress('RAJASTHAN');
    </script>
  </head>
  <body>


   <?php
	$host = mysqli_connect("localhost", "AnAnt", "AnAnt", "AnAnt");
	if(mysqli_connect_errno($host)) {
	    echo "Not connected to database";
	}

	
	$result = mysqli_query($host, "SELECT DISTINCT State FROM DATA12 WHERE Contamination='Arsenic' LIMIT 0,10");
	 
	while($row = mysqli_fetch_array($result))

	
	{
?>
	<script>
		codeAddress('<?php echo $row["State"]; ?>');
	</script>
    <?php

	}
    ?>

	<div id="map-canvas"></div> 
	<div>
	<input type="checkbox" value="Arsenic" name="contamination" checked>Arsenic</input>
	<input type="checkbox" value="Chlorine" name="contamination">Chlorine</input>
	<input type="checkbox" value="Flourine" name="contamination">Flouride</input>
	<input type="checkbox" value="Iron" name="contamination">Iron</input>
	<input type="checkbox" value="Nitrate" name="contamination">Nitrate</input>
	<input type="checkbox" value="Salinity" name="contamination">Salinity</input>
	</div>
  </body>
</html>

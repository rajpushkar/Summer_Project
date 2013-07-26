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
    center: new google.maps.LatLng(25, 80),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);


var mark_ars = new Array();
var mark_chl = new Array();
var mark_flu = new Array();
var mark_iro = new Array();
var mark_nit = new Array();
var mark_sal = new Array();


function codeLatLong(lat, lng, state, contamination) {
	mylatlong = new google.maps.LatLng(lat, lng)
	switch(contamination)
	{
	case "arsenic":
	     var marker = new google.maps.Marker({
        position: mylatlong ,
        map: map,
        title: state,
        icon: 'blue_MarkerA.png'
	});
	
	mark_ars.push(marker)
	break;
	
	
	case "chlorine":
	     var marker = new google.maps.Marker({
        position: mylatlong ,
        map: map,
        title: state,
        icon: 'darkgreen_MarkerC.png'
	});
	
	mark_chl.push(marker)
	marker.setVisible(false);
	break;
	
	case "fluoride":
	     var marker = new google.maps.Marker({
        position: mylatlong ,
        map: map,
        title: state,
        icon: 'green_MarkerF.png'
	});
	
	mark_flu.push(marker)
	marker.setVisible(false);
	break;
	
	case "iron":
	     var marker = new google.maps.Marker({
        position: mylatlong ,
        map: map,
        title: state,
        icon: 'brown_MarkerI.png'
	});
	
	mark_iro.push(marker)
	marker.setVisible(false);
	break;
	
	case "nitrate":
	     var marker = new google.maps.Marker({
        position: mylatlong ,
        map: map,
        title: state,
        icon: 'paleblue_MarkerN.png'
	});
	
	mark_nit.push(marker)
	marker.setVisible(false);
	break;
	
	case "salinity":
	     var marker = new google.maps.Marker({
        position: mylatlong ,
        map: map,
        title: state,
        icon: 'yellow_MarkerS.png'
	});
	
	mark_sal.push(marker)
	marker.setVisible(false);
	break;
	}
}

<?php
	$host = mysqli_connect("localhost", "AnAnt", "AnAnt", "AnAnt");
	
	
	$arsenic = mysqli_query($host, "SELECT DISTINCT State FROM DATA12 WHERE Contamination='Arsenic'");
	$chlorine = mysqli_query($host, "SELECT DISTINCT State FROM DATA12 WHERE Contamination='Chloride'");
	$fluorine = mysqli_query($host, "SELECT DISTINCT State FROM DATA12 WHERE Contamination='Fluoride'");
	$iron = mysqli_query($host, "SELECT DISTINCT State FROM DATA12 WHERE Contamination='Iron'");
	$nitrate = mysqli_query($host, "SELECT DISTINCT State FROM DATA12 WHERE Contamination='Nitrate'");
	$salinity = mysqli_query($host, "SELECT DISTINCT State FROM DATA12 WHERE Contamination='Salinity'");

// -------------   Marker Creating Functions Start---------------------//
	 
	while($row = mysqli_fetch_array($arsenic))

	
	{
		$latlong = mysqli_query($host, "SELECT * FROM state_data1 WHERE State='$row[State]'");
		$latlongrow = mysqli_fetch_array($latlong);
		
?>
	
		codeLatLong(<?php echo $latlongrow['Latitude'] . ", " . $latlongrow['Longitude'];?>, '<?php echo $row[State]; ?>', 'arsenic');
		
	
    <?php

	}
    
    
    while($row = mysqli_fetch_array($chlorine))

	
	{
		$latlong = mysqli_query($host, "SELECT * FROM state_data1 WHERE State='$row[State]'");
		$latlongrow = mysqli_fetch_array($latlong);
		
	?>
	
		codeLatLong(<?php echo $latlongrow['Latitude'] . ", " . $latlongrow['Longitude'];?>, '<?php echo $row[State]; ?>', 'chlorine');
		
	
    <?php

	}
	
	
	
	
	
	
	    while($row = mysqli_fetch_array($fluorine))

	
	{
		$latlong = mysqli_query($host, "SELECT * FROM state_data1 WHERE State='$row[State]'");
		$latlongrow = mysqli_fetch_array($latlong);
		
	?>
	
		codeLatLong(<?php echo $latlongrow['Latitude'] . ", " . $latlongrow['Longitude'];?>, '<?php echo $row[State]; ?>', 'fluoride');
		
	
    <?php

	}
	
	
	
	
	
	
	    while($row = mysqli_fetch_array($iron))

	
	{
		$latlong = mysqli_query($host, "SELECT * FROM state_data1 WHERE State='$row[State]'");
		$latlongrow = mysqli_fetch_array($latlong);
		
	?>
	
		codeLatLong(<?php echo $latlongrow['Latitude'] . ", " . $latlongrow['Longitude'];?>, '<?php echo $row[State]; ?>', 'iron');
		
	
    <?php

	}
	
	
	
	
	
	    while($row = mysqli_fetch_array($nitrate))

	
	{
		$latlong = mysqli_query($host, "SELECT * FROM state_data1 WHERE State='$row[State]'");
		$latlongrow = mysqli_fetch_array($latlong);
		
	?>
	
		codeLatLong(<?php echo $latlongrow['Latitude'] . ", " . $latlongrow['Longitude'];?>, '<?php echo $row[State]; ?>', 'nitrate');
		
	
    <?php

	}
	
	
	
	
	
	    while($row = mysqli_fetch_array($salinity))

	
	{
		$latlong = mysqli_query($host, "SELECT * FROM state_data1 WHERE State='$row[State]'");
		$latlongrow = mysqli_fetch_array($latlong);
		
	?>
	
		codeLatLong(<?php echo $latlongrow['Latitude'] . ", " . $latlongrow['Longitude'];?>, '<?php echo $row[State]; ?>', 'salinity');
		
	
    <?php

	}	
	
	
	
	
	
	
	
	
    ?>

// -------------   Marker Creating Functions End---------------------//

document.getElementById('arsenic').onchange=Hide_ars;
//document.getElementById('chlorine').onchange=Hide_chl;
document.getElementById('fluoride').onchange=Hide_flu;
document.getElementById('iron').onchange=Hide_iro;
document.getElementById('nitrate').onchange=Hide_nit;
document.getElementById('salinity').onchange=Hide_sal;    
var j;


// -------------   Marker Hiding Functions Start---------------------//
function Hide_ars(e) {
	    if(this.checked){	
		for(j=0;j<mark_ars.length;j++)
		mark_ars[j].setVisible(true);
    } else {
	for(j=0;j<mark_ars.length;j++)
    	mark_ars[j].setVisible(false);
	}
}

function Hide_chl(e) {
	    if(this.checked){	
		for(j=0;j<mark_chl.length;j++)
		mark_chl[j].setVisible(true);
    } else {
	for(j=0;j<mark_chl.length;j++)
    	mark_chl[j].setVisible(false);
	}
}

function Hide_flu(e) {
	    if(this.checked){	
		for(j=0;j<mark_flu.length;j++)
		mark_flu[j].setVisible(true);
    } else {
	for(j=0;j<mark_flu.length;j++)
    	mark_flu[j].setVisible(false);
	}
}

function Hide_iro(e) {
	    if(this.checked){	
		for(j=0;j<mark_iro.length;j++)
		mark_iro[j].setVisible(true);
    } else {
	for(j=0;j<mark_iro.length;j++)
    	mark_iro[j].setVisible(false);
	}
}

function Hide_nit(e) {
	    if(this.checked){	
		for(j=0;j<mark_nit.length;j++)
		mark_nit[j].setVisible(true);
    } else {
	for(j=0;j<mark_nit.length;j++)
    	mark_nit[j].setVisible(false);
	}
}

function Hide_sal(e) {
	    if(this.checked){	
		for(j=0;j<mark_sal.length;j++)
		mark_sal[j].setVisible(true);
    } else {
	for(j=0;j<mark_sal.length;j++)
    	mark_sal[j].setVisible(false);
	}
}
}

// -------------   Marker Hiding Functions End---------------------//

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>


   
	<div id="map-canvas"></div> 
	<div>
	<input type="checkbox" id="arsenic" checked="checked">Arsenic</input>
	<input type="checkbox" id="fluoride">Fluoride</input>
	<input type="checkbox" id="iron">Iron</input>
	<input type="checkbox" id="nitrate">Nitrate</input>
	<input type="checkbox" id="salinity">Salinity</input>
	</div>
  </body>
</html>

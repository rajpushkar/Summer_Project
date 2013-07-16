
			    var map;
			    function initialize() {
			    var mapOptions = {
			    zoom: 5,
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
			    get_marker(28.00, 80.00);
  

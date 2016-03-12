var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 23.2836, lng: 79.2318},
		zoom: 6,
		mapTypeControl: false
	});
	
	//Marker and their infowindow Code Starts for locating munis
	var locations = $("#munilocations").val();
	locations = JSON.parse(locations);
	//alert(locations);
	var munimarker, i, content;
	var infowindow = new google.maps.InfoWindow();
	
	for (i = 0; i < locations.length; i++) {
		//Markers
		munimarker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i]['lat'], locations[i]['lng']),
			map: map,
			//title: 'Jai Jinendra!'
		});
		//Infowindow
		google.maps.event.addListener(munimarker, 'click', (function(munimarker, i) {
			return function() {
				content = '<a href="munis.php?id=' + locations[i]['id'] + '"><center><img width="200px" src="' + locations[i]['img'];
				content += '" /><p>' + locations[i]['uname'] + ' ' + locations[i]['prefix'] + ' ';
				content += locations[i]['name'] + ' ' + locations[i]['suffix'] + '</p><p>';
				content += locations[i]['location'] + '</p></center></a>';
				infowindow.setContent(content);
				infowindow.open(map, munimarker);
			}
		})(munimarker, i));
	}
	
	//Usermarkers and their infowindows
	var usermarker;
	var userlocations = JSON.parse($("#userlocations").val());
	for (i = 0; i < userlocations.length; i++) {
		//Markers
		usermarker = new google.maps.Marker({
			position: new google.maps.LatLng(userlocations[i]['userlat'], userlocations[i]['userlng']),
			map: map,
		});
		//User Infowindow
		google.maps.event.addListener(usermarker, 'click', (function(usermarker, i) {
			return function() {
				content = '<center><img src="' + userlocations[i]['userimg'];
				content += '" /><p>' + userlocations[i]['username'] + '</p><p>';
				content += userlocations[i]['userlocation'] + '</p></center>';
				infowindow.setContent(content);
				infowindow.open(map, usermarker);
			}
		})(usermarker, i));
	}
	
	// Create the search box and link it to the UI element.
	var input = document.getElementById('pac-input');
	var searchBox = new google.maps.places.SearchBox(input);
	map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
	
	// Bias the SearchBox results towards current map's viewport.
	map.addListener('bounds_changed', function() {
		searchBox.setBounds(map.getBounds());
	});
	
	var markers = [];
	// Listen for the event fired when the user selects a prediction and retrieve
	// more details for that place.
	searchBox.addListener('places_changed', function() {
		var places = searchBox.getPlaces();
		
		if (places.length == 0) {
			return;
		}
		
		// Clear out the old markers.
		markers.forEach(function(marker) {
			marker.setMap(null);
		});
		markers = [];
		
		// For each place, get the icon, name and location.
		var bounds = new google.maps.LatLngBounds();
		places.forEach(function(place) {
			var icon = {
				url: place.icon,
				size: new google.maps.Size(71, 71),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(17, 34),
				scaledSize: new google.maps.Size(25, 25)
			};
			
			// Create a marker for each place.
			markers.push(new google.maps.Marker({
				map: map,
				icon: icon,
				title: place.name,
				position: place.geometry.location
			}));
			
			if (place.geometry.viewport) {
				// Only geocodes have viewport.
				bounds.union(place.geometry.viewport);
			} else {
				bounds.extend(place.geometry.location);
			}
		});
		map.fitBounds(bounds);
	});
	
}

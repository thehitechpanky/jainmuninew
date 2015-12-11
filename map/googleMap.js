var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 23.2836, lng: 79.2318},
		zoom: 6,
		mapTypeControl: false
	});
	
	//Marker and their infowindow Code Starts for locating munis
	var locations = $("#array").val();
	locations = JSON.parse(locations);
	//alert(locations);
	var marker, i, content;
	var infowindow = new google.maps.InfoWindow();
	for (i = 0; i < locations.length; i++) {
		//Markers
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i]['lat'], locations[i]['lng']),
			map: map,
			//title: 'Jai Jinendra!'
		});
		//Infowindow
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				content = '<a href="munis.php?id=' + locations[i]['id'] + '"><center><img width="200px" src="' + locations[i]['img'];
				content += '" /><br />' + locations[i]['uname'] + ' ' + locations[i]['prefix'] + ' ';
				content += locations[i]['name'] + ' ' + locations[i]['suffix'] + '<br />';
				content += locations[i]['location'] + '</center></a>';
				infowindow.setContent(content);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}

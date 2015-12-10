var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 23.2836, lng: 79.2318},
		zoom: 6,
		mapTypeControl: false
	});
	
	//Marker and their infowindow Code Starts for locating munis
	var locations = $("#array").val();
	//alert(locations);
	var marker, i;
	for (i = 0; i < locations.length; i++) {
		//Markers
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			//title: 'Jai Jinendra!'
		});
	}
}

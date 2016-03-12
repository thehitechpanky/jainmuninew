//navigator.geolocation.getCurrentPosition(function(position) {
//	var userlat = position.coords.latitude;
//	var userlng = position.coords.longitude;
//});				
function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	var profile = googleUser.getBasicProfile();
	
	// The ID token you need to pass to your backend:
	var id_token = googleUser.getAuthResponse().id_token;
	var username = profile.getName();
	var email = profile.getEmail();	
	var userimg = profile.getImageUrl();
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "map/updateLocation.php?email=" + email + "&username=" + username + "&userimg=" + userimg , true);
		xmlhttp.send();
		return false;
		//alert("Hello");
	}
};

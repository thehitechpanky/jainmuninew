// Load Function
$(document).ready(function(){
	
	showSearchMuniResults($('#searchMunis').val());
	
	$('#searchMunis').keyup(function() {
		showSearchMuniResults(this.value);
	});
	
	$('#searchMunis').bind('input propertychange', function() {
		showSearchMuniResults(this.value);
	});
	
}); // End Document ready

function showSearchMuniResults(str) {
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		SearchMuniResults = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		SearchMuniResults = new ActiveXObject("Microsoft.XMLHTTP");
	}
	SearchMuniResults.onreadystatechange = function() {
		if (SearchMuniResults.readyState == 4 && SearchMuniResults.status == 200) {
			document.getElementById("searchResults").innerHTML = SearchMuniResults.responseText;
		}
	}
	SearchMuniResults.open("GET","munis/searchMunis.php?searchInput="+str,true);
	SearchMuniResults.send();
}

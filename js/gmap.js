var map = null;

function initialize(Lat,Lng) {
	var latlng = new google.maps.LatLng(36.13852,-95.945941);
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
		}
	};

	map = new google.maps.Map(document.getElementById("map-canvas"),myOptions);
	var contentString = '<div class="gmap-content"><h2>Great Space Tulsa</h2><p>Midtown | Florence Park | Fairgrounds</p></div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		position: latlng, 
		map: map
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});

}
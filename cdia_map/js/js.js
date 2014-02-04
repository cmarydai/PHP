var center = new google.maps.LatLng(42.5580, -70.8800);

var mapOptions = {
	center: center,
	zoom: 9,
	mapTypeId: google.maps.MapTypeId.ROADMAP
}

var map = new google.maps.Map($('#map').get(0), mapOptions);


var createMarker = function(user) {
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(users[i].latitude, users[i].longitude),
		map: map,
	});

	var infoWindow = new google.maps.InfoWindow({
		content: user.first_name + ' ' + user.last_name + '<br>' + user.city + ', ' + user.state
	});

	google.maps.event.addListener(marker, 'click', function() {
		infoWindow.open(map, marker)
	});
}

for (var i = 0; i < users.length; i++) {
	createMarker(users[i]);
}

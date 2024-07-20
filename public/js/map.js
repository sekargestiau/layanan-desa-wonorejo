let map;
let directionService = new google.maps.DirectionsService();
let directionDisplay = new google.maps.DirectionsRenderer();


map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 10.762622, lng: 106.660172},
    zoom: 13
});
directionDisplay.setMap(map);

//get current location
let origin = navigator.geolocation.getCurrentPosition(function(position) {
    let pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
    };
    map.setCenter(pos);
    let marker = new google.maps.Marker({
        position: pos,
        map: map
    });
    return pos;
});

let destination = {lat: 10.762622, lng: 106.660172};
let searchBtn = document.getElementById('searchBtn');
searchBtn.addEventListener('click', function() {
    let request = {
        origin: origin,
        destination: destination,
        travelMode: 'DRIVING'
    };
    directionService.route(request, function(result, status) {
        if (status == 'OK') {
            directionDisplay.setDirections(result);
        }
    });
}); 
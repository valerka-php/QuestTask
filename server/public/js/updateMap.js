function initMap() {

    let location = {}

    if (document.getElementById('lat').value.length > 1){
        location.lat = Number(document.getElementById('lat').value)
        location.lng = Number(document.getElementById('lng').value)
    }else {
        location = {lat: 50.44220145033611 ,lng: 30.51659655425707}
    }

    const map = new google.maps.Map(document.getElementById("map"), {
        center: location,
        zoom: 12,
        mapId: "4504f8b37365c3d0",
    });

    let marker;
    addMarker(location);

    function addMarker(location) {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
        document.getElementById('lat').value = location.lat;
        document.getElementById('lng').value = location.lng;
    }

    google.maps.event.addListener(map, 'click', (event) => {
        location = event.latLng.toJSON();
        if (marker) {
            marker.setMap(null)
        }
        addMarker(location);
    })
}

window.initMap = initMap;
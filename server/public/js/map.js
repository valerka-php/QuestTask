/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        center: {lat: 49.988461, lng: 36.232668},
        zoom: 12,
        mapId: "4504f8b37365c3d0",
    });

    let marker;

    function addMarker(location) {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
        document.getElementById('lat').value = location.lat;
        document.getElementById('lng').value = location.lng;
    }

    let location = {};

    google.maps.event.addListener(map, 'click', (event) => {
        location = event.latLng.toJSON();
        if (marker) {
            marker.setMap(null)
        }
        addMarker(location);
    })
}

window.initMap = initMap;

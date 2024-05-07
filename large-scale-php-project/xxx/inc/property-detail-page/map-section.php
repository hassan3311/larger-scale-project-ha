<div id="map-section" class="map-section">
    <div class="block">
        <h3 class="title">Map</h3>
        <div id="map" class="map-section-map"></div>
        <script>

            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 25.9063344, lng: -80.1406093},
                    zoom: 13,
                    styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#8a8a8a"
                        },
                        {
                            "visibility": "on"
                        },
                        {
                            "weight": "1"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "off"
                        },
                        {
                            "hue": "#00ff07"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "labels",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "labels.icon",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "labels.icon",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.attraction",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.attraction",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.attraction",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.attraction",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.attraction",
                        "elementType": "labels.icon",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "hue": "#15ff00"
                        },
                        {
                            "saturation": "12"
                        },
                        {
                            "lightness": "18"
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "simplified"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#ffffff"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#ffffff"
                        }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        },
                        {
                            "color": "#dcdbdb"
                        }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "lightness": "21"
                        }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "transit.station.rail",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "transit.station.rail",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                        {
                            "color": "#97dbf6"
                        },
                        {
                            "visibility": "on"
                        }
                        ]
                    }
                    ]
                });
var iconBase = 'img/';
var marker = new google.maps.Marker({
    position: map.getCenter()   ,
    map: map,
    icon: iconBase + 'custom-marker-1.png'
});
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdrr3svaBGQSk1KVB8FhuFP0MlJaZifU0&callback=initMap"
async defer></script>
</div><!-- block -->
</div>
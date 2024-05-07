<div id="map"></div>
<style type="text/css">
#map{
  height: 100%;
  width: 100%;
}
</style>

<script>

    var marker;

    function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: {lat: 25.838706, lng: -80.131114},
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

        var contentString = '<div id="google-maps-info-window">'+
        '<div class="item-wrap item-grid-view">'+
        '<div class="media property-item">'+
        '<div class="media-left">'+
        '<div class="item-media item-media-thumb">'+
        '<a href="#" class="hover-effect"><img class="img-responsive" src="img/image-450x300.png" width="450" height="300" alt="Thumb"></a>'+
        '<div class="item-media-price">'+
        '<span class="item-price"><sup>$</sup>375<sub>/night</sub></span>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '<div class="media-body item-body clearfix">'+
        '<div class="item-title-head">'+
        '<div class="title-head-left">'+
        '<h2 class="title">'+
        '<a href="#">Ocen View Apartment With Pool</a></h2>'+
        '</div>'+
        '</div>'+
        '<ul class="item-amenities">'+
        '<li><i class="homey-icon homey-icon-hotel-double-bed"></i><span id="total-beds">2</span></li>'+
        '<li><i class="homey-icon homey-icon-bathroom-shower-1"></i><span id="total-baths">1</span></li>'+
        '<li><i class="homey-icon homey-icon-multiple-man-woman-2"></i><span id="total-guests">4</span></li>'+
        '<li class="item-type">Property Type</li>'+
        '</ul>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            
        });

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: 25.838706, lng: -80.131114}
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

    }



    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?&callback=initMap"
async defer></script>
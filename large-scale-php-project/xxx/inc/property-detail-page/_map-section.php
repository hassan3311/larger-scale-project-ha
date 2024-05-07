<div class="block">
    <div class="block-section">
        <div class="block-body">
            <div class="block-left">
                <h2 class="title">Map</h2>
            </div><!-- block-left -->
            <div class="block-right">
                <div class="block-map">
                    <div id="map" class="map-section-map"></div>
                    <script>

                        var map;
                        function initMap() {
                            map = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: 25.9063344, lng: -80.1406093},
                                zoom: 13,
                                styles: [
                                {
                                    "elementType": "labels.text",
                                    "stylers": [
                                    {
                                        "weight": 5
                                    }
                                    ]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                    {
                                        "color": "#f5f7ff"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                    {
                                        "color": "#84dcff"
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
                </div>
            </div><!-- block-right -->
        </div><!-- block-body -->
    </div><!-- block-section -->
</div><!-- block -->
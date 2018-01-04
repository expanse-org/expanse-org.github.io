$(window).load(function() {
    "use strict";
    
    function fullScreenContainer() {
    
        var screenWidth = $(window).width() / 2 + "px";
        var screenHeight = $(window).height() + "px";
        
        $("#map").css({
        width: screenWidth,
        height: screenHeight
        });
        
        $(window).resize( function () {
        
        var screenWidth = $(window).width() / 2 + "px";
        var screenHeight = $(window).height() + "px";
        
        $("#map").css({
        width: screenWidth,
        height: screenHeight
        });
        
        });
    
    }

    fullScreenContainer();

});

// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);
google.maps.event.addDomListener(window, 'resize', init);

function init() {

    // Basic options for a simple Google Map
    // The latitude and longitude to center the map (always required)
    var center = new google.maps.LatLng(40.70820, -74.00487);
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var isDraggable = $(document).width() > 1024 ? true : false; // If document (your website) is wider than 1024px, isDraggable = true, else isDraggable = false

    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 11,
        scrollwheel: false,
        draggable: isDraggable,
        center: center,

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{
            "featureType": "administrative",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "lightness": 33
            }]
        }, {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [{
                "color": "#f2f3f7"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#c5dac6"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "labels",
            "stylers": [{
                "visibility": "on"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{
                "lightness": 20
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                "color": "#c5c6c6"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e4d7c6"
            }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#fbfaf7"
            }]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#acbcc9"
            }]
        }]
    };

    var map = new google.maps.Map(document.getElementById('map'), mapOptions, center);

    var locations = [
        ['<h6>Bondi Beach, East Coast</h6><p>This is where we are currently, the sun goes down...<br><i class="fa fa-coffee"></i> Visit us, we pay the coffee!</p>', 40.70820, -74.00487, 1],
        ['<h6>Coogee Beach, East Coast</h6><p>Opening Hours<br><i class="fa fa-clock-o"></i> 8:00 to 22:00</p>', 40.66810, -73.94480, 2],
        ['<h6>Manly Beach, East Coast</h6><p>Opening Hours<br><i class="fa fa-clock-o"></i> 6:00 to 14:00</p>', 40.76759, -73.96756, 3],
        ['<h6>Maroubra Beach, East Coast</h6><p>Opening Hours<br><i class="fa fa-clock-o"></i> 12:00 to 23:30</p>', 40.66429, -74.11469, 4]
    ];

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var image = 'img/logo-map.png';

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: image
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}
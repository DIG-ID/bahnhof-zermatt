(function( $ ) {
  /**
   * initMap
   *
   * Renders a Google Map onto the selected jQuery element
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @return  object The map instance.
   */
  function initMap( $el ) {
    // Find marker elements within map.
    var $markers = $el.find('.marker');

    var styles = [
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "color": "#ababab"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#808080"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative.country",
        "elementType": "labels.icon",
        "stylers": [
          {
            "color": "#ededed"
          }
        ]
      },
      {
        "featureType": "administrative.country",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#ededed"
          }
        ]
      },
      {
        "featureType": "administrative.country",
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "landscape",
        "stylers": [
          {
            "color": "#ededed"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
          {
            "color": "#adadad"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#adadad"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.stroke",
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
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#808080"
          }
        ]
      }
    ];


    // Create gerenic map.
    var mapArgs = {
      zoom: $el.data('zoom') || 16,
      styles: styles,
      mapTypeId   : google.maps.MapTypeId.ROADMAP,
      zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP,
      },
      streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP,
      },
      fullscreenControl: false,
      //mapTypeControl: false,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        position: google.maps.ControlPosition.TOP_RIGHT,
        mapTypeIds: ["roadmap", "terrain"],
      },
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
      initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
  }

  /**
   * initMarker
   *
   * Creates a marker for the given jQuery element and map.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @param   object The map instance.
   * @return  object The marker instance.
   */
  function initMarker( $marker, map ) {
    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
      lat: parseFloat( lat ),
      lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
      position : latLng,
      map: map,
      /*icon: {
        url: "https://boccogroup.com/wp-content/uploads/icon.png",
      }*/
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

      // Create info window.
      var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
      });

      // Show info window when marker is clicked.
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open( map, marker );
      });
    }
  }

  /**
   * centerMap
   *
   * Centers the map showing all markers in view.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   object The map instance.
   * @return  void
   */
  function centerMap( map ) {
    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
      bounds.extend({
        lat: marker.position.lat(),
        lng: marker.position.lng()
      });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
      map.setCenter( bounds.getCenter() );
    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
  }

  //prevent google fonts request
  function removeGoogleMapFont() {
    var head = document.getElementsByTagName('head')[0];
    // Save the original method
    var insertBefore = head.insertBefore;
    // Replace it!
    head.insertBefore = function (newElement, referenceElement) {
      if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') > -1 || newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Google+Sans+Text') > -1  ) {
        //console.info('Prevented Roboto and Google Sans Text from loading!');
        return;
      }
      insertBefore.call(head, newElement, referenceElement);
    };
  }

  // Render maps on page load.
  $(function(){
    $('.acf-map').each(function(){
      //removeGoogleMapFont();
      var map = initMap( $(this) );
    });
  });

})(jQuery);
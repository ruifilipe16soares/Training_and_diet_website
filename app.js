navigator.geolocation.getCurrentPosition(
    function (position) {
      initMap(position.coords.latitude, position.coords.longitude);
    },
    function errorCallback(error) {
      console.log(error);
    }
  );
  
  function initMap(lat, lng) {
    document.getElementById("latitude").innerHTML = lat;
    document.getElementById("longitude").innerHTML = lng;
  
    var myLatLng = {
      lat: lat,
      lng: lng,
    };
  
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: myLatLng,
    });
  
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
    });
  
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(
      {
        location: myLatLng,
        radius: 1000, // Search radius in meters
        type: ["gym"], // Search for gyms
      },
      function (results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          // Mark the nearest gym on the map
          var nearestGym = results[0];
          var gymMarker = new google.maps.Marker({
            position: nearestGym.geometry.location,
            map: map,
            icon: {
              url: "https://maps.google.com/mapfiles/ms/icons/green-dot.png",
              scaledSize: new google.maps.Size(32, 32), // Set the size of the marker
              scale: 1, // Set the scale to 1 (same size as default marker)
            },
          });
        }
      }
    );
  }
  
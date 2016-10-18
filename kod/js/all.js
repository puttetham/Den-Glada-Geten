// karta
var map;
var stockholm = {lat: 59.240, lng: 17.994};

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: stockholm,
    zoom: 11,
    scrollwheel: false

  });
  var marker = new google.maps.Marker({
      position: stockholm,
      map: map
  });
}

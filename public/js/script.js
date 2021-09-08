// Init googlt map
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 21.0279065, lng: 105.7767042 },
    zoom: 15,
  });
}
//end
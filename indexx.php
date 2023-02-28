<?php
session_start();
$db = mysqli_connect("localhost","root","","db_evplug");
$sid = $_REQUEST['id'];
$locationquery = mysqli_query($db,"SELECT latitude, longitude from tbl_station where stationId=$sid");
$row = mysqli_fetch_assoc($locationquery);
$latitude = $row['latitude'];
$longitude = $row['longitude'];
if($row){
  echo "";
}
else{
  echo '<script type="text/javascript">alert("No location details added");</script>'; 
}
?>

<html>
  <head>
    <title>Lat/Lng Object Literal</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="module">
      // In this example, we center the map, and add a marker, using a LatLng object
// literal instead of a google.maps.LatLng object. LatLng object literals are
// a convenient way to add a LatLng coordinate and, in most cases, can be used
// in place of a google.maps.LatLng object.
let map;
window.initMap = initMap;
function initMap() {
  var lat = <?php echo $latitude ?> 
  var lng = <?php echo $longitude ?> 
  const mapOptions = {
    zoom: 16,
    center: { lat: lat, lng: lng },
  };

  map = new google.maps.Map(document.getElementById("map"), mapOptions);

  const marker = new google.maps.Marker({
    // The below line is equivalent to writing:
    // position: new google.maps.LatLng(-34.397, 150.644)
    position: { lat: lat, lng: lng },
    map: map,
  });
//   // You can use a LatLng literal in place of a google.maps.LatLng object when
//   // creating the Marker object. Once the Marker object is instantiated, its
//   // position will be available as a google.maps.LatLng object. In this case,
//   // we retrieve the marker's position using the
//   // google.maps.LatLng.getPosition() method.
  const infowindow = new google.maps.InfoWindow({
    content: "<p>Marker Location:" + marker.getPosition() + "</p>",
  });

  google.maps.event.addListener(marker, "click", () => {
    infowindow.open(map, marker);
  });


}
    </script>
  </head>
  <body>
    <div id="map"></div>

    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises
      with https://www.npmjs.com/package/@googlemaps/js-api-loader.
      -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbWQq2KjAtOBGzOG2Uq51RXnGPFc0atzg&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>
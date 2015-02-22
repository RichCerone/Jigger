<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script>
function geolocate() {
  var input = document.getElementById('addr');
  var optns = {
      types: ['address']
  };
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
    var geolocation = new google.maps.LatLng(
        position.coords.latitude, position.coords.longitude);
    ac = new google.maps.places.Autocomplete(input, optns).setBounds(new google.maps.LatLngBounds(geolocation, geolocation));

      });
    }
}

function placeMarker(location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}
function showPosition(position){
     lat = position.coords.latitude.toString().substr(0,8);
     longi = position.coords.longitude.toString().substr(0,8);
     console.log("lat " + lat);
     console.log("long " + longi);
    var mapOptions = {
      center : new google.maps.LatLng(lat,longi),
      zoom : 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
     map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    var latlng = new google.maps.LatLng(lat,longi);
    google.maps.event.addListener(map, 'click', function(event) {
       placeMarker(event.latLng);
    });
}
$(document).ready(function(){
  geolocate();
  if (navigator.geolocation){
    geolocate();
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  var $postp = $('#post');
  var $postform = $('#postform');
  $postp.click(function(event){
    event.preventDefault();
      $postform.show();
  });
});


</script>
<!--Author: Richard Cerone and Matthew Cieslak-->
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <header>
         <title>Jigger, It's Party Time</title>
    </header>
    <body>
      <center>
        <h1>Jigger</h1>
        <h6>It's Party Time</h6>
        <div class="panel panel-default">
  <div class="panel-body">
<div class="btn-group btn-group-lg" role="group" aria-label="...">
 <button type="button" class="btn btn-default">Parties Tonight</button>
  <button type="button" class="btn btn-default" id="post">Post a Party</button>
  <button type="button" class="btn btn-default">more stuff</button>
</div>
  </div>
    </div>
      </center>
    </body>
  <div id="postform">
    <table align="center">
              <tr>
                  <td>
    <label class="address"><b>
    <font color="white" size="3">Address:</b></font></label><br>
<div class="input-group input-group-lg">
  <input type="text" class="form-control" placeholder="Location" aria-describedby="sizing-addon1" id="addr" name="addr" maxlength="200">
</div>
    <br>
  </td></tr></table><br>
  <center><b>
  OR
  <br>
  choose a spot on the map
</b>
   <div id="map-canvas"></div>
 </center>
  </div>
</html>
<style type="text/css">
#postform {
  display :none;
}
#map-canvas {
  height: 300px;
  width: 400px;
  z-index: 0;
}
</style>

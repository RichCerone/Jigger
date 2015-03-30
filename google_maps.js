var markerExists = false;
var marker;
function geolocate()
{
  var input = document.getElementById('addr');
  var optns =
  {
      types: ['address']
  };
  if (navigator.geolocation)
  {
    navigator.geolocation.getCurrentPosition(function(position)
    {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
            ac = new google.maps.places.Autocomplete(input, optns).setBounds(new google.maps.LatLngBounds(geolocation, geolocation));
    });
  }
}
function placeMarker(location)
{
  if(markerExists){} else {
     marker = new google.maps.Marker({
        position: location,
        map: map,
    });
    markerExists = true;
     if(marker.visible){
        $('#myModal').modal('show');
      console.log(marker.position);
      codeLatLng(marker.position.k, marker.position.D, 2);
     }
   }
}
function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      alert(responses[0].formatted_address);
    } else {
      alert('Cannot determine address at this location.');
     }
   });
  }
function codeAddress(addr)
{
  var geocoder;
  geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'address': addr}, function(results, status)
  {
    if (status == google.maps.GeocoderStatus.OK)
    {
      console.log(results[0].geometry.location);
      var lat = results[0].geometry.location.k;
      var longi = results[0].geometry.location.D;
      codeLatLng(lat,longi,1);
    }
    else
    {
        alert("Geocode was not successful for the following reason: " + status);
    }
  });
}
function codeLatLng(lat, lng, type)
{
   var geocoder;
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(lat, lng);
  if(type == 1){
  //Geocoder takes longitude and latitude and sets it to an adress.
  geocoder.geocode({'latLng': latlng}, function(results, status)
  {
    if (status == google.maps.GeocoderStatus.OK)
    {
      if (results[1])
      {
        console.log(results[1].formatted_address);
        var town = results[1].formatted_address.split(",",1);
        console.log(town);
      }
    }
    else
    {
        alert("Geocoder failed due to: " + status);
    }
  });
} else if(type > 1){
  geocoder.geocode({'latLng': latlng}, function(results, status)
  {
    if (status == google.maps.GeocoderStatus.OK)
    {
       $('#addrss').html(results[0].formatted_address);
       $("#partySubmit").prepend('<input type="hidden" value="' + results[0].formatted_address + '" id="adrs" name="adrs" />');
        console.log(results[0].formatted_address);
    }
    else
    {
        alert("Geocoder failed due to: " + status);
    }
  });
}
}
function showPosition(position)
{
  lat = position.coords.latitude.toString().substr(0,8);
  longi = position.coords.longitude.toString().substr(0,8);
  var mapOptions =
  {
      center : new google.maps.LatLng(lat,longi),
      zoom : 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  var latlng = new google.maps.LatLng(lat,longi);
  google.maps.event.addListener(map, 'click', function(event)
  {
    placeMarker(event.latLng);
  });
}
$(document).ready(function()
{
  $("#cancel").click(function(event){
  event.preventDefault();
  console.log("hello");
  marker.setMap(null);
  markerExists = false;
   $('#myModal').modal('hide');
});
 $('#myModal').on('hidden.bs.modal', function (e) {
  marker.setMap(null);
  markerExists = false;
      });
  geolocate();
  if (navigator.geolocation)
  {
    geolocate();
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  var $postp = $('#post');
  var $addr = $('#addr');
  var $addrbttn = $('#addrbttn');

  $addrbttn.click(function(event)
  {
    event.preventDefault();
    codeAddress($addr.val());
  });

  var $postform = $('#postform');
    $postp.click(function(event)
    {
      event.preventDefault();
      $postform.show();
    });
});

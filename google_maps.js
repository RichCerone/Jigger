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
    var marker = new google.maps.Marker({
        position: location,
        map: map
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
      var long = results[0].geometry.location.D;
      codeLatLng(lat,long);
    }
    else
    {
        alert("Geocode was not successful for the following reason: " + status);
    }
  });
}
function codeLatLng(lat, lng)
{
  //Geocoder takes longitude and latitude and sets it to an adress.
  var geocoder;
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(lat, lng);
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


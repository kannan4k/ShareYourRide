<?php
include "header.php";
?>

<div class="well" >
  <h2>
      Traveling From and To? <br><br>
    </h2>
    <div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">

      <form class="form-horizontal" action="rideAction.php" method="POST" >
        <div class="control-group">
           <label class="control-label" >From</label>
          <div class="controls" >
            <input class="input-large" type="text"  id="from" name="from" onchange="myFuncton()" />
          </div>
        </div>
        <div class="control-group">
           <label class="control-label">To</label>
          <div class="controls">
            <input class="input-large" type="text"  id="to" name="to" onchange="myFuncton()"/>
          </div>
        </div>

      
    </div>
  </div>
</div>
</div>


 <div class="well">
  <div id="map"></div>
</div>

<div class="well">
<br>
    <div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">
      <div class="form-horizontal">
        <div class="control-group">
           <label class="control-label" >Time</label>
          <div class="controls" >
            <input  type="datetime-local"  id="time" name="ride_time" onchange="" />
          </div>
        </div>


        <div class="form-actions">
                  <input type="submit" class="btn btn-primary "></input>
        </div>

      </form>
    </div>
  </div>
</div>
</div>




</div>
</body>
 <div id="footer">
      <div class="container">
        <p class="muted credit">Powered By <a href="http://localhost/share">EarthWorms</a>.</p>
      </div>
    </div>
    



    <script>
window.onload = function()
                {
                    calculateRoute($("#from").val(), $("#to").val());
                };


function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(-33.8688, 151.2195),
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  


var options = {
  
  componentRestrictions: {country: 'in'}
};

  var input = /** @type {HTMLInputElement} */(document.getElementById('from'));
  var input1 = /** @type {HTMLInputElement} */(document.getElementById('to'));
  var autocomplete = new google.maps.places.Autocomplete(input,options);
  var autocomplete1 = new google.maps.places.Autocomplete(input1,options);

  var infowindow = new google.maps.InfoWindow();
 

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    infowindow.close();
    
    
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      // Inform the user that the place was not found and return.
      input.className = 'notfound';
      return;
    }
    calculateRoute($("#from").val(), $("#to").val());

   
  });

    google.maps.event.addListener(autocomplete1, 'place_changed', function() {
    infowindow.close();
    
    
    var place = autocomplete1.getPlace();
    if (!place.geometry) {
      // Inform the user that the place was not found and return.
      input1.className = 'notfound';
      return;
    }

    calculateRoute($("#from").val(), $("#to").val());

  });

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>






    <script>
      function calculateRoute(from, to) {
        // Center initialized to Naples, Italy
        var myOptions = {
          zoom: 5,
          center: new google.maps.LatLng(19.84, 80.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
          origin: from,
          destination: to,
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: mapObject,
                directions: response
              });
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );
      }
      $(document).ready(function() {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
        }
        $("#from-link, #to-link").click(function(event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));
          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK)
                $("#" + addressId).val(results[0].formatted_address);
              else
                $("#error").append("Unable to retrieve your address<br />");
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });
  
      });

      function myFunction() {
          event.preventDefault();
          calculateRoute($("#from").val(), $("#to").val());
        } 
    </script>
    <style type="text/css">
      #map {
        width: 1130px;
        height: 300px;
      }
    </style>

</html>
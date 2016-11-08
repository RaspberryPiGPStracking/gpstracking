<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Existing user</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
 <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

 <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCl3GiPE3szZaaATroClUfawAdLCjIldWk&sensor=false&libraries=geometry,places&ext=.js' type="text/javascript"> </script>

<script type="text/javascript">
$(document).ready(function(){
var user=$('#user').val();
$.get(
        "serverScript.php?user="+user, // Wherever you're getting your var MapPoints JSON.
        function(response) {

var MapPoints = response;



var MY_MAPTYPE_ID = 'custom_style';

function initialize() {

    if (jQuery('#map').length > 0) {

        var locations = jQuery.parseJSON(MapPoints);

        window.map = new google.maps.Map(document.getElementById('map'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        });

        var infowindow = new google.maps.InfoWindow();
        var flightPlanCoordinates = [];
        var bounds = new google.maps.LatLngBounds();

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i].address.lat, locations[i].address.lng),
                map: map
            });
            flightPlanCoordinates.push(marker.getPosition());
            bounds.extend(marker.position);

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i]['title']);
                    infowindow.open(map, marker);
                }
            })(marker, i));
            }

            map.fitBounds(bounds);

            var flightPath = new google.maps.Polyline({
                map: map,
                path: flightPlanCoordinates,
                strokeColor: "#FF0000",
                strokeOpacity: 1.0,
                strokeWeight: 2
            });

        }
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
    });
});
    </script> 



</head>
<style type="text/css">
    html, body, #map {
    height: 100%;
    width: 100%;
    margin: 0px;
    padding: 0px
}
</style>

<body >
<input id="user" type="hidden" name="phone" value="<?php echo $_POST['user']; ?>">
    <div id="map" ></div>
    </div>   
</body>
</html>
<<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div id="map"></div>
<script>

     function initMap() {
         
       var myLatLng = {lat: -25.363, lng: 131.044};
        var LatLng2 ={lat: -27.363, lng: 133.044};
        var LatLng3 ={lat: -23.363, lng: 135.044};
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 4,
         center: myLatLng
       });

       var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
      });
      var marker1 = new google.maps.Marker({
         position: LatLng2,
         map: map,
         title: 'Hello World1!'
       });

       var marker2 = new google.maps.Marker({
         position: LatLng3,
         map: map,
         title: 'Hello World1!1'
       });
     }
   </script>
   <script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx75imHCWBJcOWBbVNmACY9nEXZ4WMqTc&callback=initMap">
   </script>
    
</body>
</html>
<!DOCTYPE html>
<?php
require("../conn.php");
$sql = "SELECT * FROM location";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
// output data of each row
while($row = $result->fetch_assoc()) {
 
?>
<html>

<head>
<style>
     /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
     #map {
       height: 100%;
     }
     /* Optional: Makes the sample page fill the window. */
     html, body {
       height: 100%;
       margin: 0;
       padding: 0;
     }
     #map{
    /*height: 100%;*/
    height: 400px;
}
   </style>
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> Now UI Dashboard by Creative Tim </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet"> </head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini"> PX </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal"> PharmaX </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li>
        <a href="./Overview.php">
          <i class="now-ui-icons design_app"></i>
          <p>Overview</p>
        </a>
      </li>
      <li>
        <a href="./ExpenseSheet.html">
          <i class="now-ui-icons design_app"></i>
          <p>Expense Sheet</p>
        </a>
      </li>
      <li>
        <a href="./Managers.php">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>MANAGERS
            <br> </p>
        </a>
      </li> 
      <li >
        <a href="./SPOs.php">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>SPOs
            <br> </p>
        </a>
      </li> 
      <li class="active ">
        <a href="./LocateSpo.php">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>Locate SPO
            <br> </p>
        </a>
      </li> 
     
    </ul>
  </div>
</div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm"> </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-10">
                    <h1 class="">Locate SPO
                      <br> </h1>
                  </div>
                </div>
              <div id="map"></div>
              </div>
              <div class="card-body">
   <script>


function initMap() {
    var i;
    var location=[];
   // var numofRows=<?php //echo //$result->num_rows;?>;
   location['id']=echo  $row['SPOID'];
   location['latitude']=echo $row['latitude'];
   location['longitude']=echo $row['longitude'];
   
    <?php  echo .$row['latitude'].$row['longitude'].$row['zoom'] ."<br>";
    }   
    ?>



  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });

  var contentString = 
      '<h3 id="firstHeading" class="firstHeading">SPO: <</h1>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Uluru (Ayers Rock)'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}
    //  function initMap() {


    //    var myLatLng = {lat: -25.363, lng: 131.044};
    //     var LatLng2 ={lat: -27.363, lng: 133.044};
    //     var LatLng3 ={lat: -23.363, lng: 135.044};
    //    var map = new google.maps.Map(document.getElementById('map'), {
    //      zoom: 4,
    //      center: myLatLng
    //    });

    //    var marker = new google.maps.Marker({
    //     position: myLatLng,
    //     map: map,
    //     title: 'Hello World!'
    //   });
    //   var marker1 = new google.maps.Marker({
    //      position: LatLng2,
    //      map: map,
    //      title: 'Hello World1!'
    //    });

    //    var marker2 = new google.maps.Marker({
    //      position: LatLng3,
    //      map: map,
    //      title: 'Hello World1!1'
    //    });
    //    marker.addListener('click', function() {
    // infowindow.open(map, marker);

    //  }
   </script>
   <script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx75imHCWBJcOWBbVNmACY9nEXZ4WMqTc&callback=initMap">
   </script>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com"> Creative Tim </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com"> About Us </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com"> Blog </a>
              </li>
            </ul>
          </nav>
          <div class="copyright"> ©
            <script>
              document.write(new Date().getFullYear())
            </script>, Designed by
           
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
</body>

</html>
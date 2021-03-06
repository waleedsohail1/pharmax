<!DOCTYPE html>
<?php
require("../conn.php");
$sql = "SELECT * FROM login inner join managers on login.username=managers.username";
$result = $mysqli->query($sql);

?>
<html>

<head>
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
          <li class="active ">
            <a href="./Managers.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>MANAGERS
                <br> </p>
            </a>
          </li> 
          <li>
            <a href="./SPOs.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>SPOs
                <br> </p>
            </a>
          </li> 
          <li>
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
                    <h1 class="">Managers
                      <br> </h1>
                  </div>
                  <div class="col-md-2 my-3">
                    <a class="btn text-uppercase text-center text-light btn-primary" href="addManager.php">Add Manager</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive border">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th class="border text-center">Manager ID</th>
                        <th class="border text-center">Name</th>
                        <th class="border text-center">Age</th>
                        <th class="border text-center">Area</th>
                        <th class="border text-center">City</th>
                        <th class="border text-center">Edit</th>
                        <th class="border text-center">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                     if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<tr>";

                        echo  "<td class='text-center'>". $row["id"]."<td class='text-center'>". $row["name"]."<td class='text-center'>". $row["age"]."<td class='text-center'>". $row["area"]."<td class='text-center'>".$row["city"]. '<td class="text-center"><img src="../pix/pencil.png" width="25px"><td class="text-center"><a href="deleteManager.php?uname='. $row["username"].'"><img src="../pix/trash.png" width="25px"></a></td>'. "</tr>";
                      }
                    } else {
                      echo "0 results";
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
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
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>. </div>
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
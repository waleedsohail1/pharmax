<?php 

require("../conn.php");
  $Uname=$_GET["uname"];
  // echo $Uname;
  $query="select * from login JOIN managers where login.username='".$Uname . "';";
 echo $query;
  $result = $mysqli->query($query);

  // if ($result->num_rows > 0) {
  //   // output data of each row
   while($row = $result->fetch_assoc()) 
   {
    // echo $row;
    $UserName=$row["username"];
    $Email=$row["email"];
    $Name=$row["name"];
    $HomeAddress=$row["HomeAddress"];
    $City=$row["city"];
    $Area=$row["area"];
    $Age=$row["age"];
    $CNIC=$row["cnic"];
    $Province=$row["province"];
    $CellNumber=$row["CellNumber"];
  // echo ("Hello");
    // echo $UserNamenew;
    // echo $Email;
    break;
   }
// }

if(isset($_POST['submit'])) {

  // $UserName=$_POST["UserName"];
  $Email=$_POST["Email"];
  $Name=$_POST["Name"];
  $HomeAddress=$_POST["HomeAddress"];
  $City=$_POST["City"];
  $Area=$_POST["Area"];
  $Age=$_POST["Age"];
  $CNIC=$_POST["CNIC"];
  $Province=$_POST["Province"];
  $CellNumber=$_POST["CellNumber"];
  // $query1='INSERT INTO login(username, password, type, name, email, firsttime) VALUES("'.$UserName.'","'.$UserName.'","1","'.$Name.'","'.$Email.'","1");';
  // $query2='INSERT INTO managers (username, name, age, cnic, CellNumber, HomeAddress, area, city, province) 
  // VALUES ("'.$UserName.'","'.$Name.'","'.$Age.'","'.$CNIC.'","'.$CellNumber.'","'.$HomeAddress.'","'.$Area.'","'.$City.'","'.$Province.'");'; 
echo  $query1="UPDATE login SET name='".$Name."',age='".$Age."',cnic='".$CNIC."',CellNumber='".$CellNumber."',HomeAddress='".$HomeAddress."',area='".$Area."',city='".$City."',province='".$Province." WHERE username='".$Uname."';"; 
  
  
  // echo $query1;
  // echo $query2;
  // $mysqli->query($query1);
  // $mysqli->query($query2);
  //header("Location:Managers.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

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
            <a class="navbar-brand" href="#pablo">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form action="" method="POST">
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
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Manager</h5>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" id="UserName" name="UserName" value="<?php echo $Uname;?>" disabled >
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" id="Email" name="Email" value="<?php echo $Email;?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-2">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="Name" name="Name" value="<?php echo $Name;?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Age</label>
                        <input type="Number" class="form-control" placeholder="Age" id="Age" name="Age" value="<?php echo $Age;?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Cell Number</label>
                        <input type="text" class="form-control" placeholder="CellNumber" id="CellNumber" name="CellNumber" value="<?php echo $CellNumber;?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text " class="form-control" placeholder="Home Address" id="HomeAddress" name="HomeAddress" value="<?php echo $HomeAddress;?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Province</label>
                        <input type="text" class="form-control" placeholder="Province" id="Province" name="Province" value="<?php echo $Province;?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Area</label>
                        <input type="text" class="form-control" placeholder="Area" id="Area" name="Area" value="<?php echo $Area;?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" id="City" name="City" value="<?php echo $City;?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>CNIC</label>
                        <input type="text" class="form-control" placeholder="CNIC" id="CNIC" name="CNIC" value="<?php echo $CNIC;?>">
                      </div>
                    </div>
                    <div class="col-md-10 px-2">
</div>              <div class="col-md-2 px-1">

                      <div class="form-group">
                        <input type="submit" id="submit" name="submit" class="btn-primary" value="Edit Manager">
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
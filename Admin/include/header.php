<?php

// session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: Login/login.php");
    exit;
}
?>

<?php
require_once "connection2.php";

$sqlProv = "SELECT * FROM province";
$resultProv = mysqli_query($conn,$sqlProv);
$numProv = mysqli_num_rows($resultProv);

$sqlZone = "SELECT * FROM zone";
$resultZone = mysqli_query($conn,$sqlZone);
$numZone = mysqli_num_rows($resultZone);

$sqlDist = "SELECT * FROM district";
$resultDist = mysqli_query($conn,$sqlDist);
$numDist = mysqli_num_rows($resultDist);

$sqlProvDist = "SELECT * FROM province_district";
$numProvDist = mysqli_num_rows(mysqli_query($conn,$sqlProvDist));

$sqlZoneDist = "SELECT * FROM zone_district";
$resultZoneDist = mysqli_query($conn,$sqlZoneDist);
$numZoneDist = mysqli_num_rows($resultZoneDist);

$sqlMuni = "SELECT * FROM municipility";
$resultMuni = mysqli_query($conn,$sqlMuni);
$numMuni = mysqli_num_rows($resultMuni);

$sqlProvMuni = "SELECT * FROM province_municipility";
$resultProvMuni = mysqli_query($conn,$sqlProvMuni);
$numProvMuni = mysqli_num_rows($resultProvMuni);

$sqlZoneMuni = "SELECT * FROM zone_municipility";
$resultZoneMuni = mysqli_query($conn,$sqlZoneMuni);
$numZoneMuni = mysqli_num_rows($resultZoneMuni);

$sqlMuniWard = "SELECT * FROM municipility_ward";
$resultMuniWard = mysqli_query($conn,$sqlMuniWard);
$numMuniWard = mysqli_num_rows($resultMuniWard);

$id = $_SESSION['userid'];
$sqlUser = "SELECT * FROM users WHERE id=$id";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Baloo+Thambi+2:wght@500&" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/buttons-dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha2-dist/css/select2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button id='bar_opener'>&#9776;</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown listItem listitem-secondary" id="listItem">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span><img src="http://localhost/nepalLocation/admin/uploaded_images/<?php echo $rowUser['image'] ?>" alt="" class="border rounded-circle" height="28px" width="30px"></span> <?php echo $_SESSION['username']?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/nepalLocation/admin/profile/view.php"><i class="fa-solid fa-eye"></i>Your Profile</a>
          <a class="dropdown-item" href="http://localhost/nepalLocation/admin/profile/edit.php"><i class="fa-solid fa-pen-to-square"></i>Edit Profile</a>
          <a class="dropdown-item" href="http://localhost/nepalLocation/admin/profile/changePw.php"><i class="fa-solid fa-unlock-keyhole"></i>Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/nepalLocation/admin/Login/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>



    <!-- <div class="container1">
        <a href="http://localhost/nepalLocation/admin/Provinces/index.php"><button>Provinces <span class="counter"> <?php echo $numProv ?> </span></button></a>
        <a href="http://localhost/nepalLocation/admin/Zones/index.php"><button>Zone <span class="counter"> <?php echo $numZone ?> </span> </button></a>
        <a href="http://localhost/nepalLocation/admin/Districts/index.php"><button>District <span class="counter"> <?php echo $numDist ?></span> </button></a>
        <a href="http://localhost/nepalLocation/admin/Province_district/index.php"><button>Province-District <span class="counter"> <?php echo $numProvDist ?></span> </button></a>
        <a href="http://localhost/nepalLocation/admin/Zone_district/index.php"><button>Zone-District <span class="counter"> <?php echo $numZoneDist ?></span> </button></a>
        <a href="http://localhost/nepalLocation/admin/Municipility/index.php"><button>Municipility <span class="counter"> <?php echo $numMuni ?></span> </button></a>
        <a href="http://localhost/nepalLocation/admin/province_municipility/index.php"><button>Province-Municipility <span class="counter"> <?php echo $numProvMuni ?></span> </button></a>
        <a href="http://localhost/nepalLocation/admin/Zone_municipility/index.php"><button>Zone-Municipility <span class="counter"> <?php echo $numZoneMuni ?></span> </button></a>
        <a href="http://localhost/nepalLocation/admin/municipility_ward/index.php"><button>Municipility Ward <span class="counter"> <?php echo $numMuniWard ?></span> </button></a>
    </div> -->

    <script defer src="../bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery-3.5.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery.dataTables.min.js"></script>
    <script defer src="../bootstrap-5.3.0-alpha2-dist/js/dataTables.buttons.js"></script>
    <script defer src="../bootstrap-5.3.0-alpha2-dist/js/pdfmake.min.js"></script>
    <script defer src="../bootstrap-5.3.0-alpha2-dist/js/pdfmake_fonts.js"></script>
    <script defer src="../bootstrap-5.3.0-alpha2-dist/js/buttons.html5.min.js"></script>
    <script defer src="../bootstrap-5.3.0-alpha2-dist/js/buttons.print.js"></script>
    <script defer src="../bootstrap-5.3.0-alpha2-dist/js/select2.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
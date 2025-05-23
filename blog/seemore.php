<?php
require_once "../admin/connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark mb-1">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">Np Location</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../index.php#aboutUs">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../blog.php">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  View Data
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Province</a></li>
                  <li><a class="dropdown-item" href="#">District</a></li>
                  <li><a class="dropdown-item" href="#">Municipility</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center my-1">
      <h1>Read Our Blog</h1>
    </div>
    <div class="container">
        <div class="image">
            <img src="../admin/uploaded_images/<?php echo $row['image'];?>" class="img-blog-desc" alt="">
        </div>
        <div class="d-flex justify-content-center mt-3">
          <b> <?php echo $row['addeddate'] . " | " . $row['createdBy'] ?> </b>
        </div>
        <header class="py-4">
            <h3 class="text-center"><?php echo $row['title'];?></h3>
        </header>
        <section>
            <?php echo $row['description'];?>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
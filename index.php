<?php
 require_once "admin/connection.php";
 $sql = "SELECT * FROM province WHERE status='active'";
 $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Location</title>
    <link rel="stylesheet" href="admin/bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/css/dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark position-fixed w-100">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Np Location</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#aboutUs">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="blog.php">Blog</a>
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
    
    <div class="main-home-page">
      <div class="background">
          <div class="row">
              <div class="col-md-9 d-flex align-items-center">
                <div>
                  <h1 class="text-light">Explore Nepal With Nepal Creative Tech</h1>
                  <p class="text-light">We provides an intractive way to explore Nepal - its provinces,districts,municipilities and wards - on a website.Discover the many places,cultures,and wonders of Nepal from the comfort of your own home with Nepal Creative Tech.</p>
</div>
              </div>
              <div class="col-3">
                  <img src="Assets/Flag-of-Nepal.gif" style="width: 20vw;" alt="">
              </div>
          </div>
          <div class="row">
              <div class="col mt-3">
                  <a href=""><button class="btn btn-secondary rounded">View Data</button></a>
              </div>
          </div>
      </div>
    </div>

    <div class="container pt-4">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th>Province</th>
                <th>Area</th>
            </thead>
            <tbody>
              <?php if(mysqli_num_rows($result)>0){ ?>
                <?php while($row=mysqli_fetch_array($result)){ ?>
                  <tr>
                    <td><a href="Province/index.php?id=<?php echo $row['id'] ?>"><?php echo $row['province'] ?> </a></td>
                    <td><?php echo $row['area'] ?></td>
                  </tr>
              <?php } }?>
            </tbody>
        </table>
    </div>

    <section id="aboutUs">
      <?php
      $sqlAbout = "SELECT * FROM aboutus";
      $resultAbout = mysqli_query($conn,$sqlAbout);
      $rowAbout = mysqli_fetch_array($resultAbout);
      ?>
      <div class="container bg-light text-dark p-3 my-3 rounded">
          <div class="row">
              <h1>About us</h1>
          </div>
          <div class="row">
              <p><?php echo $rowAbout['description'];?></p>
          </div>
      </div>
    </section>

  <section class="">
    <!-- Footer -->
    <footer class="bg-secondary text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Nepal Location</h5>

            <p>
            Nepal Creative Tech is a website business in Rupandehi, Lumbini Province, offering data on provinces,
            districts, and municipalities throughout Nepal. Our easy-to-use platform allows you to quickly and 
            easily access this essential information in an organized and secure manner.
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Information</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Home</a>
              </li>
              <li>
                <a href="#aboutUs" class="text-white">About</a>
              </li>
              <li>
                <a href="#!" class="text-white">Services</a>
              </li>
              <li>
                <a href="blog.php" class="text-white">Blog</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Support</h5>

            <ul class="list-unstyled">
              <li>
                <a href="faq.php" class="text-white">FAQ</a>
              </li>
              <li>
                <p><i class="fa-solid fa-location-dot"></i> Butwal-3,Golpark</p>
              </li>
              <li>
                <p><i class="fa-solid fa-phone"></i> 
                
                <a href="tel:+9779847739401" class="text-light">+9779847739401</a>
                </p>
              </li>
              <li>
                <p><i class="fa-solid fa-envelope"></i> 
              <a href="mailto:nctbutwal@gmail.com" class="text-light">nctbutwal@gmail.com</a>
              </p>
              </li>
            </ul>
          </div>
          <!--Grid column-->
          <div class="col-md-3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.139626428843!2d83.4611148746578!3d27.71297492524474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399687daa721fa1f%3A0xc2c80d3a1d81cdc8!2sNepal%20Creative%20Tech%20Pvt%20Ltd%20-NCT!5e0!3m2!1sen!2snp!4v1681902754392!5m2!1sen!2snp" class="footer-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnctbutwal&tabs=timeline&width=340&height=271&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="271" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->
          </div>
        </div>
        <!--Grid row-->
        <div class="row">
          <div class="col">
            <?php
            $sqlLink = "SELECT * FROM social_media";
            $resultLink = mysqli_query($conn,$sqlLink);
            while($rowLink=mysqli_fetch_array($resultLink)){
            ?>
            <span class="p-3"> <a href="<?php echo $rowLink['link'] ?>" target="_blank" class="link-light">
            <?php echo $rowLink['title'] ?>
            <!-- <i class="fa-brands fa-facebook fa-3x"></i> -->
          </a></span>
            <!-- <span class="p-3"> <a href="<?php  ?>" class="link-light"><i class="fa-brands fa-instagram fa-3x"></i></a></span>
            <span class="p-3"> <a href="<?php  ?>" class="link-light"><i class="fa-brands fa-twitter fa-3x"></i></a></span> -->
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="#">NepalLocation.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>

    <script src="admin/bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery-3.5.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/bootstrap-5.3.0-alpha2-dist/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="http://localhost/nepalLocation/admin/js/script.js"></script>
</body>
</html>
<?php
 $sqlAbout = "SELECT * FROM aboutus";
 $resultAbout = mysqli_query($conn,$sqlAbout);
 $rowAbout = mysqli_fetch_array($resultAbout);
 $desc = $rowAbout['description'];
?>

<section class="">
    <!-- Footer -->
    <footer class="bg-secondary text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
            <span><img class="bordere rounded" src="admin/uploaded_images/<?php echo $rowAbout['logo'];?>" width="200px" alt=""></span>
            <h5 class="text-uppercase"><?php echo $rowAbout['orgname'];?></h5>
            <p>
              <?php if (strlen($desc) > 10) $desc = substr($desc, 0, 137); echo $desc;?>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Information</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="http://localhost/nepalLocation/index.php" class="text-white">Home</a>
              </li>
              <li>
                <a href="http://localhost/nepalLocation/index.php#aboutUs" class="text-white">About</a>
              </li>
              <li>
                <a href="#!" class="text-white">Services</a>
              </li>
              <li>
                <a href="http://localhost/nepalLocation/blog.php" class="text-white">Blog</a>
              </li>
              <li>
                <a href="http://localhost/nepalLocation/faq.php" class="text-white">FAQ</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-3">Support</h5>

            <ul class="list-unstyled">
              <li>
                <p><i class="fa-solid fa-location-dot"></i> <?php echo $rowAbout['address'] ?></p>
              </li>
              <li>
                <p><i class="fa-solid fa-phone"></i> 
                
                <a href="tel:+977<?php echo $rowAbout['contact'] ?>" class="text-light">+977<?php echo $rowAbout['contact'] ?></a>
                </p>
              </li>
              <li>
                <p><i class="fa-solid fa-envelope"></i> 
              <a href="mailto:<?php echo $rowAbout['gmail'] ?>" class="text-light"><?php echo $rowAbout['gmail'] ?></a>
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
            <span class="p-3 social-media-anchor"> <a href="<?php echo $rowLink['link'];?>" target="_blank" class="link-light">
            <i class="<?php echo $rowLink['icon'] ?> fa-3x"></i>
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
</body>
</html>
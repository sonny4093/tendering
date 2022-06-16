<?php
require("../../config.php");
?>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="margin-top: 220px;">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="ti-facebook"></i>
      </a>
      <a href="" class="col-lg-6" class="me-4 text-reset" >
        <i class="ti-twitter"></i>
      </a>
      <a href=""class="col-lg-6" class="me-4 text-reset">
        <i class="ti-google"></i>
      </a>
      <a href=""class="col-lg-6" class="me-4 text-reset">
        <i class="ti-instagram"></i>
      </a>
      <a href=""class="col-lg-6" class="me-4 text-reset">
        <i class="ti-linkedin"></i>
      </a>
      <a href="" class="col-lg-6" class="me-4 text-reset">
        <i class="ti-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Debre Berhan University
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Business Areas
            <?php
          $sql="SELECT * FROM businessarea";
          $result=mysqli_query($db, $sql);
         

            ?>
          </h6>
          <p>
            <?php 
                    while ($row=mysqli_fetch_assoc($result)) {?>
                      <p><a href="#!" class="text-reset"><?php echo $row['name'];?></a></p>
                   <?php }
              ?>
            
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="ti-home me-3"></i> Ethiopia, Debre Berhan</p>
          <p>
            <i class="ti-email me-3"></i>
            sonny4093@gmail.com
          </p>
          <p><i class="ti-mobile me-3"></i> +251 905939379</p>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mail.google.com/">sonny4093@gmail.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
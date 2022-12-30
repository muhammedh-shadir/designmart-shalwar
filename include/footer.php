    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3  footer-section">
            <h5 class="mb-4 text-white">Contact Info</h5>
            <p><i class="fas fa-phone-alt d-inline-block me-1"></i> +9758331876</p>
            <p><i class="fas fa-map-marker d-inline-block me-2"></i> No 20, Peradeniya Road, Kandy</p>
            <div class="footer-icons">
              <a href="#"><i class="fas fa-envelope me-3 footer-icon"></i></a>
              <a href="#"><i class="fab fa-whatsapp me-3 footer-icon"></i></a>
              <a href="#"><i class="fab fa-facebook me-3 footer-icon"></i></a>
              <a href="#"><i class="fab fa-instagram me-3 footer-icon"></i></a>
            </div>

          </div>
          <div class="col-md-6 col-lg-3 footer-section">
            <h5 class="mb-3 text-white">Products</h5>
            <?php
              $sql = "select cat_id, cat_name from category";
              $rs = $mysqli->query($sql);

              while ($row = mysqli_fetch_assoc($rs)) {
              ?>
              <a href="./category.php?cat_id=<?php echo $row['cat_id'] ?>" class="d-block mb-2 text-capitalize"><?php echo $row['cat_name'] ?></a>
              <?php
              }
              ?>
          </div>
          <div class="col-md-6 col-lg-3 footer-section">
            <h5 class="mb-3 text-white">Quick Links</h5>
            <a href="./index.php" class="d-block mb-2">Home</a>
            <a href="./about.php" class="d-block mb-2">About</a>
            <a href="./contact.php" class="d-block mb-2">Contact</a>
            <a href="./terms_and_conditions.php" class="d-block mb-2">Terms &amp; Conditions</a>
            <a href="./privacy_policy.php" class="d-block mb-2">Privacy Policy</a>
          </div>
          <div class="col-md-6 col-lg-3 footer-section">
            <h5 class="mb-3 text-white">SIGN UP FOR NEWS LETTER</h5>
            <p>Subscribe to get exclusive offers and inside info.</p>
            <form class="" action="index.html" method="post">
              <input type="email" class="form-control mb-2" placeholder="Email Address">
              <button type="button" name="button" class="btn footer-button">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </footer>
    <div class="end-section">
      <p class="text-center end-text">2022 Design Mart Shalwars. All Rights Reserved. Powered By Muhammedh Shadir</p>
    </div>


    <!-- fontawesome script -->
    <script src="https://kit.fontawesome.com/4a4f474338.js" crossorigin="anonymous"></script>

    <!-- bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <!-- lightbox script -->
    <script src="js/lightbox-plus-jquery.js"></script>
  </body>
</html>

<?php include("include/header.php") ?>

  <?php include("include/service.php") ?>

  <!-- google map -->
  <div class="container mb-4">
    <div class="row">
      <div class="col-lg-6">
        <div class="google-map text-center mb-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.64105480721!2d80.6187424152709!3d7.2816189159043745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368824457ef91%3A0x4f527eac6e11e61c!2sPeradeniya%20Rd%2C%20Kandy!5e0!3m2!1sen!2slk!4v1659336190852!5m2!1sen!2slk" width="100%" height="510" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-6">
        <?php
            if ($_REQUEST['status'] == "success") {
            ?>
            <div class="contact-form text-center">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p><strong>Congratulations!</strong> Successfully Sent.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <a href="index.php" class="btn btn-success">Go to home</a>
              </div>
            <?php
            }
            else {
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <p><strong>Sorry!</strong> Failed to Sent. Check Something Went Wrong.</p>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <a href="contact.php" class="btn btn-danger">Try again</a>
            <?php
          }
         ?>



        </div>
      </div>
    </div>
  </div>

<?php include("include/footer.php") ?>

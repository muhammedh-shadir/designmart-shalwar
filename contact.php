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
        <div class="contact-form text-center">
          <h2 class="text-uppercase mb-4">Get in touch with us</h2>
          <form class="" action="contact_2.php" method="post">
            <input class="form-control form-control-lg mb-3 w-75 mx-auto contact-input" name="cus_name" type="text" placeholder="Your Name" required>
            <input class="form-control form-control-lg mb-3  w-75 mx-auto contact-input" name="cus_email" type="email" placeholder="Your Email" required>
            <input class="form-control form-control-lg mb-3  w-75 mx-auto contact-input" name="cus_phone" type="text" placeholder="Your Phone Number" required>
            <textarea name="cus_message" rows="8" cols="80" class="form-control contact-input form-control-lg w-75 mx-auto mb-3" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn btn-lg contact-button mb-5 d-block w-75 mx-auto">SUBMIT</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include("include/footer.php") ?>

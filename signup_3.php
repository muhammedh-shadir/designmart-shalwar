<?php include("include/header.php") ?>

<div class="container my-4 py-5 text-center">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-6">

      <?php
      if ($_REQUEST['status'] == "success") {
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p><strong>Congratulations!</strong> Successfully Signed Up.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <a href="login.php" class="btn btn-success">Now Sign In</a>
      </div>
      <?php
    } else if ($_REQUEST['status'] == "fail-email") {
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p><strong>Sorry!</strong> Signup Failed. Your Email is already Taken.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <a href="signup.php" class="btn btn-danger">Try with another email</a>
      </div>
      <?php
      }
      else {
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p><strong>Sorry!</strong> Signup Failed. Check Your Password.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <a href="signp.php" class="btn btn-danger">Try again</a>
      </div>
      <?php
      }
      ?>

    </div>
  </div>
</div>


<?php include("include/footer.php") ?>

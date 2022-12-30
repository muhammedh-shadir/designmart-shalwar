<?php include("include/header.php") ?>

<div class="container my-4 py-5 text-center">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-6">

      <?php
      if ($_REQUEST['status'] == "success") {
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p><strong>Congratulations!</strong> Successfully Updated.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <a href="index.php" class="btn btn-success">Go to home</a>
      </div>
      <?php
    }
      else {
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p><strong>Sorry!</strong> Updating Failed. Check Something Went Wrong.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <a href="login.php" class="btn btn-danger">Try again</a>
      </div>
      <?php
      }
      ?>

    </div>
  </div>
</div>


<?php include("include/footer.php") ?>

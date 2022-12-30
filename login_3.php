<?php include("include/header.php") ?>
<div class="container my-4 py-5 text-center">
  <div class="row align-items-center justify-content-center">
    <?php

        $email = $_GET['id'];
        
     ?>
    <div class="col-lg-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p><strong>Congratulations!</strong> Successfully Logged In.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <a href="index.php" class="btn btn-success">Go to home</a>
        <a href="details.php?id=<?php echo $email ?>" class="btn btn-success">Veiw Details</a>
      </div>
    </div>
  </div>
</div>

<?php include("include/footer.php") ?>

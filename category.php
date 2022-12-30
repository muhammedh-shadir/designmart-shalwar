<?php include("include/header.php") ?>

<?php include("include/service.php") ?>


<section class="new-arrival">
  <div class="container">
    <div class="row">
      <?php
          $cat_id = $_GET['cat_id'];

          $sql = " select cat_name from category where cat_id = $cat_id;";
          $rs = $mysqli->query($sql);
          $cat_row = mysqli_fetch_assoc($rs);
       ?>
      <h1 class="text-center mb-5 card-main-title text-capitalize"><?php echo $cat_row['cat_name'] ?></h1>

      <?php


        $sql2  = "select * from product where cat_id = $cat_id; ";

        $rs2 = $mysqli->query($sql2);

        while ($row = mysqli_fetch_assoc($rs2)) {
        ?>
          <div class="col-xxl-3 col-lg-4 col-md-6 mb-5 card-body-container">
            <div class="card mx-auto" style="width: 18rem;">
              <div class="d-flex card-image-container">
                <img src="admin/php/images/large/<?php echo $row['picture'] ?>" class="card-img-top card-image" alt="product image">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['p_name'] ?></h5>
                <p class="card-text card-description"><?php echo $row['p_description'] ?></p>
                <p class="card-text card-price">LKR <?php echo $row['price'] ?>.00 </p>
                <a href="view_more.php?pid=<?php echo $row['pid'] ?>" class="btn card-btn btn-primary">View More</a>
              </div>
            </div>
          </div>

          <?php
        }

       ?>


    </div>
  </div>
</section>


<?php include("include/footer.php") ?>

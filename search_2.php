<?php include("include/header.php") ?>

<?php include("include/service.php") ?>

<section class="new-arrival">
  <div class="container">
    <div class="row">
      <h1 class="text-center mb-5 card-main-title text-capitalize">Search Result</h1>

      <?php

          $search = $_REQUEST['search'];
          if (empty($search)) {
            echo "<h4 class='text-center mb-5  text-capitalize text-danger'>No Records Were found</h4>";
          }
          else {

          $sql  = "select product.pid, product.p_name, product.quantity, ";
          $sql .= "product.price, product.color, product.p_description, ";
          $sql .= "category.cat_name, type.type_name, product.picture from product ";
          $sql .= "INNER JOIN category ON product.cat_id = category.cat_id ";
          $sql .= "INNER JOIN type ON product.type_id = type.type_id ";
          $sql .= "where product.p_name like '%$search%' or ";
          $sql .= "price like '%$search%' or ";
          $sql .= "color like '%$search%' or ";
          $sql .= "category.cat_name like '%$search%' or ";
          $sql .= "type.type_name like '%$search%'";

          $rs = $mysqli->query($sql);


        while ($row = mysqli_fetch_assoc($rs)) {
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
        }

       ?>


    </div>
  </div>
</section>
<?php include("include/footer.php") ?>

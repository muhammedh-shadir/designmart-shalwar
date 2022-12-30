<?php include("include/header.php") ?>

  <section class="view_more my-5">
    <div class="container">
      <div class="row">
        <?php
            $pid = $_GET['pid'];

            $sql = " select * from product where pid = $pid;";
            $rs = $mysqli->query($sql);
            $row = mysqli_fetch_assoc($rs);
         ?>
        <div class="col-lg-6 mb-4">
          <div class="d-flex card-image-container shadow-sm">
            <img src="admin/php/images/large/<?php echo $row['picture'] ?>" class="card-img-top card-image" alt="product image">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="product-details mb-4 bg-light shadow-sm px-3 py-2">
            <h4 class="text-secondary"><?php echo $row['p_name']; ?></h4>
            <h3 class="">LkR <?php echo $row['price'] ?>.00</h3>
            <p><i class="fas fa-truck"></i> Free Shipping Island Wide </p>
          </div>
          <div class="offer-details mb-4 bg-light shadow-sm px-3 py-2">
            <p class="text-success">Flash Sale</p>
            <p>Flat <span class="fw-bold">50% OFF on Designer Ethnic Wear</span></p>
          </div>
          <div class="product-styling bg-light shadow-sm px-3 py-2 mb-4">
            <h5 class="mb-3">Product Styling</h4>
            <ul class="list-unstyled">
              <li>Standard: AAA+ Standard</li>
              <li>Premium Quality</li>
              <li>Custome Design Applicable</li>
              <li class="text-capitalize">Color: <?php echo $row['color'] ?></li>
              <li>Wash Care: Dry clean</li>
              <li>Sleeves: Done only in Custom Stitch</li>
              <li>Sleeves Lining: Done only in Custom Stitch</li>
              <li>Size: M, XL, XXL</li>
            </ul>
            <p class="text-secondary" style="font-size: .75rem;">Additional fabric we have to add to make (Plus Size, Top Length, and Long & Lining Sleeves). The fabric comes in a matching color with no embroidery and with Additional Cost. Based on Size Cost and Shipping Time may vary.</p>
          </div>
          <button type="button" name="button" class="btn btn-lg shopping-button btn-dark">Buy Now</button>
        </div>
      </div>

    </div>
  </section>

<?php include("include/footer.php") ?>

<?php require("validate_user.php");  ?>
<?php include("header.php"); ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product Details /</span> Add Product</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="add_product_1.php"><i class="bx bx-add-to-queue me-1"></i> Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit_product_1.php"
            ><i class="bx bx-edit-alt me-1"></i> Edit Product</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete_product_1.php"
            ><i class="bx bx-trash me-1"></i> Delete Product</a
          >
        </li>
      </ul>
      <div class="card mb-4">
        <h5 class="card-header">Product Details</h5>
        <!-- Account -->
        <hr class="my-0" />
        <div class="card-body">
          <?php
            if ($_REQUEST['status'] == "success") {
           ?>
           <div class="alert alert-success alert-dismissible fade show" role="alert">
             <p><strong>Congratulations!</strong> Product Added Successfully.</p>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             <a href="add_product_1.php" class="btn btn-success">Add another product</a>
           </div>

           <?php
            }
            else {
              ?>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p><strong>Sorry!</strong> Adding Product Failed.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <a href="add_product_1.php" class="btn btn-danger">Try again</a>
              </div>

              <?php
            }

          ?>
        </div>
    </div>



        <!-- /Account -->
      </div>
    </div>
  </div>
</div>
<<?php include("footer.php") ?>

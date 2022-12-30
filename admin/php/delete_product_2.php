<?php

  require("validate_user.php");
  require("db_connection.php");

?>
<?php include("header.php"); ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product Details /</span> Edit Product</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link" href="add_product_1.php"><i class="bx bx-add-to-queue me-1"></i> Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit_product_1.php"
            ><i class="bx bx-edit-alt me-1"></i> Edit Product</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="delete_product_1.php"
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

            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "</pre>";

            $pid = $_REQUEST['pid'];

            $sql = "select * from product where pid=$pid";

            $rs = $mysqli->query($sql);

            if (mysqli_num_rows($rs) > 0) {
              // echo "record found";
              $row = mysqli_fetch_assoc($rs);
              // echo "<pre>";
              // print_r($row);
              // echo "</pre>";
            ?>



          <form id="formAccountSettings" method="POST" action="delete_product_3.php" enctype="multipart/form-data">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Product Name</label>
                <input type="hidden" name="pid" value="<?php echo $row['pid'] ?>">
                <input
                  class="form-control"
                  type="text"
                  id="name"
                  name="p_name"
                  value="<?php echo $row['p_name'] ?>"
                  autofocus
                  required disabled
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="category" class="form-label">Prodcut Category</label>
                <select id="category" class="select2 form-select" name="cat_id" required disabled>
                  <?php
                    $cat_id   = $row['cat_id'];
                    $sql2     = "select cat_name from category where cat_id = $cat_id;";
                    $rs2      = $mysqli->query($sql2);
                    $category = mysqli_fetch_assoc($rs2);
                   ?>
                  <option><?php echo $category['cat_name'] ?></option>
                </select>
              </div>
              <div class="mb-3 col-md-6">
                <label for="quantity" class="form-label">Quantity</label>
                <input
                  class="form-control"
                  type="number"
                  id="quantity"
                  name="quantity"
                  value="<?php echo $row['quantity'] ?>"
                  autofocus
                  required
                  disabled
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="price" class="form-label">Product Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="price"
                  name="price"
                  value="<?php echo $row['price'] ?>"
                  required disabled
                />
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="type">Product Type</label>
                <div class="input-group input-group-merge">
                  <select id="type" class="select2 form-select" name="type_id" required disabled>
                    <?php
                      $type_id   = $row['type_id'];
                      $sql3     = "select type_name from type where type_id = $type_id;";
                      $rs3      = $mysqli->query($sql3);
                      $type = mysqli_fetch_assoc($rs3);
                     ?>
                    <option><?php echo $type['type_name'] ?></option>
                  </select>
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="color" class="form-label">Product Color</label>
                <input type="text" class="form-control" id="color" name="color" value="<?php echo $row['color']; ?>" disabled />
              </div>
              <div class="mb-3 col-md-6">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control"name="p_description" id="description" rows="8" cols="80" disabled><?php echo $row['p_description'] ?></textarea>
              </div>
              <div class="mb-3 col-md-6 d-flex align-items-start align-items-sm-center gap-4">
                <div class="button-wrapper">
                  <label for="picture" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input
                      type="file"
                      id="picture" name="picture"
                      class="account-file-input"
                      hidden disabled
                      accept="image/png, image/jpeg"
                    />
                  </label>
                  <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                  </button>
                  <img
                    src="images/thumb/<?php echo $row['picture'] ?>"
                    alt="user-avatar"
                    class="d-block rounded mb-3"
                    id="uploadedAvatar"
                  />

                  <p class="text-muted mb-0">Allowed PNG Only. Max size of 2MB</p>
                </div>
              </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-danger me-2">Confirm Delete</button>
              <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
          </form>

          <?php
          }

          else {
            ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <p><strong>Sorry!</strong> No matchings were found. Please check your Product ID.</p>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <a href="delete_product_1.php" class="btn btn-danger">Try again</a>
            </div>

            <?php
          }
            ?>


        </div>
        <!-- /Account -->
      </div>
    </div>
  </div>
</div>
<<?php include("footer.php") ?>

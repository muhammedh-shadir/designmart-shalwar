<?php
  require("validate_user.php");
  require("db_connection.php");
 ?>
<?php include("header.php") ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product Details /</span> Add Product</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-add-to-queue me-1"></i> Add Product</a>
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
          <form id="formAccountSettings" method="POST" action="add_product_2.php" enctype="multipart/form-data">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Product Name</label>
                <input
                  class="form-control"
                  type="text"
                  id="name"
                  name="p_name"
                  value=""
                  autofocus
                  required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="category" class="form-label">Prodcut Category</label>
                <select id="category" class="select2 form-select" name="cat_id" required>
                  <option value="">Select Category</option>

                  <?php
                    $sql = "select cat_id, cat_name from category";
                    $rs = $mysqli->query($sql);

                    while ($row = mysqli_fetch_assoc($rs)) {
                    ?>
                      <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
                    <?php
                    }
                    ?>

                </select>
              </div>
              <div class="mb-3 col-md-6">
                <label for="quantity" class="form-label">Quantity</label>
                <input
                  class="form-control"
                  type="number"
                  id="quantity"
                  name="quantity"
                  value=""
                  autofocus
                  required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="price" class="form-label">Product Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="price"
                  name="price"
                  value=""
                  required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="type">Product Type</label>
                <div class="input-group input-group-merge">
                  <select id="type" class="select2 form-select" name="type_id" required>
                    <option value="">Select Product Type</option>
                    <?php
                      $sql = "select type_id, type_name from type";
                      $rs = $mysqli->query($sql);

                      while ($row = mysqli_fetch_assoc($rs)) {
                      ?>
                        <option value="<?php echo $row['type_id'] ?>"><?php echo $row['type_name'] ?></option>
                      <?php
                      }
                      ?>
                  </select>
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="color" class="form-label">Product Color</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="" />
              </div>
              <div class="mb-3 col-md-6">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control"name="p_description" id="description" rows="8" cols="80"></textarea>
              </div>
              <div class="mb-3 col-md-6 d-flex align-items-start align-items-sm-center gap-4">
                <div class="button-wrapper">
                  <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input
                      type="file"
                      id="upload" name="picture"
                      class="account-file-input"
                      hidden
                      accept="image/png"
                    />
                  </label>
                  <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                  </button>
                  <!-- <img
                    src="../assets/img/avatars/1.png"
                    alt="user-avatar"
                    class="d-block rounded mb-3"
                    height="100"
                    width="100"
                    id="uploadedAvatar"
                  /> -->

                  <p class="text-muted mb-0">Allowed PNG Only. Max size of 2MB</p>
                </div>
              </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Add Product</button>
              <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
    </div>
  </div>
</div>
<<?php include("footer.php") ?>

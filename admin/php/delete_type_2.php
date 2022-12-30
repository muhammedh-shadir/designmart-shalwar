<?php
  require("validate_user.php");
  require("db_connection.php");
 ?>
<?php include("header.php") ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product Type Details /</span> Add Product Type</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link " href="add_type_1.php"><i class="bx bx-add-to-queue me-1"></i> Add Product Type</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit_type_1.php"
            ><i class="bx bx-edit-alt me-1"></i> Edit Product Type</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="delete_type_1.php"
            ><i class="bx bx-trash me-1"></i> Delete Product Type</a
          >
        </li>
      </ul>
      <div class="card mb-4">
        <h5 class="card-header">Product Type Details</h5>
        <!-- Account -->
        <hr class="my-0" />
        <div class="card-body">
          <?php

              $type_id = $_REQUEST['type_id'];
              $sql    = "select * from type where type_id = $type_id";
              $rs     = $mysqli->query($sql);
              if (mysqli_num_rows($rs) > 0) {
                $row = mysqli_fetch_assoc($rs);
              ?>


          <form id="formAccountSettings" method="POST" action="delete_type_3.php" enctype="multipart/form-data">
            <div class="row">
              <div class="mb-3 col-md-6">
                <input type="text" name="type_id" value="<?php echo $row['type_id'] ?>" hidden>
                <label for="name" class="form-label">Product Type Name</label>
                <input
                  class="form-control"
                  type="text"
                  id="type_name"
                  name="type_name"
                  value="<?php echo $row['type_name'] ?>"
                  autofocus
                  required disabled
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="description" class="form-label">Product Type Description</label>
                <textarea class="form-control"name="type_description" id="type_description" rows="8" cols="80" disabled><?php echo $row['type_description'] ?></textarea>
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
            <p><strong>Sorry!</strong> No matchings were found. Please check your Type ID.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <a href="delete_type_1.php" class="btn btn-danger">Try again</a>
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

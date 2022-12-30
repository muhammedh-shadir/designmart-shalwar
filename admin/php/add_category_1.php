<?php
  require("validate_user.php");
  require("db_connection.php");
 ?>
<?php include("header.php") ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category Details /</span> Add Category</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-add-to-queue me-1"></i> Add Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit_category_1.php"
            ><i class="bx bx-edit-alt me-1"></i> Edit Category</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete_category_1.php"
            ><i class="bx bx-trash me-1"></i> Delete Category</a
          >
        </li>
      </ul>
      <div class="card mb-4">
        <h5 class="card-header">Category Details</h5>
        <!-- Account -->
        <hr class="my-0" />
        <div class="card-body">
          <form id="formAccountSettings" method="POST" action="add_category_2.php" enctype="multipart/form-data">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Category Name</label>
                <input
                  class="form-control"
                  type="text"
                  id="cat_name"
                  name="cat_name"
                  value=""
                  autofocus
                  required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="description" class="form-label">Category Description</label>
                <textarea class="form-control"name="cat_description" id="cat_description" rows="8" cols="80"></textarea>
              </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Add Category</button>
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

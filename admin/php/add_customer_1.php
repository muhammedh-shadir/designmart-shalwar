<?php
  require("validate_user.php");
  require("db_connection.php");
 ?>
<?php include("header.php") ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Details /</span> Add User</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-add-to-queue me-1"></i> Add User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit_user_1.php"
            ><i class="bx bx-edit-alt me-1"></i> Edit User</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete_user_1.php"
            ><i class="bx bx-trash me-1"></i> Delete User</a
          >
        </li>
      </ul>
      <div class="card mb-4">
        <h5 class="card-header">User Details</h5>
        <!-- Account -->
        <hr class="my-0" />
        <div class="card-body">
          <form id="formAccountSettings" method="POST" action="add_user_2.php" enctype="multipart/form-data">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Username</label>
                <input
                  class="form-control"
                  type="email"
                  id="user_id"
                  name="user_id"
                  value=""
                  autofocus
                  required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Password</label>
                <input
                  class="form-control"
                  type="password"
                  id="access_code"
                  name="access_code"
                  value=""
                  autofocus
                  required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">User Group</label>
                <input
                  class="form-control"
                  type="text"
                  id="user_group"
                  name="user_group"
                  value=""
                  autofocus
                  required
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Nick Name</label>
                <input
                  class="form-control"
                  type="text"
                  id="nick_name"
                  name="nick_name"
                  value=""
                  autofocus
                  required
                />
              </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Add User</button>
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

<<?php include("header.php") ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product Details /</span> Add Product</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-add-to-queue me-1"></i> Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages-account-settings-notifications.html"
            ><i class="bx bx-edit-alt me-1"></i> Edit Product</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages-account-settings-connections.html"
            ><i class="bx bx-trash me-1"></i> Delete Product</a
          >
        </li>
      </ul>
      <div class="card mb-4">
        <h5 class="card-header">Product Details</h5>
        <!-- Account -->
        <hr class="my-0" />
        <div class="card-body">
          <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">Product Name</label>
                <input
                  class="form-control"
                  type="text"
                  id="firstName"
                  name="firstName"
                  value=""
                  autofocus
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Prodcut Category</label>
                <select id="language" class="select2 form-select">
                  <option value="">Select Category</option>
                  <option value="en">English</option>
                  <option value="fr">French</option>
                  <option value="de">German</option>
                  <option value="pt">Portuguese</option>
                </select>
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Quantity</label>
                <input
                  class="form-control"
                  type="text"
                  id="firstName"
                  name="firstName"
                  value=""
                  autofocus
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Product Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="organization"
                  name="organization"
                  value=""
                />
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Product Type</label>
                <div class="input-group input-group-merge">
                  <select id="language" class="select2 form-select">
                    <option value="">Select Product Type</option>
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="pt">Portuguese</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Product Color</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="" />
              </div>
              <div class="mb-3 col-md-6">
                <label for="state" class="form-label">Product Description</label>
                <textarea class="form-control"name="product_description" rows="8" cols="80"></textarea>
              </div>
              <div class="mb-3 col-md-6 d-flex align-items-start align-items-sm-center gap-4">
                <div class="button-wrapper">
                  <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input
                      type="file"
                      id="upload"
                      class="account-file-input"
                      hidden
                      accept="image/png, image/jpeg"
                    />
                  </label>
                  <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                  </button>
                  <img
                    src="../assets/img/avatars/1.png"
                    alt="user-avatar"
                    class="d-block rounded mb-3"
                    height="100"
                    width="100"
                    id="uploadedAvatar"
                  />

                  <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
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

<?php include("include/header.php") ?>
<?php require("admin/php/db_connection.php") ?>

<?php
    if ($_SESSION['email'] == "") {
      header("location: invalid_login.php");
    }
 ?>
<div class="container my-4 py-5 ">
  <div class="row align-items-center justify-content-between">
    <div class="col-lg-6 d-none d-lg-block">
        <img src="images/signup-image.jpg" alt="signup image" class="w-100">
    </div>
    <div class="col-lg-6">
        <?php

            $email = $_GET['id'];
            $sql   = "select * from customer_list where email = '$email'";
            $rs = $mysqli->query($sql);

            if (mysqli_num_rows($rs) > 0) {
              $row = mysqli_fetch_assoc($rs);
            }
         ?>
        <!-- <h2 class="mb-3">Hey! Welcome!</h2> -->
        <h3 class="mb-5 text-center">Update your account here</h3>
        <form class="w-75 mx-auto signup-form mb-5" action="details_2.php" method="post" onSubmit="return validate();">
          <label for=" class">First Name</label>
          <input class="form-control form-control-lg mb-4 contact-input d-block" name="first_name" type="text" placeholder="First Name" required value="<?php echo $row['first_name'] ?>">

          <label for="">Last Name</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="last_name" type="text" placeholder="Last Name" required value="<?php echo $row['last_name'] ?>">

          <label for="">No</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="no" type="text" placeholder="No" required value="<?php echo $row['no'] ?>">

          <label for="">Street</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="street" type="text" placeholder="Street" required value="<?php echo $row['street'] ?>" >

          <label for="">City</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="city" type="text" placeholder="City" required value="<?php echo $row['city'] ?>">

          <label for="">Zip Code</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="zip_code" type="number" placeholder="Zip Code" required value="<?php echo $row['zip_code'] ?>">

          <label for="">Phone</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="phone" type="text" placeholder="Phone" required value="<?php echo $row['phone'] ?>">

          <label for="" hidden>Email</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="email" type="email" placeholder="Email" required hidden value="<?php echo $row['email'] ?>">

          <label for="">Email</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="email-disabled" type="email" placeholder="Email" required disabled value="<?php echo $row['email'] ?>">

          <label for="">Password</label>
          <input class="form-control form-control-lg mb-4 contact-input" name="pass_code" id="password" type="text" placeholder="Password" required value="<?php echo $row['pass_code'] ?>">

          <button type="submit" class="btn btn-lg  btn-success mb-4 d-block w-100">Save Changes</button>
          <p class="text-center"> Click <a href="index.php" class="nextpage-link">here</a> to go to home</p>
        </form>
    </div>
  </div>
</div>


<?php include("include/footer.php") ?>

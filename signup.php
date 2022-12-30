<?php include("include/header.php") ?>

<div class="container my-4 py-5 text-center">
  <div class="row align-items-center justify-content-between">
    <div class="col-lg-6 d-none d-lg-block">
        <img src="images/signup-image-boy.jpg" alt="signup image" class="w-100">
    </div>
    <div class="col-lg-6">
        <h2 class="mb-3">Hey! Welcome!</h2>
        <h3 class="mb-5">Create an account here</h3>
        <form class="w-75 mx-auto signup-form mb-5" action="signup_2.php" method="post" onSubmit="return validate();">
          <input class="form-control form-control-lg mb-4 contact-input" name="first_name" type="text" placeholder="First Name" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="last_name" type="text" placeholder="Last Name" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="no" type="text" placeholder="No" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="street" type="text" placeholder="Street" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="city" type="text" placeholder="City" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="zip_code" type="number" placeholder="Zip Code" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="phone" type="text" placeholder="Phone" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="email" type="email" placeholder="Email" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="pass_code" id="password" type="password" placeholder="Password" required>
          <input class="form-control form-control-lg mb-4 contact-input" name="confirm_pass_code" id="confirm_password" type="password" placeholder="Confirm Password" required>
          <button type="submit" class="btn btn-lg contact-button  mb-4 d-block w-100">SIGN UP</button>
          <p>Already have an account? Click <a href="login.php" class="nextpage-link">here</a> to sign in!</p>
        </form>
    </div>
  </div>
</div>

   <script>
       function validate(){

           var password = document.getElementById("password").value;
           var confirmPassword = document.getElementById("confirm_password").value;
           if (password!=confirmPassword) {
              alert("Passwords do no match");
              return false;
           }
       }
    </script>

<?php include("include/footer.php") ?>

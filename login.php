<?php include("include/header.php") ?>
<div class="container my-4 py-5 text-center">
  <div class="row align-items-center justify-content-between">
    <div class="col-lg-6 d-none d-lg-block">
        <img src="images/Illustration-PNG-Cutout.png" alt="signup image" class="w-100">
    </div>
    <div class="col-lg-6">
        <h2 class="mb-3">Hey! Welcome Back!</h2>
        <h3 class="mb-4">Login</h3>
        <form class="w-75 mx-auto signup-form mb-5" action="login_2.php" method="post">
          <input class="form-control form-control-lg mb-4 contact-input" type="email" name="email" placeholder="Email Address" required>
          <input class="form-control form-control-lg mb-4 contact-input" type="password" name="pass_code" placeholder="Password" required>
          <button type="submit" class="btn btn-lg contact-button mb-4 d-block w-100">LOGIN</button>
          <p>Don't have an account? Click <a href="signup.php" class="nextpage-link">here</a> to sign up!</p>
        </form>
    </div>
  </div>
</div>

<?php include("include/footer.php") ?>

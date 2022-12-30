<?php session_start(); ?>
<?php require("admin/php/db_connection.php") ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design Mart Shalwars | The Pefect Fit</title>
    <link rel="icon" href="images/logo.png">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,500,700,800|Work+Sans:400,700,800"
    rel="stylesheet">
    <!-- css styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/lightbox.css">


  </head>
  <body>

    <!-- top banner section -->
    <section class="top-banner bg-dark">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="cover-title m-0">free shipping island wide</h6>
            <?php

                if (isset($_SESSION['email']) == "") {
                ?>
                  <a href="./signup.php" class="sign-up">Sign Up <i class="fas fa-user"></i></a>
                <?php
                }
                else {
                  ?>
                    <li class="dropdown px-0 list-unstyled">
                      <a href="#" class="dropdown-toggle sign-up"  id="signupDrop" role="button" data-bs-toggle="dropdown" aria-expanded="true">Sign Up <i class="fas fa-user"></i></a>
                      <ul class="dropdown-menu" aria-labelledby="signupDrop">
                        <li><a class="dropdown-item" href="./details.php?id=<?php echo $_SESSION['email'] ?>">View Details</a></li>
                        <li><a class="dropdown-item" href="./logout.php">Logout</a></li>

                      </ul>
                    </li>
                  <?php
                }
             ?>
          </div>
      </div>
    </section>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="./index.php" class="navbar-brand">Design Mart <span class="brand-style">Shalwars</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown pe-2">
                <a href="#" class="nav-link dropdown-toggle"  id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">SHOP</a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <?php
                    $sql = "select cat_id, cat_name from category";
                    $rs = $mysqli->query($sql);

                    while ($row = mysqli_fetch_assoc($rs)) {
                    ?>
                    <li><a class="dropdown-item text-capitalize" href="./category.php?cat_id=<?php echo $row['cat_id'] ?>" value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
              </li>
              <li class="nav-item pe-2">
                <a href="./gallery.php" class="nav-link">GALLERY</a>
              </li>
              <li class="nav-item pe-2">
                <a href="./contact.php" class="nav-link">CONTACT</a>
              </li>
              <li class="nav-item pe-2">
                <a href="./about.php" class="nav-link">ABOUT</a>
              </li>
              <li class="nav-item">

                  <form class="d-flex" action="search_2.php" enctype="multipart/form-data">
                    <input class="form-control me-2 search-bar contact-input" name="search" type="search" placeholder="Search" aria-label="Search" value="<?php if (isset($_REQUEST['search'])) echo $_REQUEST['search']; else $_REQUEST['search'] = ""?>">
                    <button type="submit" class="border-0 bg-light px-0"><i class="fas fa-search"></i></button>
                  </form>
            </ul>
          </div>
      </div>
    </nav>

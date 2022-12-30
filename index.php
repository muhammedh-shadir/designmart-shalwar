  <?php include("include/header.php") ?>

    <!-- carousoul section -->
    <section class="billboard-banner">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="false">
          <div class="carousel-inner container">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="big-heading w-80 mb-2">Get up to 30% Off New Arrivals</h1>
                  <p class="carousal-subtitle pb-1 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tortor diam, iaculis sit amet dictum quis, dignissim consequat elit. Fusce efficitur iaculis lorem, sed laoreet lacus vulputate id. </p>
                  <button type="button" name="button" class="btn btn-lg btn-dark mb-5 shopping-button"><i class="fas fa-shopping-bag"></i> Buy now</button>
                </div>
                <div class="col-lg-6">
                  <img src="images\yellow-kurti.png" class="d-block w-60 carousel-image mx-auto" alt="blue saree">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="big-heading mb-2">Pure Quality Shalwar Collections</h1>
                  <p class="carousal-subtitle pb-1 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tortor diam, iaculis sit amet dictum quis, dignissim consequat elit. Fusce efficitur iaculis lorem, sed laoreet lacus vulputate id. </p>
                  <button type="button" name="button" class="btn btn-lg btn-dark mb-5 shopping-button"><i class="fas fa-shopping-bag"></i> Buy now</button>
                </div>
                <div class="col-lg-6">
                  <img src="images\green-shalwar.png" class="d-block w-60 carousel-image mx-auto" alt="green shalwar">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="big-heading mb-2">Get the Classic Saree for Wedding</h1>
                  <p class="carousal-subtitle pb-1 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tortor diam, iaculis sit amet dictum quis, dignissim consequat elit. Fusce efficitur iaculis lorem, sed laoreet lacus vulputate id. </p>
                  <button type="button" name="button" class="btn btn-lg btn-dark mb-5 shopping-button"><i class="fas fa-shopping-bag"></i> Buy now</button>
                </div>
                <div class="col-lg-6">
                  <img src="images\purple-sareee.png" class="d-block w-60 carousel-image mx-auto" alt="purple saree">
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon carousel-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon carousel-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </section>


    <!-- service section -->
    <?php include("include/service.php") ?>


    <!-- new arrival section -->
    <section class="new-arrival">
      <div class="container">
        <div class="row">
          <h1 class="text-center mb-5 card-main-title">New Arrivals</h1>

          <?php

            $sql2  = "select * from product where type_id = 2  order by pid desc limit 8; ";

            $rs2 = $mysqli->query($sql2);

            while ($row = mysqli_fetch_assoc($rs2)) {
            ?>
              <div class="col-xxl-3 col-lg-4 col-md-6 mb-5 card-body-container">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $row['picture'] ?>" class="card-img-top card-image" alt="product image">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $row['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $row['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $row['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

              <?php
            }

           ?>

        </div>
      </div>
    </section>


    <!-- customer favourites -->
    <section class="cutomer-favourites mb-5 py-5">
      <h1 class="text-center customer-favourites-main-title text-white">Customer Favourites</h1>
      <div class="text-light">


      <?php

          $sql3 = "select * from product where type_id = 3 order by pid desc limit 12;";
          $rs3 = $mysqli->query($sql3);

          while ($a = mysqli_fetch_assoc($rs3)) {
            $cus_favourtie[] = $a;
          }
       ?>
      </div>

      <div id="cutomer-favourites" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner container">
          <div class="carousel-item active" data-bs-interval="3000">
            <div class="row">
              <div class="col-xxl-3 col-lg-4 col-md-6">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[0]['picture'] ?>" class="card-img-top card-image" alt="Light Purple Cotton Kurti">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[0]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[0]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[0]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[0]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-md-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[1]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[1]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[1]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[1]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[1]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-lg-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[2]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[2]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[2]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[2]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[2]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-xxl-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[3]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[3]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[3]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[3]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[3]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item" data-bs-interval="3000">
            <div class="row">
              <div class="col-xxl-3 col-lg-4 col-md-6">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[4]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[4]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[4]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[4]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[4]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-md-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[5]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[5]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[5]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[5]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[5]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-lg-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[6]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[6]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[6]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[6]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[6]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-xxl-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[7]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[7]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[7]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[7]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[7]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="carousel-item" data-bs-interval="3000">
            <div class="row">

              <div class="col-xxl-3 col-lg-4 col-md-6">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[8]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[8]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[8]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[8]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[8]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-md-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[9]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[9]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[9]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[9]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[9]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-lg-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[10]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[10]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[10]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[10]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[10]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-lg-4 col-md-6 d-none d-xxl-block">
                <div class="card mx-auto" style="width: 18rem;">
                  <div class="d-flex card-image-container">
                    <img src="admin/php/images/large/<?php echo $cus_favourtie[11]['picture'] ?>" class="card-img-top card-image" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $cus_favourtie[11]['p_name'] ?></h5>
                    <p class="card-text card-description"><?php echo $cus_favourtie[11]['p_description'] ?></p>
                    <p class="card-text card-price">LKR <?php echo $cus_favourtie[11]['price'] ?>.00 </p>
                    <a href="view_more.php?pid=<?php echo $cus_favourtie[11]['pid'] ?>" class="btn card-btn btn-primary">View More</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cutomer-favourites" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cutomer-favourites" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- testimonial section -->
    <section class="testimonial mb-5">
      <h1 class="text-center testimonial-title">
        <i class="fas fa-quote-right"></i>
      </h1>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner container">
          <div class="carousel-item active p-1" data-bs-interval="2000">
            <figure>
              <blockquote class="blockquote text-center">
                <p>Good price for the value. Really satisfied</p>
              </blockquote>
              <figcaption class="blockquote-footer text-center">
                Andre Perera <cite title="Source Title">CEO of Design X</cite>
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item p-1" data-bs-interval="2000">
            <figure>
              <blockquote class="blockquote text-center">
                <p>Greate collections. Pue qualit.</p>
              </blockquote>
              <figcaption class="blockquote-footer text-center">
                Marshal Matt <cite title="Source Title">Manager of MM Export</cite>
              </figcaption>
            </figure>
          </div>
          <div class="carousel-item p-1" data-bs-interval="2000">
            <figure>
              <blockquote class="blockquote text-center">
                <p>Premium quality. Perfect place for wedding dress shopping</p>
              </blockquote>
              <figcaption class="blockquote-footer text-center">
                Anuja <cite title="Source Title">Regular Customer</cite>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

  <?php include("include/footer.php") ?>

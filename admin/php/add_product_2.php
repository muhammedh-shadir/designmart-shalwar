<?php
  require("validate_user.php");
  require("db_connection.php");
  require("code_lib.inc.php");
  // echo "<pre>";
  // print_r($_REQUEST);
  // echo "</pre>";

  $p_name = $_REQUEST['p_name'];
  $quantity = $_REQUEST['quantity'];
  $price = $_REQUEST['price'];
  $color = $_REQUEST['color'];
  $p_description = $_REQUEST['p_description'];
  $cat_id = $_REQUEST['cat_id'];
  $type_id = $_REQUEST['type_id'];

  $sql  = "insert into product (p_name, quantity, price, color, p_description, cat_id, type_id) ";
  $sql .= "values ('$p_name', $quantity, $price, '$color', '$p_description', $cat_id, $type_id)";

  // echo $sql;

  $x = $mysqli->query($sql);

  if ($x > 0) {

    // upload code starts here
    if ($_FILES['picture']['error'] == 0 && $_FILES['picture']['type'] == "image/png") {

      $last_id     = $mysqli->insert_id;
      $filename    = $_FILES['picture']['tmp_name'];
      $destination = $last_id . "_" . rand() . rand() . rand().".png";

      //getting the category name
      // $sql2 = "select name from category where cat_id = $cat_id";
      // $rs = $mysqli->query($sql2);
      // if (mysqli_num_rows($rs)>0) {
      //   $row = mysqli_fetch_assoc($rs);
      //   echo $filename,"images/large/".$row['name']."/".$destination;
      //   $cat_name = $row['name'];
      // }
      $y = move_uploaded_file($filename,"images/large/".$destination);

      if ($y > 0) {
        $sql2 = "update product set picture = '$destination' where pid = $last_id";
        $z = $mysqli->query($sql2);

        copy("images/large/".$destination, "images/thumb/".$destination);
        resizeThumbPicture("images/thumb/", $destination);
      }

    }
    // upload code ends here

    // echo "successfully added";
    header("location: add_product_3.php?status=success");
  }
  else {
    // echo "failed to add";
    header("location: add_product_3.php?status=fail");
  }

 ?>

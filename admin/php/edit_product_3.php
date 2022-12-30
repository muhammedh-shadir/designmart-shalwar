<?php
  require("validate_user.php");
  require("db_connection.php");
  require("code_lib.inc.php");
  // echo "<pre>";
  // print_r($_REQUEST);
  // echo "</pre>";

  $pid = $_REQUEST['pid'];
  $p_name = $_REQUEST['p_name'];
  $cat_id = $_REQUEST['cat_id'];
  $quantity = $_REQUEST['quantity'];
  $price = $_REQUEST['price'];
  $type_id = $_REQUEST['type_id'];
  $color = $_REQUEST['color'];
  $p_description = $_REQUEST['p_description'];

  $sql  = "update product set ";
  $sql .= "p_name = '$p_name', ";
  $sql .= "quantity = $quantity, ";
  $sql .= "price = $price, ";
  $sql .= "color = '$color', ";
  $sql .= "p_description = '$p_description', ";
  $sql .= "cat_id = $cat_id, ";
  $sql .= "type_id = $type_id where pid = $pid";

  $x = $mysqli->query($sql);

  if ($x > 0) {
    // echo "record updated successful";

    if ($_FILES['picture']['error'] == 0 && $_FILES['picture']['type'] == "image/png") {

      $old_picture_name = getProductPicture($pid);
      $filename = $_FILES['picture']['tmp_name'];
      $destination;

      if ($old_picture_name == "default.png") {
        $destination = $pid . "_" . rand() . rand() . rand() . ".png";
      }
      else {
        $destination = $old_picture_name;
      }

      move_uploaded_file($filename, "images/large/".$destination);
      copy("images/large/".$destination,"images/thumb/".$destination);
      resizeThumbPicture("images/thumb/", $destination);

      $sql2 = "update product set picture = '$destination' where pid = $pid";
      $mysqli->query($sql2);

    }
    header("location: edit_product_4.php?status=success");
  }
  else {
    // echo "record updated failed";
    header("location: edit_product_4.php?status=fail");
  }

 ?>

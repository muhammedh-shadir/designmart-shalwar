<?php
  require("validate_user.php");
  require("db_connection.php");
  require("code_lib.inc.php");

  // echo "<pre>";
  // print_r($_REQUEST);
  // echo "</pre>";

  $pid = $_REQUEST['pid'];
  $old_picture_name = getProductPicture($pid);


  $sql  = "delete from product where pid=$pid";


  $x = $mysqli->query($sql);

  if ($x > 0) {
    // echo "record updated successful";

    if ($old_picture_name != "default.png") {
      unlink("images/large/$old_picture_name");
      unlink("images/thumb/$old_picture_name");
    }

    header("location: delete_product_4.php?status=success");
  }
  else {
    // echo "record updated failed";
    header("location: delete_product_4.php?status=fail");
  }

 ?>

<?php
  require("validate_user.php");
  require("db_connection.php");

  $cat_name        = $_REQUEST['cat_name'];
  $cat_description = $_REQUEST['cat_description'];

  $sql  = "insert into category (cat_name, cat_description) ";
  $sql .= "values ('$cat_name', '$cat_description')";

  $x = $mysqli->query($sql);
  if ($x > 0) {
      header("location: add_category_3.php?status=success");
  }
  else {
    header("location: add_category_3.php?status=fail");
  }
 ?>

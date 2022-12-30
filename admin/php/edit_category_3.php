<?php
  require("validate_user.php");
  require("db_connection.php");

  $cat_id          = $_REQUEST['cat_id'];
  $cat_name        = $_REQUEST['cat_name'];
  $cat_description = $_REQUEST['cat_description'];

  $sql  = "update category set ";
  $sql .= "cat_name = '$cat_name', ";
  $sql .= "cat_description = '$cat_description' ";
  $sql .= "where cat_id = $cat_id";

  $x = $mysqli->query($sql);

  if ($x > 0) {
    header("location: edit_category_4.php?status=success");
  }
  else {
    header("location: edit_category_4.php?status=fail");
  }

 ?>

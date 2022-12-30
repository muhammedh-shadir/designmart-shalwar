<?php
  require("validate_user.php");
  require("db_connection.php");

  $cat_id          = $_REQUEST['cat_id'];

  $sql  = "delete from category where cat_id = $cat_id";


  $x = $mysqli->query($sql);

  if ($x > 0) {
    header("location: delete_category_4.php?status=success");
  }
  else {
    header("location: delete_category_4.php?status=fail");
  }

 ?>

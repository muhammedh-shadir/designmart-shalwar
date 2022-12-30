<?php
  require("validate_user.php");
  require("db_connection.php");

  $type_name        = $_REQUEST['type_name'];
  $type_description = $_REQUEST['type_description'];

  $sql  = "insert into type (type_name, type_description) ";
  $sql .= "values ('$type_name', '$type_description')";

  $x = $mysqli->query($sql);
  if ($x > 0) {
      header("location: add_type_3.php?status=success");
  }
  else {
    header("location: add_type_3.php?status=fail");
  }
 ?>

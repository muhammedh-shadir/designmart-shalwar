<?php
  require("validate_user.php");
  require("db_connection.php");

  $type_id          = $_REQUEST['type_id'];
  $type_name        = $_REQUEST['type_name'];
  $type_description = $_REQUEST['type_description'];

  $sql  = "update type set ";
  $sql .= "type_name = '$type_name', ";
  $sql .= "type_description = '$type_description' ";
  $sql .= "where type_id = $type_id";

  $x = $mysqli->query($sql);

  if ($x > 0) {
    header("location: edit_type_4.php?status=success");
  }
  else {
    header("location: edit_type_4.php?status=fail");
  }

 ?>

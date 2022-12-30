<?php
  require("validate_user.php");
  require("db_connection.php");

  $type_id          = $_REQUEST['type_id'];

  $sql  = "delete from type where type_id = $type_id";


  $x = $mysqli->query($sql);

  if ($x > 0) {
    header("location: delete_type_4.php?status=success");
  }
  else {
    header("location: delete_type_4.php?status=fail");
  }

 ?>

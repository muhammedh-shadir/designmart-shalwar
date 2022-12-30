<?php
  // require("validate_user.php"); 
  $server   = "localhost";
  $username = "root";
  $password = "";
  $db_name  = "db_ad_designmart";

  $mysqli = new mysqli($server, $username, $password, $db_name);

  if ($mysqli->connect_error) {
    echo $mysqli->errorno . "<br />";
    echo $mysqli->errorno . "<br />";
    die("connection failed");
  }
  // echo "connection successful";

 ?>

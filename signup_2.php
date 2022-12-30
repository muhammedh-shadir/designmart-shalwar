<?php

  require("admin/php/db_connection.php");

  $first_name = $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  $no = $_REQUEST['no'];
  $street = $_REQUEST['street'];
  $city = $_REQUEST['city'];
  $zip_code = $_REQUEST['zip_code'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $pass_code = $_REQUEST['pass_code'];
  $confirm_pass_code = $_REQUEST['confirm_pass_code'];

  if ($password == $confirm_password) {
    $sql  = "insert into customer_list values ('$first_name', ";
    $sql .= "'$last_name', '$no', '$street', '$city', $zip_code, ";
    $sql .= "'$phone', '$email', '$pass_code') ";

    $x = $mysqli->query($sql);
    if ($x > 0) {
      echo "success";
      header("location: signup_3.php?status=success");
    }
    else {
      header("location: signup_3.php?status=fail-email");
    }
  }
  else {
    header("location: signup_3.php?status=fail-password");
  }

 ?>

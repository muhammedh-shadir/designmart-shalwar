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

  $sql  = "update customer_list set first_name = '$first_name', ";
  $sql .= "last_name = '$last_name', no = '$no', street = '$street', ";
  $sql .= "city = '$city', zip_code = $zip_code, phone = '$phone',  ";
  $sql .= "pass_code = '$pass_code' where email = '$email'";

    $x = $mysqli->query($sql);
    if ($x > 0) {
      header("location: details_3.php?status=success");
    }
    else {
      header("location: details_3.php?status=fail");
    }



 ?>

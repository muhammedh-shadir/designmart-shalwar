<?php

  require("admin/php/db_connection.php");

  $cus_name    = $_REQUEST['cus_name'];
  $cus_email   = $_REQUEST['cus_email'];
  $cus_phone   = $_REQUEST['cus_phone'];
  $cus_message = $_REQUEST['cus_message'];

  $sql  = "insert into customer_inquirie (cus_name, cus_email, cus_phone, cus_message) ";
  $sql .= "values('$cus_name', '$cus_email', '$cus_phone', '$cus_message')";

  $x = $mysqli->query($sql);

  if ($x > 0) {
    header("location: contact_3.php?status=success");
  }
  else {
    header("location: contact_3.php?status=fail");
  }

 ?>

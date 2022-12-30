<?php
  session_start();
  require("admin/php/db_connection.php");

  $email     = $_REQUEST['email'];
  $pass_code = $_REQUEST['pass_code'];

  $sql = "select * from customer_list where email = '$email'";

  $rs = $mysqli->query($sql);

  if (mysqli_num_rows($rs) > 0) {

      $row = mysqli_fetch_assoc($rs);

      if ($row['pass_code'] == $pass_code) {

        $_SESSION['email'] = $email;
        header("location: login_3.php?id=$email");
      }
      else {
        header("location: invalid_login.php");
      }
  }
  else {
    header("location: invalid_login.php");
  }

 ?>

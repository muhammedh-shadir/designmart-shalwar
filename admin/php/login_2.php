<?php
  session_start();
  require("db_connection.php");

  // echo "<pre>";
  // print_r($_REQUEST);
  // echo "</pre>";

  $user_id     = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];

  $sql = "select * from logs where user_id = '$user_id'";

  $rs = $mysqli->query($sql);

  if (mysqli_num_rows($rs) > 0) {

      $row = mysqli_fetch_assoc($rs);

      if (crypt($access_code, $row['access_code']) == $row['access_code']) {

        $_SESSION['user_id']    = $user_id;
        $_SESSION['user_group'] = $row['user_group'];

        header("location: dashboard.php");
      }
      else {
        header("location: invalid_login.php");
      }
  }
  else {
    header("location: invalid_login.php");
  }

 ?>

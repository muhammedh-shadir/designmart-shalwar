<?php

    session_start();
    if ($_SESSION['user_id'] == "") {
      header("location: invalid_login.php");
    }

 ?>

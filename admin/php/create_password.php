<?php
  require("validate_user.php"); 
  echo "<h1>";
  $pwd = "user";
  echo "<hr>";
  echo "after encrption <br />";
  echo crypt($pwd, "x7zk0");
  echo "</h1>";

 ?>

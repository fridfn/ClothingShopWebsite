<?php

 $hostname = "127.0.0.1";
 $username = "root";
 $password = "root";
 $database_name = "cartluxe_users";


 $db = mysqli_connect($hostname, $username, $password, $database_name);
 
 if (mysqli_connect_errno()) {
  echo "koneksi database rusak";
  die("eror!!");
 }
?>
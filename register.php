<?php
include "authentication/database.php";
session_start();
$message_info = "Silahkan daftar terlebih dahulu";
$_SESSION["message_info"] = $message_info;

if (isset($_POST["register"])) {
 $username = $_POST['username'];
 $phonenumber = $_POST['phonenumber'];
 
 if (empty($username) || empty($phonenumber)) {
  $message_info = "Mohon isi semua form!";
 } else {
  $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if ($result->num_rows > 0) {
   $message_info = "Maaf, username sudah digunakan.";
  } else {
   $stmt = $db->prepare("INSERT INTO users (username, phonenumber) VALUES (?, ?)");
   $stmt->bind_param("ss", $username, $phonenumber);
   
   if ($stmt->execute()) {
    $message_info = "Registrasi berhasil, silahkan login.";
   } else {
    $message_info = "Registrasi gagal, silahkan coba lagi.";
   }
  }
 }
 $db->close();
 $_SESSION["message_info"] = $message_info;
}

?>

<!DOCTYPE html>
<html>
 <head>
  <meta name="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <title>Online Clothing Shop's</title>
  <link rel="stylesheet" href="../style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 </head>
 <body>
  <?php include "pages/layout/notif.html" ?>
  <div class="container-page-login" style="visibility: visible; display: flex;">
   <div class="content-login">
    <div class="box-brand">
     <img src="../assets/product/clothes/brand-nobg.png" class="brand-nobg"/>
    </div>
     <a class="login-sigin" id="title-login">Register</a>
    <form action="register.php" method="POST">
     <div class="wrapper-input-number">
      <ion-icon name="person" class="icon"></ion-icon>
      <input placeholder="Masukan Nama" class="input-number" type="text" name="username" required/>
     </div>
     <div class="wrapper-input-number">
      <ion-icon name="call" class="icon"></ion-icon>
      <input placeholder="Masuk dengan no ponsel" class="input-number" type="number" name="phonenumber" required/>
     </div>
     <button class="wrapper-input-number input-number" id="btn-login" type="submit" name="register">
     <ion-icon name="log-in" class="icon"></ion-icon>Masuk</button>
    </form>
    <p class="login-sigin">Apakah sudah mempunyai akun? <a id="register" href="login.php">Login</a></p>
    <p class="login-sigin">atau login dengan yang lain</p>
    <div class="box-other-login">
     <ion-icon name="logo-google" class="icon"></ion-icon>
     <ion-icon name="logo-facebook" class="icon"></ion-icon>
     <ion-icon name="logo-twitter" class="icon"></ion-icon>
    </div>
   </div>
  </div>
  <script src="index.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 </body>
</html>
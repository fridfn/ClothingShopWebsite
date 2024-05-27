<?php
  include "authentication/database.php";
  session_start();
  $message_info = "Silahkan mengisi form terlebih dahulu";
  $_SESSION["message_info"] = $message_info;
  
  if (isset($_POST["login"])) {
    
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    
    $sql = "SELECT * FROM users WHERE username='$username' AND phonenumber='$phonenumber'";
    
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
     $data = $result->fetch_assoc();
     
     $_SESSION["username"] = $data["username"];
     $_SESSION["phonenumber"] = $data["phonenumber"];
     $_SESSION["is_login"] = true;
     
     $message_info = "Selamat datang di Cartluxe Shop's {$data['username']}";
     
     header("location: index.php");
    } else {
     $message_info = "maaf user tidak di temukan / kata sandi salah!";
     $_SESSION["message_info"] = $message_info;
    }
   
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
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 </head>
 <body>
   <?php include "pages/layout/notif.html" ?>
  <div class="container-page-login">
   <div class="content-login">
    <div class="box-brand">
     <img src="../assets/product/clothes/brand-nobg.png" class="brand-nobg"/>
    </div>
     <a class="login-sigin" id="title-login">Login</a>
    <form id="my-form" action="login.php" method="POST">
     <div class="wrapper-input-number">
      <ion-icon name="person" class="icon"></ion-icon>
      <input placeholder="Masukan Nama" class="input-number" type="text" name="username" required/>
     </div>
     <div class="wrapper-input-number">
      <ion-icon name="call" class="icon"></ion-icon>
      <input placeholder="Masuk dengan no ponsel" class="input-number" type="number" name="phonenumber" required/>
     </div>
     <button class="wrapper-input-number input-number" id="btn-login" type="submit" name="login">
     <ion-icon name="log-in" class="icon"></ion-icon>Masuk</button>
    </form>
    <p class="login-sigin">Belum mempunyai akun? <a id="register" href="register.php">Register</a></p>
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
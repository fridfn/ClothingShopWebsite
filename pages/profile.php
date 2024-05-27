<?php
 session_start();
 
 $username = $_SESSION["is_login"] ? $_SESSION["username"] : "unknown" ;
 $phonenumber = $_SESSION["is_login"] ? $_SESSION["phonenumber"] : "unknown" ;
 
 
 if (isset($_POST["logout"])) {
  session_unset();
  session_destroy();
  
  header("location: ../login.php");
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
  <?php include "layout/notif.html" ?>
  <div class="container-page-profile">
   <section class="title-profile" id="header-title-section">
    <div class="box-icon">
      <ion-icon name="person-add" class="icon"></ion-icon>
    </div>
    <div class="wrapper-info-profile">
     <p class="title-text">Hello, <?php echo $username ?></p>
     <p class="title-text" id="phonenumber">Phone : <?= $phonenumber ?></p>
    </div>
    <div class="wrapper-settings">
     <ion-icon name="settings" class="settings"></ion-icon>
     <div class="option-settings">
      <form class="items-settings" method="POST">
       <button name="logout" class="logout">Logout</button>
      </form>
     </div>
    </div>
   </section>
   <section class="section-content">
    <div class="ordered-title">
     <p class="title-text">My Ordered</p>
     <p class="description-text" style="font-size: 12px;">Show All</p>
    </div>
    <div class="wrapper-cta-ordered">
      <div class="cta-ordered">
       <ion-icon name="card-outline" class="icon"></ion-icon>
       <p class="description-text">Not Paid</p>
      </div>
      <div class="cta-ordered" onclick="handleAction('packing')">
       <ion-icon name="logo-dropbox" class="icon"></ion-icon>
       <p class="description-text">Packing</p>
      </div>
      <div class="cta-ordered" onclick="handleAction('shipping')">
       <ion-icon name="car-outline" class="icon"></ion-icon>
       <p class="description-text">Shipping</p>
      </div>
      <div class="cta-ordered">
       <ion-icon name="chatbox-ellipses-outline" class="icon"></ion-icon>
       <p class="description-text">Review</p>
      </p>
     </div>
   </section>
   <h3 style="color: #000;">Recommendation For You</h3>
   <section class="section-content" id="section-product-recomended">
    <div class="wrapper-recomended-product">
     <div class="product-recomended">
      <div class="box-icon">
       <img src="../assets/product/sell/product.jpeg" class="image"/>
      </div>
      <p class="title-product">Cottagecore</p>
     </div>
    </div>
   </section>
   </div>
   <?php include "layout/order_shipping.html" ?>
   <?php include "layout/footer.html" ?>
   <script src="../script/profile.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 </body>
</html>
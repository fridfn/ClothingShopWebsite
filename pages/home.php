<?php
  session_start();
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
  <div class="container-my-popup">
   <div class="my-popup">
    <lord-icon src="https://cdn.lordicon.com/krenhavm.json" trigger="in" delay="600" stroke="bold" state="in-reveal" class="current-color" id="ico-koleksi"></lord-icon>
    <p class="description_text" id="text-popup"><?php echo $_SESSION["message_info"] ?></p>
   </div>
  </div>
  <div class="main-page" style="display: flex; visibility: visible;">
   <div class="wrapper-search">
    <ion-icon class="icon" name="ellipsis-vertical" id="more-options" onclick="moreOptions()"></ion-icon>
    <div class="search">
    <ion-icon class="icon" name="search"></ion-icon>
    <input placeholder="Search Product" class="input" id="search-input" type="text"/>
    <ion-icon class="icon" name="camera"></ion-icon>
    </div>
    <ion-icon class="icon" name="bag"></ion-icon>
    <ion-icon class="icon" name="chatbubble-ellipses-outline"></ion-icon>
   </div>
   <div class="container-option-search">
    <div class="header-option-search"></div>
    <div class="wrapper-box-options">
     <div class="box-options">
      <p class="option-text">Diskon 50%</p>
      <ion-icon name="shirt" class="icon"></ion-icon>
     </div>
    </div>
   </div>
   <div class="container-models" id="main-models">
    <img src="../assets/product/clothes/models.jpeg" class="models-bg"/>
   </div>
   <div class="container-category">
    <h1 class="main-title">CATEGORY</h1>
    <div class="wrapper-category-items">
     <div class="wrapper-items">
      <div class="items">
       <img src="../assets/product/clothes/clothes1.jpg" class="items-image"/>
      </div>
      <p class="name-items">Camisoles</p>
     </div>
     <div class="wrapper-items">
      <div class="items">
       <img src="../assets/product/clothes/clothes2.jpg" class="items-image"/>
      </div>
      <p class="name-items">Tops</p>
     </div>
     <div class="wrapper-items">
      <div class="items">
       <img src="../assets/product/clothes/clothes3.jpg" class="items-image"/>
      </div>
      <p class="name-items">Sweaters</p>
     </div>
     <div class="wrapper-items">
      <div class="items">
       <img src="../assets/product/clothes/clothes4.jpg" class="items-image"/>
      </div>
      <p class="name-items">Shorts</p>
     </div>
     <div class="wrapper-items">
      <div class="items">
       <img src="../assets/product/clothes/clothes5.jpg" class="items-image"/>
      </div>
      <p class="name-items">Sleeved</p>
     </div>
     <div class="wrapper-items">
      <div class="items">
       <img src="../assets/product/clothes/clothes6.jpg" class="items-image"/>
      </div>
      <p class="name-items">Dresses</p>
     </div>
     <div class="wrapper-items">
      <div class="items">
       <img src="../assets/product/clothes/clothes7.jpg" class="items-image"/>
      </div>
      <p class="name-items">Pants</p>
     </div>
     <div class="wrapper-items">
      <div class="items">
       <ion-icon style="font-size: 35px; color: white;" name="ellipsis-horizontal"></ion-icon>
      </div>
      <p class="name-items">Others</p>
     </div>
    </div>
   </div>
   <div class="container-models">
    <img src="../assets/product/clothes/models2.jpeg" class="models-bg" id="models2"/>
   </div>
   <?php include "layout/footer.html" ?>
  </div>
  
  <script src="../script/search.js" type="text/javascript"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 </body>
</html>

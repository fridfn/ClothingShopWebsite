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
  <div class="container-page-category">
   <aside class="aside-category-list">
    <div class="cta-category">
     <div class="box-brand">
      <img src="../assets/product/clothes/brand-nobg.png" class="image"/>
     </div>
     <ion-icon class="icon" onclick="window.location.href='../pages/home.php'" name="arrow-back"></ion-icon>
    </div>
    <div class="wrapper-category-list">
     <div class="items-list">
      <p class="title-category">Cottagecore</p>
     </div>
    </div>
   </aside>
   <div class="content-items-category">
    <div class="header-list-category">
     <h2 class="main-title">CATEGORY</h2>
     <div class="search">
      <ion-icon class="icon" name="search"></ion-icon>
      <input placeholder="Search Product" class="input" type="text"/>
      <ion-icon class="icon" name="camera"></ion-icon>
    </div>
    </div>
    <div class="wrapper-content-items">
     <div class="items-product">
      <div class="image-product">
       <img src="../assets/product/sell/product.jpeg" alt="No Product" class="image"/>
      </div>
      <div class="name-product">Cottagecore Milk Maid Top</div>
     </div>
    </div>
   </div>
   <?php include "layout/footer.html" ?>
  </div>
  <script src="../script/product.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 </body>
</html>
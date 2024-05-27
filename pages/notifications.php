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
  <div class="container-page-notifications">
   <section class="section-content" id="header-title-section">
    <p class="title-section">Notifications</p>
    <div class="cta-title-section">
     <ion-icon class="icon" name="bag"></ion-icon>
     <ion-icon class="icon" name="chatbubble-ellipses"></ion-icon>
    </div>
   </section>
   <section class="section-content">
    <div class="wrapper-category-list">
     <div class="box-icon">
      <lord-icon
       src="https://cdn.lordicon.com/tswnhcwg.json"
       trigger="loop"
       delay="2500"
       state="hover-roll"
       style="width:250px;height:250px">
      </lord-icon>
     </div>
     <div class="box-cards">
      <p class="title-text">Cartluxe Promo</p>
      <p class="description-text">Dear you, your discount voucher is up to 50% sales!</p>
     </div>
     <ion-icon name="chevron-forward" class="icon"></ion-icon>
    </div>
    <div class="wrapper-category-list">
     <div class="box-icon">
      <lord-icon
       src="https://cdn.lordicon.com/qtnfcnne.json"
       trigger="loop"
       delay="3000"
       colors="primary:#242424,secondary:#109173,tertiary:#d1fad7,quaternary:#16c72e"
       style="width:250px;height:250px">
      </lord-icon>
     </div>
     <div class="box-cards">
      <p class="title-text">Finance</p>
      <p class="description-text">Dear you, can get your DANA cash if an items sold!</p>
     </div>
     <ion-icon name="chevron-forward" class="icon"></ion-icon>
    </div>
    <div class="wrapper-category-list">
     <div class="box-icon">
      <lord-icon
       src="https://cdn.lordicon.com/egmlnyku.json"
       trigger="loop"
       delay="3500"
       state="hover-conversation-alt"
       colors="primary:#363636,secondary:#f4dc9c,tertiary:#d59f80,quaternary:#ebe6ef"
       style="width:250px;height:250px">
      </lord-icon>
     </div>
     <div class="box-cards">
      <p class="title-text">Comment Review</p>
      <p class="description-text">Log in / Sign in your account for comment on the product you bought!</p>
     </div>
     <ion-icon name="chevron-forward" class="icon"></ion-icon>
    </div>
    <div class="wrapper-category-list">
     <div class="box-icon">
      <lord-icon
       src="https://cdn.lordicon.com/tlxagvyb.json"
       trigger="loop"
       delay="4000"
       colors="primary:#0065b0,secondary:#f4dc9c,tertiary:#08a88a,quaternary:#e4e4e4"
       style="width:250px;height:250px">
      </lord-icon>
     </div>
     <div class="box-cards">
      <p class="title-text">Cartluxe Info</p>
      <p class="description-text">Log in / Sign in your account for purchase!</p>
     </div>
     <ion-icon name="chevron-forward" class="icon"></ion-icon>
    </div>
   </section>
   <section class="section-content">
    <div class="box-list-order-product">
     <div class="box-icon">
      <lord-icon
       src="https://cdn.lordicon.com/cosvjkbu.json"
       trigger="click"
       colors="primary:#d6d6d6,secondary:#bababa,tertiary:#e3e3e3">
      </lord-icon>
     </div>
     <p class="title-text">You Have No Order</p>
     <button class="btn-order">Order Now</button>
    </div>
   </section>
   <?php include "../pages/layout/footer.html" ?>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 </body>
</html>
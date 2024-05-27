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
  <div class="loading-page">
   <img src="assets/product/clothes/brand.jpg" class="brand-icon"/>
  </div>
  <script>
   setTimeout(() => {
     localStorage.removeItem('isLogin');
     window.location.href = "../pages/home.php";
   }, 100);
  </script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 </body>
</html>

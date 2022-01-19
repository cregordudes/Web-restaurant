<?php require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/styles.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/owl.carousel.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="/js/owl.carousel.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <link rel="shortcut icon" href="/img/favicon (1).ico" type="image/x-icon">
   <title>Меню - Десерты | Мама Мия</title>
</head>

<body>
   <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/header.php" ?>

   <div class="modal fade" id="DetailsModal" role="dialog">
      <div class="modal-dialog">
         <div class="modal-body">

         </div>
      </div>
   </div>

   <div class="content">
      <section id="best-dishes" class="menu">
         <div class="container">
            <div class="menu-title d-flex">
               <h2 class="menu-name"><i>Десерты</i></h2>
            </div>
            <div class="dishes d-flex">

               <?php
               $products = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `category` = 4 ");
               $products = mysqli_fetch_all($products);
               foreach ($products as $product) {
                  $id = $product[0];
               ?>
                  <div class="product">
                     <img src="/img/deserts/<?= $product[2] ?>" alt="">
                     <div class="product-details">
                        <h3 class="product-title"><?= $product[1] ?></h3>
                        <button data-id="<?= $id ?>" type="button" class="product-btn btn btn-outline-warning">
                           <p class="product-price"><?= $product[3] ?>.00 MDL</p>
                           <p class="product-order">Заказать! <i class="las la-shopping-cart"></i></p>
                        </button>
                     </div>
                  </div>
               <?php
               }
               ?>

            </div>
         </div>
      </section>
   </div>
   <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php" ?>
   <script src="/js/script.js"></script>
</body>

</html>
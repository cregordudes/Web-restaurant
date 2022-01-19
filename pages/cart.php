<?php
session_start();
require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";
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
   <title>Мама Мия - Ваш лучший выбор!</title>
</head>

<body>
   <?php

   require_once  $_SERVER["DOCUMENT_ROOT"] . './includes/header.php';

   if (!empty($_SESSION['id'])) {
      $ids = implode(',', $_SESSION['id']);


      $sql = "SELECT * FROM `catalog` WHERE `catalog`.`id` IN ($ids)";
      $products = mysqli_query($connect, $sql);
      $products = mysqli_fetch_all($products);
   ?>
      <section id="cart-table">
         <form action="/includes/checkout.php" method="POST">
            <div class="container">
               <table width="100%">
                  <tr>
                     <th>Название Продукта</th>
                     <th>Изображение</th>
                     <th>Цена</th>
                     <th>Удалить продукт из списка</th>
                  </tr>

                  <?php
                  foreach ($products as $product) {
                     $id = $product[0];

                     if ($id < '11') {
                        $folder = 'pizza';
                     } else if ($id > '10' && $id < '21') {
                        $folder = 'burgers';
                     } else if ($id > '20' && $id < '31') {
                        $folder = 'snacks';
                     } else if ($id > '30' && $id < '41') {
                        $folder = 'deserts';
                     } else if ($id > '40' && $id < '51') {
                        $folder = 'drinks';
                     }
                  ?>
                     <tr>
                        <td>
                           <input type="text" name="name[]" value=" <?= $product[1] ?>" readonly required />
                        </td>
                        <td>
                           <img src="/img/<?= $folder ?>/<?= $product[2] ?>" alt="">
                        </td>
                        <td>
                           <input type="text" name="price[]" value=" <?= $product[3] ?>.00 MDL" readonly required />
                        </td>
                        <td><a href="/includes/remove-from-cart.php?id=<?= $id ?>"><button type="button" class="btn" style="border:none"><i class="las la-times-circle" style="border-radius:100%;background-color: red; color:white; font-size:32px"></button></i></a></td>
                     </tr>
                  <?php
                  }
                  ?>
               </table>

               <button type="submit" class="submit-btn btn btn-primary" style="margin: 50px 30%;width: 40%;height: 50px;float: none;"> Оформить заказ</button>
            </div>
         </form>
      </section>
   <?php } else {
   ?>
      <section id="cart-table">
         <div class="container">
            <h1 class="title">Здесь пока ничего нет...</h1>
         </div>
      </section>

   <?php
   }
   require_once  $_SERVER["DOCUMENT_ROOT"] . './includes/footer.php' ?>

   <script src="/js/script.js"></script>

</body>

</html>
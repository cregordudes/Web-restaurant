<?php
require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";
session_start();

if (empty($_SESSION['id'])) {
   $_SESSION['id'] = array();
   $_SESSION['qty'] = 0;
}
array_push($_SESSION['id'], $_GET['id']);
$_SESSION['qty'] = count(array_unique($_SESSION['id']));
?>

<!DOCTYPE html>
<html lang="en">

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
   ?>

   <div class="content">
      <div class="text"></div>
      <div class="container p-md-1" style="min-height: 600px;">
         <div class="info" style="height: 350px;">
            <div class="title p-md-1">
               <h1>Вы добавили товар в корзину</h1>
               <button class="btn-lrg submit-btn btn btn-primary" style="float: left; width:25%; height:50px" type="submit"><a href="/index.php">Вернуться в меню</a></button>
               <button class="btn-lrg submit-btn btn btn-success" style="float: right; width:25%; height:50px" type="submit"><a href="/pages/cart.php">Перейти в корзину</button>
            </div>
         </div>
      </div>
   </div>


   <?php require_once  $_SERVER["DOCUMENT_ROOT"] . './includes/footer.php' ?>

   <script src="/js/script.js"></script>

</body>

</html>
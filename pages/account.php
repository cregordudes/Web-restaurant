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
   require_once '../includes/header.php';
   ?>

   <section id="account">
      <div class="content" style="min-height: 700px;">
         <div class="container d-flex">
            <div class="info col-md-12" ">
               <h1>Инфомрация о пользователе:</h1>
               <div class=" title p-md-1">
               <h2>Логин: <?= $_SESSION['user']['login'] ?></h2>
               <p>Имя пользователя: <?= $_SESSION['user']['name'] ?><br>
                  Email: <?= $_SESSION['user']['email'] ?><br>
                  Адрес: <?= $_SESSION['user']['adress'] ?></p>
            </div>
            <a href="/pages/login.php" style="margin: 25%;"><button class="btn-lrg submit-btn btn btn-danger" style="float: none; width:50%" type="button">Выйти из аккаунта</button></a>
         </div>
      </div>
      </div>
   </section>
   </div>

   <?php require_once '../includes/footer.php' ?>

   <script src="/js/script.js"></script>

</body>

</html>
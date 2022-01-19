<?php session_start();
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
   <title>Зарегестрироваться | Мама Мия</title>
</head>

<body>
   <?php require_once '../includes/header.php' ?>
   <div class="content">
      <form action="/includes/signup.php" method="POST">
         <div class="container form-table">
            <div class="row menu-name">
               <h4>Хотите сделать заказ или подписаться на нашу еженедельную рассылку?</h4>
            </div>
            <div class="row menu-name">
               <p style="text-align:center">Тогда создайте аккаунт</p>
            </div>
            <div class="container form-table">
               <div class="row input-container">
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input type="text" name="login" required />
                        <label>Логин</label>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input type="password" name="password" required />
                        <label>Пароль</label>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input type="password" name="password_confirm" required />
                        <label>Подтвердите пароль</label>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input type="text" name="name" required />
                        <label>Имя</label>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input type="text" name="email" required />
                        <label>Email</label>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input type="text" name="phone" required />
                        <label>Телефон</label>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input type="text" name="adress" required />
                        <label>Адресс</label>
                     </div>
                  </div>

                  <div class="col-xs-12">
                     <button class="btn-lrg submit-btn btn btn-warning" style="float: none; width:50%" type="submit">Отправить</button>
                     <hr>
                     <div class="row menu-name">
                        <p>Уже есть аккаунт?</p>
                        <p>Тогда <a href="/pages/login.php" style="text-decoration: underline;">войдите</a></p>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <?php
                     if ($_SESSION['message']) {
                        echo '<hr><p class="msg">' . $_SESSION['message'] . '</p>';
                     }
                     unset($_SESSION['message']);
                     ?>
                  </div>
               </div>
            </div>
      </form>
   </div>

   <?php require_once '../includes/footer.php' ?>
</body>

</html>
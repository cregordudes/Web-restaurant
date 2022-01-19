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
   <title>Свяжитесь с нами | Мама Мия</title>
</head>

<body>
   <?php require_once '../includes/header.php' ?>

   <div class="content">
      <div style="width: 100%"><iframe class="map" width="840" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Bulevardul%20Dacia%2031,%20Chi%C8%99in%C4%83u,%20%D0%9C%D0%BE%D0%BB%D0%B4%D0%BE%D0%B2%D0%B0+(MamaMia%20Restaurant)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="http://www.gps.ie/">truck gps</a></iframe></div>
      <form action="/includes/request.php" method="POST">
         <div class="container form-table">
            <div class="row menu-name">
               <h1>Есть вопросы?</h1>
            </div>
            <div class="row menu-name">
               <h4 style="text-align:center">Напишите нам, мы будем рады!</h4>
            </div>
            <div class="row input-container">
               <div class="col-xs-12">
                  <div class="styled-input wide">
                     <input type="text" name="Name" required />
                     <label>Имя</label>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12">
                  <div class="styled-input">
                     <input type="text" name="Email" required />
                     <label>Email</label>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12">
                  <div class="styled-input" style="float:right;">
                     <input type="text" name="Phone" required />
                     <label>Номер Телефона</label>
                  </div>
               </div>
               <div class="col-xs-12">
                  <div class="styled-input wide">
                     <textarea required name="Message"></textarea>
                     <label>Сообщение</label>
                  </div>
               </div>
               <div class="col-xs-12">
                  <button class="btn-lrg submit-btn btn btn-warning" type="submit">Отправить</button>
               </div>
            </div>
         </div>
      </form>
   </div>
   <?php require_once '../includes/footer.php' ?>
</body>

</html>
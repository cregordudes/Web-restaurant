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
   <title>О нас | Мама Мия</title>
</head>

<body>
   <?php require_once '../includes/header.php' ?>

   <div class="contacts" style="background-image: url(/img/back-white.jpg);">
      <section id="about-us">
         <div class="container d-flex">
            <div class="info col-md-6">
               <div class="title">
                  <h2>Наши</h2>
                  <i>Ценности</i>
                  <p>Приоритет Компании - предлагать нашим гостям и клиентам только высококачественный продукт, соответствующий всем самым строгим нормам и наиболее изысканным вкусам.</p>
               </div>
            </div>
            <div class="info col-md-6">
               <img src="/img/about-us.jpg" alt="">
            </div>
         </div>
      </section>

      <section id="contact-us">
         <div class="container d-flex">
            <div class="info col-md-6">
               <img src="/img/pancakes.jpg" alt="">
            </div>
            <div class="info col-md-6" ">
               
               <div class=" title p-md-1">
               <h2>Наши</h2>
               <i>Продукты</i>
               <p>Пицца — это вкус, знакомый каждому. У кого в воспоминаниях нет той самой пеперони? <br>
                  Или знаменитой Итальянской? Если хотите удивить Ваших гостей, в нашем каталоге найдете и более оригинальные вкусы</p>

            </div>
         </div>
   </div>
   </section>
   </div>

   <?php require_once '../includes/footer.php' ?>
</body>

</html>
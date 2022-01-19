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
   require_once $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
   ?>

   <section id="account">

      <div class="content">
         <form action="/pages/admin.php" method="get" style="min-height:700px">
            <div class="container form-table">
               <div class="row menu-name">
                  <h1>Администратор: <?= $_SESSION['user']['name'] ?></h1>
               </div>
               <div class="row menu-name">
                  <h4 style="text-align:center">Изменить данные о продукте:</h4>
               </div>
               <div class="container form-table">
                  <div class="row input-container">
                     <div class="col-xs-12">
                        <div class="styled-input wide">
                           <input type="text" name="id" id="id_delete" required />
                           <label>Введите id продукта, который хотите изменить</label>
                        </div>
                     </div>
                     <div class="col-xs-12">
                        <button class="btn-lrg submit-btn btn btn-danger delete" style="float: left; width:25%" type="button">Удалить</button>
                        <button class="btn-lrg submit-btn btn btn-success" style="float: right; width:25%" type="submit">Изменить</button>
                     </div>
                  </div>
                  <a href="/pages/login.php" style="margin: 25%;"><button class="btn-lrg submit-btn btn btn-danger" style="float: none; width:50%" type="button">Выйти из аккаунта</button></a>
               </div>
         </form>
         <?php if (isset($_GET['id'])) {
            $prod = $_GET['id'];
            //echo $prod;
            $pizzas = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` = '$prod'");
            $pizzas = mysqli_fetch_all($pizzas);
            foreach ($pizzas as $pizza) {

         ?>
               <form action="/includes/update.php" method="post" style="min-height:700px">
                  <div class="container form-table">
                     <div class="container form-table">
                        <div class="row input-container">
                           <div class="col-xs-12">
                              <div class="styled-input wide">
                                 <input type="hidden" name="Uid" value="<?= $pizza[0] ?>" required />
                                 <input type="text" name="Uname" value="<?= $pizza[1] ?>" required />
                                 <label>Изменить Название:</label>
                              </div>
                              <div class="styled-input wide">
                                 <input type="text" name="Uprice" value="<?= $pizza[3] ?>" required />
                                 <label>Изменить Цену:</label>
                              </div>
                              <div class="styled-input wide">
                                 <input type="text" name="Uimg" value="<?= $pizza[2] ?>" required />
                                 <label>Изменить Изображение:</label>
                              </div>
                              <div class="styled-input wide">
                                 <input type="text" name="Ucategory" value="<?= $pizza[4] ?>" required />
                                 <label>Изменить Категорию:</label>
                              </div>
                           </div>
                           <div class="col-xs-12">
                              <button class="btn-lrg submit-btn btn btn-warning" style="float: none; width:50%" type="submit">Обновить</button>
                           </div>
                        </div>
                     </div>
               </form>
         <?php
            }
         }
         ?>


      </div>

   </section>
   </div>

   <?php require_once '../includes/footer.php' ?>

   <script src="/js/script.js"></script>
   <script>
      $(document).ready(function() {
         $('.delete').click(function() {
            var clickBtnValue = $('#id_delete').val();
            $.ajax({
               url: '/includes/delete.php',
               type: 'post',
               data: {
                  'delete_id': clickBtnValue
               },
            });
            alert("Удаление прошло успешно!");
            document.location.href = '/pages/admin.php';
         })

      });
   </script>

</body>

</html>
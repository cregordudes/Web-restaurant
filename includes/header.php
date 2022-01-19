<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
      <a class="navbar-brand" href="/">
         <img src="/img/pizza_istoriya.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
         Мама Мия
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Меню
               </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/pages/menu/pizza.php">Пицца</a></li>
                  <li><a class="dropdown-item" href="/pages/menu/burgers.php">Бургеры</a></li>
                  <li><a class="dropdown-item" href="/pages/menu/snacks.php">Закуски</a></li>
                  <li><a class="dropdown-item" href="/pages/menu/deserts.php">Десерты</a></li>
                  <li><a class="dropdown-item" href="/pages/menu/drinks.php">Напитки</a></li>
               </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/pages/about_us.php">О нас</a></li>
            <li class="nav-item"><a class="nav-link" href="/pages/contact_us.php">Контакты</a></li>
            <li class="nav-item"><a class="nav-link" href="/pages/<?php
                                                                  if (!isset($_SESSION['user'])) {
                                                                  ?>login.php" <?php
                                                                              } else {
                                                                                 if ($_SESSION['user']['id'] == '1') {
                                                                                 ?>admin.php" <?php
                                                                                             } else {
                                                                                                ?>account.php" <?php
                                                                                                            } ?> <?php
                                                                                                               }
                                                                                                                  ?>>Аккаунт</a></li>
            <li class="nav-item" id="cart"><a class="nav-link" href="/pages/cart.php"><i class="las la-shopping-cart"></i><span id="cart-item"><?= $_SESSION['qty'] ? $_SESSION['qty'] : '0' ?> </span></a></li>
            <li class="nav-item" id="phone"><a class="nav-link" href="#">Тел<span>+373 69 420 228</span></a></li>
         </ul>
      </div>
   </div>
</nav>
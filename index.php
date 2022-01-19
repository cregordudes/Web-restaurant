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
    <title>Мама Мия - Ваш лучший выбор!</title>
</head>

<body>
    <?php
    require_once './includes/header.php';
    ?>

    <div class="modal fade" id="DetailsModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-body">

            </div>
        </div>
    </div>

    <div class="content">
        <section id="banner">
            <div class="header">
                <div class="container">
                    <div class="owl-carousel">
                        <div class="poster">
                            <div class="item">
                                <h2>Вкус совершенства</h2>
                            </div>
                            <div class="item">
                                <img src="/img/foodiesfeed.com_messy-pizza-on-a-black-table.jpg">
                            </div>
                        </div>
                        <div class="poster">
                            <div class="item">
                                <h2>Невероятные ощущения</h2>
                            </div>
                            <div class="item">
                                <img src="/img/pexels-jonathan-borba-2983102.jpg">
                            </div>
                        </div>
                        <div class="poster">
                            <div class="item">
                                <h2>Райское наслаждение</h2>
                            </div>
                            <div class="item">
                                <img src="/img/pexels-rama-khandkar-2113556.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="best-dishes">
            <div class="container">
                <div class="title">
                    <h2>Самое лучшее - только для Вас!</h2>
                </div>
                <div class="dishes d-flex">
                    <?php
                    $products = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` < 5 ");
                    $products = mysqli_fetch_all($products);
                    foreach ($products as $product) {
                        $id = $product[0];
                    ?>
                        <div class="product">
                            <img src="/img/pizza/<?= $product[2] ?>" alt="">
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
            <div class="constuctor">
                <div class="background">
                    <div class="text">
                        <h2 class="title">
                            Хотите сделать свою собственную Пиццу?
                        </h2>
                        <h3 class="sub-title"> Тогда попробуйте наш Конструктор Пиццы, и сделайте свой индивидуальный рецепт!</h3>
                        <button type="button" class="btn btn-outline-warning"> Я хочу сделать Пиццу!</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="menu">
            <div class="menu-line">

                <div class="menu-title d-flex">
                    <h2 class="menu-name">Пиццы</h2>
                    <a href="/pages/menu/pizza.php">Перейти в Меню <i class="las la-angle-right"></i></a>
                </div>
                <div class="dishes d-flex">
                    <?php
                    $pizzas = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` < 7  AND `catalog`.`category` = 1 ");
                    $pizzas = mysqli_fetch_all($pizzas);
                    foreach ($pizzas as $pizza) {
                        $id = $pizza[0];

                    ?>
                        <div class="product">
                            <img src="/img/pizza/<?= $pizza[2] ?>" alt="">
                            <div class="product-details">
                                <h3 class="product-title"><?= $pizza[1] ?></h3>
                                <button data-id="<?= $id ?>" type="button" class="product-btn btn btn-outline-warning">
                                    <p class="product-price"><?= $pizza[3] ?>.00 MDL</p>
                                    <p class="product-order">Заказать! <i class="las la-shopping-cart"></i></p>
                                </button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="menu-line">
                <div class="menu-title d-flex">
                    <h2 class="menu-name">Бургеры</h2>
                    <a href="/pages/menu/burgers.php">Перейти в Меню <i class="las la-angle-right"></i></a>
                </div>
                <div class="dishes d-flex">
                    <?php
                    $burgers = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` > 10 AND `catalog`.`id` < 17  AND `catalog`.`category` = 2 ");
                    $burgers = mysqli_fetch_all($burgers);
                    foreach ($burgers as $burger) {
                        $id = $burger[0];
                    ?>
                        <div class="product">
                            <img src="/img/burgers/<?= $burger[2] ?>" alt="">
                            <div class="product-details">
                                <h3 class="product-title"><?= $burger[1] ?></h3>
                                <button data-id="<?= $id ?>" type="button" class="product-btn btn btn-outline-warning">
                                    <p class="product-price"><?= $burger[3] ?>.00 MDL</p>
                                    <p class="product-order">Заказать! <i class="las la-shopping-cart"></i></p>
                                </button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="menu-line">
                <div class="menu-title d-flex">
                    <h2 class="menu-name">Закуски</h2>
                    <a href="/pages/menu/snacks.php">Перейти в Меню <i class="las la-angle-right"></i></a>
                </div>
                <div class="dishes d-flex">
                    <?php
                    $snacks = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` > 20 AND `catalog`.`id` < 27  AND `catalog`.`category` = 3 ");
                    $snacks = mysqli_fetch_all($snacks);
                    foreach ($snacks as $snack) {
                        $id = $snack[0];
                    ?>
                        <div class="product">
                            <img src="/img/snacks/<?= $snack[2] ?>" alt="">
                            <div class="product-details">
                                <h3 class="product-title"><?= $snack[1] ?></h3>
                                <button data-id="<?= $id ?>" type="button" class="product-btn btn btn-outline-warning">
                                    <p class="product-price"><?= $snack[3] ?>.00 MDL</p>
                                    <p class="product-order">Заказать! <i class="las la-shopping-cart"></i></p>
                                </button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="menu-line">
                <div class="menu-title d-flex">
                    <h2 class="menu-name">Десерты</h2>
                    <a href="/pages/menu/deserts.php">Перейти в Меню <i class="las la-angle-right"></i></a>
                </div>
                <div class="dishes d-flex">
                    <?php
                    $pizzas = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` > 30 AND `catalog`.`id` < 37  AND `catalog`.`category` = 4 ");
                    $pizzas = mysqli_fetch_all($pizzas);
                    foreach ($pizzas as $pizza) {
                        $id = $pizza[0];
                    ?>
                        <div class="product">
                            <img src="/img/deserts/<?= $pizza[2] ?>" alt="">
                            <div class="product-details">
                                <h3 class="product-title"><?= $pizza[1] ?></h3>
                                <button data-id="<?= $id ?>" type="button" class="product-btn btn btn-outline-warning">
                                    <p class="product-price"><?= $pizza[3] ?>.00 MDL</p>
                                    <p class="product-order">Заказать! <i class="las la-shopping-cart"></i></p>
                                </button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="menu-line">
                <div class="menu-title d-flex">
                    <h2 class="menu-name">Напитки</h2>
                    <a href="/pages/menu/drinks.php">Перейти в Меню <i class="las la-angle-right"></i></a>
                </div>
                <div class="dishes d-flex">
                    <?php
                    $pizzas = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` > 40 AND `catalog`.`id` < 47  AND `catalog`.`category` = 5 ");
                    $pizzas = mysqli_fetch_all($pizzas);
                    foreach ($pizzas as $pizza) {
                        $id = $pizza[0];
                    ?>
                        <div class="product">
                            <img src="/img/drinks/<?= $pizza[2] ?>" alt="">
                            <div class="product-details">
                                <h3 class="product-title"><?= $pizza[1] ?></h3>
                                <button data-id="<?= $id ?>" type="button" class="product-btn btn btn-outline-warning">
                                    <p class="product-price"><?= $pizza[3] ?>.00 MDL</p>
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
        <div class="contacts" style="background-image: url(/img/back-white.jpg);">
            <section id="about-us">
                <div class="container d-flex">
                    <div class="info col-md-6">
                        <div class="title">
                            <h2>О нас</h2>
                            <i>Наша продукция</i>
                            <p>Ваша благодарность и Ваше хорошее настроение, для нас, лучшая награда и стимул работать далее – создавать новые блюда, возрождать традиционные рецепты и реализовать самые смелые Ваши желания.</p>
                            <button class="btn btn-outline-dark"><a href="/pages/about_us.php">Подробнее</a></button>
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
                        <h2>Свяжитесь с нами</h2>
                        <i>Наши Контакты</i>
                        <p>Email: mammamiapizza@gmail.com<br>
                            Телефон: 022 222 220<br>
                            Адресс: Izmail 69/420</p>

                        <button class="btn btn-outline-dark"><a href="/pages/contact_us.php">Подробнее</a></button>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <?php require_once './includes/footer.php' ?>

    <script src="/js/script.js"></script>

</body>

</html>
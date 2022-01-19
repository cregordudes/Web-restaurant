<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";

if (empty($_SESSION['user'])) {
   $user_id = 1;
} else {
   $user_id = $_SESSION['user']['id'];
}

$info = implode(',', $_POST['name']);


$price = 0;
foreach ($_POST['price'] as $cost) {
   $price += $cost;
}

date_default_timezone_set('Europe/Chisinau');
$date = date('Y-m-d H:i:s');


mysqli_query($connect, "INSERT INTO `orders`(`user_id`, `date`, `status`, `order_info`, `price`) VALUES ('$user_id', '$date', '0', '$info', '$price')");
session_unset();
header('Location: ../index.php');

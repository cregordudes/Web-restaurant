<?php
session_start();

require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";

$login = $_POST['login'];
$password = $_POST['password'];

if ($login != 'admin') {
   $password = md5($password);
}

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE  `users`.`login` = '$login' AND `users`.`password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {
   $user = mysqli_fetch_assoc($check_user);
   $_SESSION['user'] = [
      "id" => $user['id'],
      "login" => $user['login'],
      "name" => $user['name'],
      "email" => $user['email'],
      "adress" => $user['adress'],
   ];
   if ($login != 'admin') {
      header('Location: ../pages/account.php');
   } else {
      header('Location: ../pages/admin.php');
   }
} else {
   $_SESSION['message'] = ("Введенны данные неверные");
   header('Location: ../pages/login.php');
};

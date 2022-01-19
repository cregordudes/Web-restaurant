<?php
session_start();

require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";

$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];



if ($password == $password_confirm) {
   $password = md5($password);
   mysqli_query(
      $connect,
      "INSERT INTO `users`(`login`, `password`, `name`, `email`, `phone`, `adress`) VALUES ('$login', '$password', '$name', '$email', '$phone', '$adress')"
   );
   $_SESSION['message'] = ("Регистрация прошла успешно!");
   header('Location: ../pages/login.php');
} else {
   $_SESSION['message'] = ("Пароли не совпдают");
   header('Location: ../pages/register.php');
}

<?php
require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";

$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];

mysqli_query($connect, "INSERT INTO `requests`(`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')");

header('Location: /');

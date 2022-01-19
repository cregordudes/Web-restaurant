<?php
require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";

$id = $_POST['Uid'];
$name = $_POST['Uname'];
$price = $_POST['Uprice'];
$img = $_POST['Uimg'];
$category = $_POST['Ucategory'];


mysqli_query($connect, "UPDATE `catalog` SET `id`='$id',`product_name`='$name',`image`='$img',`price`='$price',`category`='$category' WHERE `catalog`.`id` = '$id'");

header('Location: ../index.php');

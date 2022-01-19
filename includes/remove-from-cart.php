<?php
require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";
session_start();


if (isset($_GET['id'])) {
   $key = array_search($_GET['id'], $_SESSION['id']);
   if ($key !== false) {
      unset($_SESSION['id'][$key]);
      $_SESSION['qty'] = $_SESSION['qty'] - 1;
   }
}

header('Location: ../pages/cart.php');

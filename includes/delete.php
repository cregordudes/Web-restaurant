<?php
require $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";

if (isset($_POST['delete_id'])) {
   $id = $_POST['delete_id'];
   echo $id;
   mysqli_query($connect, "DELETE FROM `catalog` WHERE `catalog`.`id` = '$id'");
}

exit;

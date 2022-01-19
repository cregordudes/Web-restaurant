<?php
require  $_SERVER["DOCUMENT_ROOT"] . "/includes/connect.php";
$userid = 0;
if (isset($_POST['userid'])) {
   $userid = mysqli_real_escape_string($connect, $_POST['userid']);
}
$result1 = mysqli_query($connect, "SELECT * FROM `catalog` WHERE `catalog`.`id` = " . $userid);
$result2 = mysqli_query($connect, "SELECT * FROM `detail` WHERE `detail`.`id_product`= " . $userid);

$response = "<div id='myModal' class='modal show'>";

while (($catalog = mysqli_fetch_array($result1)) && ($detail = mysqli_fetch_array($result2))) {
   $id = $catalog['id'];
   $img = $catalog['image'];
   $price = $catalog['price'];
   $name = $catalog['product_name'];
   $info = $detail['info'];
   $weight = $detail['weight'];


   $category = $catalog['category'];
   if ($category == '1') {
      $folder = 'pizza';
   } else if ($category == '2') {
      $folder = 'burgers';
   } else if ($category == '3') {
      $folder = 'snacks';
   } else if ($category == '4') {
      $folder = 'deserts';
   } else if ($category == '5') {
      $folder = 'drinks';
   }

   $response .= '<div class="modal-content">
                     <div class="col-md-6">
                        <img id="cart-modal-img" src="/img/' . $folder . '/' . $img . '" alt="">
                     </div>
                     <div class="col-md-6 modal-text" data-id = "' . $id . '">
                        <h3 id="cart-modal-name" data-name=' . $name . '>' . $name . '</h3>
                        <p>' . $info . '</p>
                        <p>' . $weight . 'g</p>
                        <p id="cart-modal-price" class="product-price" data-price=' . $price . '>Итого:     ' . $price . '.00 MDL</p>
                        <button type="button" class="order-btn btn btn-warning">
                           <a href="/includes/add-to-cart.php?id=' . $id . '">
                           <p class="order-take">Беру</p>
                           </a>
                        </button>
                     </div>
                  </div>';
}
$response .= "</div>";

echo $response;

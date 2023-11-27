<?php
  require "../../global.php";
  require_once  "../../dao/product.php";

  if(exist_param("product")){
    header("location: $CLIENT_URL/product/list.php");
  }else if(exist_param("detail")){
    $VIEW_NAME ="trang-chinh/detail.php";
  }else if(exist_param("cart")){
    $VIEW_NAME ="trang-chinh/cart.php";
  }else if(exist_param("checkout")){
    $VIEW_NAME ="trang-chinh/checkout.php";
  }else if(exist_param("contact")){
    $VIEW_NAME ="trang-chinh/contact.php";
  }
//   ngược lại exist_param không tồn tại thì chuyển hướng tới trang-chu.php
  else{
    $_SESSION['name_page'] = 'home';
    $items = product_select_outstanding();
    $new_products = product_select_new_product();
    $popular_products = product_select_popular_products();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
  }

  require "../layout.php";
?>
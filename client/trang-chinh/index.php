<?php
require "../../global.php";
require_once  "../../dao/product.php";
require_once  "../../dao/category.php";

if (exist_param("product")) {
  header("location: $CLIENT_URL/product/list.php");
} else if (exist_param("detail")) {
  $VIEW_NAME = "trang-chinh/detail.php";
} else if (exist_param("cart")) {
  $VIEW_NAME = "trang-chinh/cart.php";
} else if (exist_param("checkout")) {
  $VIEW_NAME = "trang-chinh/checkout.php";
} else if (exist_param("contact")) {
  $VIEW_NAME = "trang-chinh/contact.php";
} else if (exist_param("category_id")) {

  $name_loai = category_select_by_id($category_id);
  extract($name_loai);
  $title_site = "Types of product attributes : '$name' ";

  $items = product_select_by_loai($category_id);
}
//   ngược lại exist_param không tồn tại thì chuyển hướng tới trang-chu.php
else {
  $_SESSION['name_page'] = 'home';
  $items = product_select_outstanding();
  $new_products = product_select_new_product();
  $popular_products = product_select_popular_products();
  $VIEW_NAME = "trang-chinh/trang-chu.php";
}
$list_category = category_select_all_client();
require "../layout.php";

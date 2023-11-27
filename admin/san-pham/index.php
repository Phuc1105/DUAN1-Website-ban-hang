<?php 
   require "../../dao/pdo.php";
   require "../../global.php";
   require "../../dao/product.php";
   require "../../dao/category.php";
extract($_REQUEST);
if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";
}else if (exist_param("btn_insert")) {
    $VIEW_NAME = "add.php";
    $name = $_REQUEST['name'];
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];
    $discount = $_REQUEST['discount'];
    $outstanding = $_REQUEST['outstanding'];
    $describes = $_REQUEST['describes'];
    $format = "D/m/y";
    $input_date = date($format, time());
    $user_id = "thoai";
    product_insert($name, $price, $category_id, $input_date, $describes,$quantity,$outstanding,$user_id,$discount);
    $VIEW_NAME = "list.php";
}else if(exist_param("btn_delete")){
    $product_id = $_REQUEST['product_id'];
    product_delete($product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
}else{
   
    $VIEW_NAME = "add.php";
    }
require "../layout.php";
?>
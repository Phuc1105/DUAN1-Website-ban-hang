<?php
require "../../dao/pdo.php";
require "../../global.php";
require "../../dao/product.php";
require "../../dao/category.php";
extract($_REQUEST);
$tb_category_id = "";
$tb_price = "";
$tb_discount = "";
$tb_quantity = "";
$tb_name = "";
if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $name = $_REQUEST['name'];
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];
    $discount = $_REQUEST['discount'];
    $outstanding = $_REQUEST['outstanding'];
    $describes = $_REQUEST['describes'];
    $format = "D/m/y";
    $input_date = date($format, time());
    $user_id = "thoai";
    product_insert($name, $price, $category_id, $input_date, $describes, $quantity, $outstanding, $user_id, $discount, $status, $image);
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_delete")) {
    $product_id = $_REQUEST['product_id'];
    product_delete($product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param('btn_edit')) {
    $product_id = $_REQUEST['product_id'];
    $product_info = product_select_by_id($product_id);
    extract($product_info);
    $items = product_select_all();
    $VIEW_NAME = "edit.php";
} elseif (exist_param('btn_update')) {
    $product_id = $_REQUEST['product_id'];  
    $name = $_REQUEST['name'];
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];
    $discount = $_REQUEST['discount'];
    $outstanding = $_REQUEST['outstanding'];
    $describes = $_REQUEST['describes'];
    $status = $_REQUEST['status'];
    $category_id = $_REQUEST['category_id'];
    product_update($name, $price, $category_id, $describes, $quantity, $outstanding, $status, $discount, $product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param('btn_update_status_hide')) {
    $product_id = $_REQUEST['product_id'];
    product_update_status_hide($product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
} elseif (exist_param('btn_update_status_display')) {
    $product_id = $_REQUEST['product_id'];
    product_update_status_display($product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
} else {

    $VIEW_NAME = "add.php";
}
require "../layout.php";

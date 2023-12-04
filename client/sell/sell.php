<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/category.php';
require '../../dao/user.php';
extract($_REQUEST);
if(exist_param('btn_insert_product')){
    $name = $_REQUEST['name'];
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];
    $discount = $_REQUEST['discount'];
    $outstanding = $_REQUEST['outstanding'];
    $describes = $_REQUEST['describes'];
    $format = "Y/m/d";
    $images = $_FILES['image'];
    $image = $images['name'];
    $input_date = date($format, time());
    $user = $_SESSION['user'];
    $user_id = $user['user_id'];
    $status = "";
    product_insert($name, $price, $category_id, $input_date, $describes, $quantity, $outstanding, $user_id, $discount,$status,$image);
    $product_find = product_select_by_name($name);
    $VIEW_NAME = "list-product.php";
}elseif (exist_param('btn_list_product')) {
    $VIEW_NAME = "list-product.php";
}elseif(exist_param('btn_sell')){
    $VIEW_NAME = "form-sell.php";
}elseif(exist_param('btn_edit_product')){
    $product_id = $_REQUEST['product_id'];
    $product_info = product_select_by_id($product_id);
    extract($product_info);
    $items = product_select_all();
    $VIEW_NAME = "form-edit.php";
}elseif(exist_param('btn_delete')){
    $product_id = $_REQUEST['product_id'];
    product_delete($product_id);
    $items = product_select_all();  
    $VIEW_NAME = "list-product.php";
}elseif(exist_param('btn_update_product')){
    if(isset($_REQUEST['product_id'])){
    $product_id = $_REQUEST['product_id'];
    $name = $_REQUEST['name'];  
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];
    $discount = $_REQUEST['discount'];
    $outstanding = $_REQUEST['outstanding'];
    $describes = $_REQUEST['describes'];
    $category_id = $_REQUEST['category_id'];
    $images = $_FILES['image'];
    $image = $images['name'];
    product_update_user($name, $price, $category_id, $describes, $quantity, $outstanding, $discount,$image,$product_id);
    $items = product_select_all();
    $VIEW_NAME = "list-product.php";
}else{
    $VIEW_NAME="list-product.php";
}
}
else{
    $VIEW_NAME = "form-sell.php";
}
require '../layout.php';
?>
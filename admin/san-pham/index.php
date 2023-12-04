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
}elseif(exist_param('btn_update')){
    if(!empty($category_id) || !empty($name) || !empty($quantity) || !empty($price)){
    $product_id = $_REQUEST['product_id'];
    $name = $_REQUEST['name'];  
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];
    $discount = $_REQUEST['discount'];
    $outstanding = $_REQUEST['outstanding'];
    $describes = $_REQUEST['describes'];
    $status = $_REQUEST['status'];
    $category_id = $_REQUEST['category_id'];
    if(is_numeric($quantity) && is_numeric($price) && is_numeric($discount) && $discount < 100){
    product_update($name, $price, $category_id, $describes, $quantity, $outstanding, $status, $discount,$product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
    }else{
        if($discount >= 100){
            $tb_discount  = "Import products discount products below 100(%)";
        }
        if(empty($category_id)){
            $tb_category_id = "Please select product type";
        }
        if(!is_numeric($price)){
            $tb_price  = "Please enter number";
        }
        if(!is_numeric($discount)){
            $tb_discount  = "Please enter number";
        }
        if(!is_numeric($quantity)){
            $tb_quantity  = "Please enter number";
        }
        if(empty($name)){
            $tb_name = "Please enter product name";
        }
        if(empty($quantity)){
            $tb_quantity = "Please enter product quantity";
        }
        if(empty($price)){
            $tb_price = "Please enter product price";
        }
        if($check_name ==  true){
            $tb_name = "Product name is available";
        }
        $VIEW_NAME = "add.php";
    }
    }else{
        if(empty($category_id)){
            $tb_category_id = "Please select product type";
        }
        if(empty($name)){
            $tb_name = "Please enter product name";
        }
        if(empty($quantity)){
            $tb_quantity = "Please enter product quantity";
        }
        if(empty($price)){
            $tb_price = "Please enter product price";
        }
        $VIEW_NAME = "add.php";
    }
}elseif (exist_param('btn_update_status_hide')) {
    $product_id = $_REQUEST['product_id'];
    product_update_status_hide($product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
  }elseif(exist_param('btn_update_status_display')){
    $product_id = $_REQUEST['product_id'];
    product_update_status_display($product_id);
    $items = product_select_all();
    $VIEW_NAME = "list.php";
  } else {

    $VIEW_NAME = "add.php";
}
require "../layout.php";
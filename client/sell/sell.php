<?php
require '../../global.php';
require '../../dao/sell.php';
require '../../dao/product.php';
require '../../dao/category.php';
$tb_category_id = "";
$tb_price = "";
$tb_discount = "";
$tb_quantity = "";
$tb_name = "";
extract($_REQUEST);
$VIEW_NAME = "../sell/form-sell.php";
if(exist_param('btn_insert_product')){

}elseif(exist_param('btn_insert_image')){

}else{
    $VIEW_NAME = "sell/form-sell.php";
}
require '../layout.php';
?>
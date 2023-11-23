<?php 
   require "../../dao/pdo.php";
   require "../../global.php";
   require "../../dao/product.php";
   require "../../dao/category.php";
extract($_REQUEST);
if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";
}else if (exist_param("btn_insert")) {
    $VIEW_NAME = "list.php";
}else{
    $VIEW_NAME = "add.php";
}
require "../layout.php";
?>
<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/category.php';
//-------------------------------//


extract($_REQUEST);

if (exist_param("category_id")) {

    $name_loai = category_select_by_id($category_id);
    extract($name_loai);
    $title_site = "Types of product attributes : '$name' ";

    $items = product_select_by_loai($category_id);
} else if (exist_param("price")) {
    $items = product_select_outstanding();
    
} else if (exist_param("date_old")) {
    $items = product_select_date_old();

}else if (exist_param("view_product")) {
    $items = product_select_popular_products();

} else if (exist_param("search")) {
    $kyww = $_POST['kyww'];
    if ($kyww == '') {
        $title_site = "All Menu";
    } else {
        $title_site = "Products containing keywords :'$kyww'";
    }
    $items = product_select_keyword($kyww);
    if (count($items) == 0) {
        $title_site = "No products contain keywords :'$search'";
    }
} else {
    $title_site = "All Menu";
    $items = product_select_page('view', 12);
}
$hh_db = product_select_outstanding();
$hh_top10 = product_select_popular_products();
$list_category = category_select_all();
$price_desc = product_select_price();

$VIEW_NAME = "product/list_product.php";

require '../layout.php';
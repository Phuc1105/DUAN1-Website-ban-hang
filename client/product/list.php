<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/catagogy.php';
//-------------------------------//


extract($_REQUEST);

if (exist_param("catagogy_id")) {

    $name_loai = catagogy_select_by_id($catagogy_id);
    extract($name_loai);
    $title_site = "Types of product attributes : '$name' ";

    $items = product_select_by_loai($catagogy_id);
} else if (exist_param("dac_biet")) {
    $title_site = "Special product";
    $items = product_select_outstanding();
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
$hh_top10 = product_select_top10();
$ds_loai = catagogy_select_all();
$VIEW_NAME = "product/list_product.php";

require '../layout.php';
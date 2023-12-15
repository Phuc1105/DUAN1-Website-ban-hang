<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/category.php';
require '../../dao/comment.php';

//-------------------------------//

check_login();
extract($_REQUEST);

if (exist_param("category_id")) {
    $name_loai = category_select_by_id($category_id);
    extract($name_loai);
    $title_site = "Types of product attributes : '$name' ";
    $results = product_select_by_loai($category_id);
} else if (exist_param("find_product")) {
    if (isset($_REQUEST["keyword"])) {
        $keyword = $_REQUEST["keyword"];
        $results = find_product($keyword);
        $VIEW_NAME = "product/list_product.php";
    }
} else if (exist_param("price")) {
    $items = product_select_outstanding();
    $comment_list = comment_select_by_product($product_id, 5);
} else if (exist_param("date_old")) {
    $keyword = $_REQUEST["keyword"];
    $results = product_select_date_old($keyword);
} else if (exist_param("view_product")) {
    $keyword = $_REQUEST["keyword"];
    $results = product_select_popular($keyword);
} else if (exist_param("search")) {
    $keyword = $_POST['keyword'];
    if ($keyword == '') {
        $title_site = "All Menu";
    } else {
        $title_site = "Products containing keywords :'$keyword'";
    }
    $items = product_select_keyword($keyword);
    if (count($items) == 0) {
        $title_site = "No products contain keywords :'$search'";
    }
} else {
    $title_site = "All Menu";
    $items = product_select_page('view', 12);
}
// $product = product_select_by_id($product_id);
// extract($product);
$hh_db = product_select_outstanding();
$hh_top10 = product_select_popular_products();
$list_category = category_select_all_client();
$price_desc = product_select_price();
$VIEW_NAME = "product/list_product.php";

require '../layout.php';

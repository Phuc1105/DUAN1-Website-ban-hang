<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/comment.php';
require '../../dao/category.php';
//-------------------------------//
check_login();
extract($_REQUEST);

// Truy vấn mặt hàng theo mã lấy nó ra để hiện thị
$product = product_select_by_id($product_id);
extract($product);

// Tăng số lượt xem lên 1
product_view($product_id);

// Hàng cùng Loại
$product_cl = product_select_by_loai($category_id);

if (exist_param("content")) {
    $user_id = $_SESSION['user']['user_id'];
    $comment_date = date_format(date_create(), 'Y-m-d');
    comment_insert($user_id, $product_id, $content, $comment_date, $rating, $status);
}
// Lấy list bình luận ra
$comment_list = comment_select_by_product($product_id, 5);
$list_category = category_select_all_client();
$VIEW_NAME = "product/product_details.php";
require '../layout.php';

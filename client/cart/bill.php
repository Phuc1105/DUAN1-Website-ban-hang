<?php
require '../../dao/pdo.php';
require '../../global.php';
require '../../dao/product.php';
require '../../dao/user.php';
require '../../dao/invoice.php';
require '../../dao/category.php';
//-------------------------------//
check_login();
extract($_REQUEST);
if (exist_param("btn_list")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $order = invoice_select_by_user($user_id);
        extract($order);
        $VIEW_NAME = "../cart/bill_delivery.php";
    }
} else if (exist_param("btn_details")) {
    $order_id = $_GET['btn_details'];
    $order = invoice_select_by_id($order_id);
    extract($order);
    $order2 = invoice_select_by_order_details($order_id);
    $VIEW_NAME = "../cart/bill_details.php";
} else {
    $VIEW_NAME = "../cart/bill_delivery.php";
}
$list_category = category_select_all_client();
// $order_details['$order_detail_id'];
require '../layout.php';

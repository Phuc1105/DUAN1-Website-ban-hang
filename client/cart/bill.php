<?php
require '../../dao/pdo.php';
require '../../global.php';
require '../../dao/product.php';
require '../../dao/user.php';
require '../../dao/invoice.php';
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
}else{
    $VIEW_NAME = "../cart/bill_details.php";
}
$order_details = get_all_order_details();
require '../layout.php';

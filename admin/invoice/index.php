<?php
require '../../global.php';
require '../../dao/pdo.php';
require '../../dao/invoice.php';

extract($_REQUEST);
if (exist_param('btn_list')) {
    $items = invoice_select_by_all();
    $VIEW_NAME = '../invoice/list.php';
} else if (($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_xacnhan']))) {

    // Xử lý cập nhật trạng thái hóa đơn
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];
    hoa_don_update($order_id, $status);

    // Lấy danh sách hóa đơn sau khi cập nhật
    $items = invoice_select_by_all();
    $VIEW_NAME = '../invoice/list.php';
} else if (exist_param('btn_edit')) {
    $order_id = $_REQUEST['order_id'];
    $order = invoice_select_by_id($order_id);
    $item = invoice_select_by_all();
    $order_details = get_all_order_details();
    $VIEW_NAME = '../invoice/edit.php';
} else if (exist_param('btn_update')) {
    $status = $_POST['status'];
    $order_id = $_POST['order_id'];
    order_update_status($status, $order_id);
}
require '../layout.php';

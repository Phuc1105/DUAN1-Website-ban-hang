<?php
require '../../global.php';
require '../../dao/pdo.php';
require '../../dao/invoice.php';

extract($_REQUEST);
if(exist_param('btn_list')){
    $order = invoice_select_by_all();
    $VIEW_NAME = '../invoice/list.php';
}else if(exist_param('btn_edit')){
    $order_id = $_REQUEST['order_id'];
    $order = invoice_select_by_id($order_id);
    $item = invoice_select_by_all();
    $order_details = get_all_order_details(); 
    $VIEW_NAME = '../invoice/edit.php';
}else if(exist_param('btn_update')) {
    $status = $_POST['status'];
    $order_id = $_POST['order_id'];
    order_update_status($status, $order_id);
}
require '../layout.php';
?>
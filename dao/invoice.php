<?php
require_once 'pdo.php';
function invoice_insert( $user_id, $order_id, $voucher_id, $order_date, $img_product, $name_product, $status)
{
    $sql = "INSERT INTO orders( user_id, order_id, voucher_id, order_date, img_product, name_product, status) VALUES (?,?,?,?,?,?,?)";

    pdo_execute($sql, $user_id, $order_id, $voucher_id, $order_date, $img_product, $name_product, $status);
}
function invoice_details_insert( $order_id,$address, $order_date,$receiving_date,$note, $status, $price)
{
    $sql = "INSERT INTO order_details(order_id, address, order_date, receiving_date, note, status, price) VALUES (?,?,?,?,?,?,?)";

    pdo_execute($sql, $order_id,$address, $order_date,$receiving_date,$note, $status, $price);
}
function invoice_select_by_user($user_id)
{
    $sql = "SELECT * FROM orders WHERE user_id=?";
    return pdo_query($sql, $user_id);
}
function invoice_select_by_id($order_id)
{
    $sql = "SELECT * FROM orders WHERE order_id=?";
    return pdo_query($sql, $order_id);
}
function get_all_order_details() {
    $sql = "SELECT * FROM order_details";
    return pdo_query($sql);
}

?>


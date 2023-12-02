<?php
require_once 'pdo.php';
function invoice_insert( $user_id, $order_id, $voucher_id, $order_date, $img_product, $quantity, $name_product, $price, $status)
{
    $sql = "INSERT INTO orders( user_id, order_id, voucher_id, order_date, img_product, quantity, name_product, price, status) VALUES (?,?,?,?,?,?,?,?,?)";

    pdo_execute($sql, $user_id, $order_id, $voucher_id, $order_date, $img_product, $quantity, $name_product, $price, $status);
}
function invoice_details_insert( $order_id,$address, $order_date,$receiving_date, $status)
{
    $sql = "INSERT INTO order_details(order_id, address, order_date, receiving_date, status) VALUES (?,?,?,?,?)";

    pdo_execute($sql, $order_id,$address, $order_date,$receiving_date, $status);
}
function invoice_select_by_user($user_id)
{
    $sql = "SELECT * FROM orders WHERE user_id=?";
    return pdo_query($sql, $user_id);
}
function invoice_select_by_id($user_id)
{
    $sql = "SELECT * FROM orders WHERE user_id=?";
    return pdo_query($sql, $user_id);
}
function get_all_order_details() {
    $sql = "SELECT * FROM order_details";
    return pdo_query($sql);
}
?>


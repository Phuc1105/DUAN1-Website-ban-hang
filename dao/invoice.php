<?php
require_once 'pdo.php';
function invoice_insert( $user_id, $order_id, $voucher_id, $order_date, $img_product, $quantity, $name_product, $price, $status)
{
    $sql = "INSERT INTO orders( user_id, order_id, voucher_id, order_date, img_product, quantity, name_product, price, status) VALUES (?,?,?,?,?,?,?,?,?)";

    pdo_execute($sql, $user_id, $order_id, $voucher_id, $order_date, $img_product, $quantity, $name_product, $price, $status);
}
function invoice_details_insert( $order_id,$address, $order_date,$receiving_date)
{
    $sql = "INSERT INTO order_details(order_id, address, order_date, receiving_date) VALUES (?,?,?,?)";

    pdo_execute($sql, $order_id,$address, $order_date,$receiving_date);
}
function invoice_sum()
{
    $sql = "SELECT SUM(price) FROM orders WHERE status = 4";
    return pdo_query_value($sql) ;
}
function invoice_count()
{
    $sql = "SELECT count(order_id) FROM orders";
    return pdo_query_value($sql) ;
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
function invoice_select_by_order_details($order_id)
{
    $sql = "SELECT * FROM order_details WHERE order_id=?";
    return pdo_query($sql, $order_id);
}
function invoice_select_by_all()
{
    $sql = "SELECT * FROM orders";
    return pdo_query($sql);
}
function get_all_order_details() {
    $sql = "SELECT * FROM order_details";
    return pdo_query($sql);
}
function order_update($order_id, $voucher_id, $order_date, $user_id, $name_product, $img_product, $price, $quantity, $status)
{
    $sql = "UPDATE orders SET order_id=?, voucher_id=?, order_date=?, user_id=?, name_product=?, img_product=?, price=?, quantity=?, status=? WHERE order_id=? ";
    pdo_execute($sql, $order_id, $voucher_id, $order_date, $user_id, $name_product, $img_product, $price, $quantity, $status);
}
function order_update_status($status, $order_id)
{
    $sql = "UPDATE orders SET status=? WHERE order_id=?";
    pdo_execute($sql, $status, $order_id);
}

?>


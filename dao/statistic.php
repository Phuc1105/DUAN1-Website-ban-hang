<?php
require_once "pdo.php";
function thong_ke_products(){
    $sql = "SELECT lo.category_id, lo.name,"
            . " COUNT(*) quantity,"
            . " MIN(hh.price) gia_min,"
            . " MAX(hh.price) gia_max,"
            . " AVG(hh.price) gia_avg"
            . " FROM products hh "
            . " JOIN categories lo ON lo.category_id=hh.category_id "
            . " GROUP BY lo.category_id, lo.name";
    return pdo_query($sql);
}
function thong_ke_comments(){
    $sql = "SELECT hh.product_id, hh.name,"
            . " COUNT(*) quantity,"
            . " MIN(bl.comment_date) cu_nhat,"
            . " MAX(bl.comment_date) moi_nhat"
            . " FROM comments bl "
            . " JOIN products hh ON hh.product_id=bl.product_id "
            . " GROUP BY hh.product_id, hh.name";
    return pdo_query($sql);
}
function thong_ke_orders(){
    $sql = "SELECT od.order_id,"
            . " COUNT(*) quantity,"
            . " MIN(od.order_date) earliest_order_date,"
            . " MAX(od.order_date) latest_order_date,"
            . " SUM(od.quantity) total_amount"
            . " FROM orders od "
            . " GROUP BY od.order_id";
    return pdo_query($sql);
}
?>
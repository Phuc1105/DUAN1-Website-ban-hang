<?php

require_once 'pdo.php';
function thong_ke_hang_hoa()
{
    $sql = "SELECT lo.category_id, lo.name,"
        . " COUNT(*) quantity,"
        . " MIN(p.price) price_min,"
        . " MAX(p.price) price_max,"
        . " AVG(p.price) price_avg"
        . " FROM products p "
        . " JOIN categories lo ON lo.category_id=p.category_id"
        . " GROUP BY lo.category_id, lo.name";
    return pdo_query($sql);
}
function thong_ke_binh_luan()
{
    $sql = "SELECT p.product_id, p.name,"
        . " COUNT(*) quantity,"
        . " MIN(m.comment_date) cu_nhat,"
        . " MAX(m.comment_date) moi_nhat"
        . " FROM comments m "
        . " JOIN products p ON p.product_id=m.product_id "
        . " GROUP BY p.product_id, p.name"
        . " HAVING quantity > 0";
    return pdo_query($sql);
}
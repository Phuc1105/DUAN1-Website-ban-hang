<?php

require_once 'pdo.php';
function statistical_product()
{
    $sql = "SELECT c.category_id, c.name,"
        . " COUNT(*) quantity,"
        . " MIN(c.price) price_min,"
        . " MAX(c.price) price_max,"
        . " AVG(c.price) price_avg"
        . " FROM product p "
        . " JOIN categories c ON c.category_id=c.category_id "
        . " GROUP BY c.category_id, c.name";
    return pdo_query($sql);
}
function statistical_comment()
{
    $sql = "SELECT p.product_id, p.name,"
        . " COUNT(*) quantity,"
        . " MIN(m.comment_date) old,"
        . " MAX(m.comment_date) new"
        . " FROM comments m "
        . " JOIN products p ON p.product_id=m.product_id "
        . " GROUP BY p.product_id, p.name"
        . " HAVING quantity > 0";
    return pdo_query($sql);
}
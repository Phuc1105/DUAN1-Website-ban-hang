<?php
require_once 'pdo.php';
function comment_insert($user_id,$product_id, $content, $comment_date, $rating, $status)
{
    $sql = "INSERT INTO comments( user_id, product_id, content, comment_date, rating, status) VALUES (?,?,?,?,?,?)";

    pdo_execute($sql, $user_id, $product_id, $content, $comment_date, $rating, $status);
}
function comment_update($comment_id, $product_id, $user_id, $content, $comment_date)
{
    $sql = "UPDATE comments SET product_id=?,user_id=?,content=?,comment_date=? WHERE comment_id=?";
    pdo_execute($sql, $product_id, $user_id, $content, $comment_date, $comment_id);
}
function comment_delete($comment_id)
{
    $sql = "DELETE FROM comments WHERE comment_id=?";
    if (is_array($comment_id)) {
        foreach ($comment_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $comment_id);
    }
}
function comment_select_all()
{
    $sql = "SELECT * FROM comments bl ORDER BY comment_date DESC";
    return pdo_query($sql);
}
function comment_select_by_id($comment_id)
{
    $sql = "SELECT * FROM comments WHERE comment_id=?";
    return pdo_query_one($sql, $comment_id);
}
function comment_exist($comment_id)
{
    $sql = "SELECT count(*) FROM comments WHERE comment_id=?";
    return pdo_query_value($sql, $comment_id) > 0;
}
function comment_select_by_product($product_id, $limit = 10)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $query = "SELECT count(*) FROM comments b 
    JOIN products h ON h.product_id = b.product_id 
    WHERE b.product_id = $product_id ORDER BY comment_id DESC";

    $_SESSION['total_comment'] = pdo_query_value($query);
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_comment'] / $limit);
    $sql = "SELECT b.*, h.name, k.name, k.image FROM comments b 
    JOIN products h ON h.product_id = b.product_id 
    JOIN users k ON k.user_id =b.user_id WHERE b.product_id=? ORDER BY comment_id DESC LIMIT $begin,$limit";
    return pdo_query($sql, $product_id);
}   
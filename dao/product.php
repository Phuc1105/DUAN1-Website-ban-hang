<?php
require_once 'pdo.php';
function product_insert($name, $price, $image, $catagogy_id, $view, $input_date, $describes,$quantity,$purchase_count,$outstanding)
{
    $sql = "INSERT INTO products(name, price, image, catagogy_id, view, input_date, describes, quantity, purchase_count, outstanding) VALUES (?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $name, $price, $image, $catagogy_id, $view, $input_date, $describes, $quantity, $purchase_count,$outstanding);
}
function product_update($product_id, $name, $price, $image, $catagogy_id, $view, $input_date, $describes,$quantity,$purchase_count,)
{
    $sql = "UPDATE products SET name=?, price=?, image=?, catagogy_id=?, view=?, input_date=?, describes=?, quantity=?, purchase_count=? WHERE product_id=?";
    pdo_execute($sql, $name, $price, $image, $catagogy_id, $view, $input_date, $describes,$quantity,$purchase_count, $product_id);
}
function product_delete($ma_hh)
{
    $sql = "DELETE FROM products WHERE ma_hh=?";
    if (is_array($ma_hh)) {
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hh);
    }
}
function product_select_all()
{
    $sql = "SELECT * FROM products ORDER BY ma_hh desc";
    return pdo_query($sql);
}
function product_select_by_id($product_id)
{
    $sql = "SELECT * FROM products WHERE product_id=?";
    return pdo_query_one($sql, $product_id);
}
function product_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM products WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}
function product_exist_add($ten_hh)
{
    $sql = "SELECT count(*) FROM products WHERE ten_hh=?";
    return pdo_query_value($sql, $ten_hh) > 0;
}
function product_exist_update($ma_hh, $ten_hh)
{
    $sql = "SELECT count(*) FROM products WHERE ma_hh!=? and ten_hh=?";
    return pdo_query_value($sql, $ma_hh, $ten_hh) > 0;
}

function product_view($product_id)
{
    $sql = "UPDATE products SET view = view + 1 WHERE product_id=?";
    pdo_execute($sql, $product_id);
}
function product_select_top10()
{
    $sql = "SELECT * FROM products WHERE view > 0 ORDER BY view DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function product_select_outstanding()
{
    $sql = "SELECT * FROM products WHERE outstanding=1";
    return pdo_query($sql);
}

function product_select_by_loai($catagogy_id)
{
    $sql = "SELECT * FROM products WHERE catagogy_id=?";
    return pdo_query($sql, $catagogy_id);
}

function product_select_keyword($keyword)
{
    $sql = "SELECT * FROM products hh "
        . " JOIN loai lo ON lo.catagogy_id=hh.catagogy_id "
        . " WHERE name LIKE ? OR name LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function product_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM products");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM products ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}
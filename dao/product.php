<?php
require_once 'pdo.php';
function product_insert($name, $price, $image, $catagogy_id, $view, $input_date, $describes,$quantity,$purchase_count,$outstanding)
{
    $sql = "INSERT INTO product(name, price, image, catagogy_id, view, input_date, describes, quantity, purchase_count, outstanding) VALUES (?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $name, $price, $image, $catagogy_id, $view, $input_date, $describes, $quantity, $purchase_count,$outstanding);
}
function product_update($product_id, $name, $price, $image, $catagogy_id, $view, $input_date, $describes,$quantity,$purchase_count,)
{
    $sql = "UPDATE product SET name=?, price=?, image=?, catagogy_id=?, view=?, input_date=?, describes=?, quantity=?, purchase_count=? WHERE product_id=?";
    pdo_execute($sql, $name, $price, $image, $catagogy_id, $view, $input_date, $describes,$quantity,$purchase_count, $product_id);
}
function product_delete($ma_hh)
{
    $sql = "DELETE FROM product WHERE ma_hh=?";
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
    $sql = "SELECT * FROM product ORDER BY ma_hh desc";
    return pdo_query($sql);
}
function product_select_by_id($ma_hh)
{
    $sql = "SELECT * FROM product WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}
function product_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM product WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}
function product_exist_add($ten_hh)
{
    $sql = "SELECT count(*) FROM product WHERE ten_hh=?";
    return pdo_query_value($sql, $ten_hh) > 0;
}
function product_exist_update($ma_hh, $ten_hh)
{
    $sql = "SELECT count(*) FROM product WHERE ma_hh!=? and ten_hh=?";
    return pdo_query_value($sql, $ma_hh, $ten_hh) > 0;
}

function product_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE product SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}
function product_select_top10()
{
    $sql = "SELECT * FROM product WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function product_select_outstanding()
{
    $sql = "SELECT * FROM product WHERE outstanding=1";
    return pdo_query($sql);
}

function product_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM product WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}

function product_select_keyword($keyword)
{
    $sql = "SELECT * FROM product hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
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
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM product");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM product ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}
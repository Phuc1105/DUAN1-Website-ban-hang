<?php
require_once 'pdo.php';
function product_insert($name, $price, $image, $category_id, $input_date, $describes, $quantity, $purchase_count, $outstanding)
{
    $sql = "INSERT INTO products(name, price, image, category_id, input_date, describes, quantity, purchase_count, outstanding) VALUES (?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $name, $price, $image, $category_id, $input_date, $describes, $quantity, $purchase_count, $outstanding);
}
function product_update($product_id, $name, $price, $image, $category_id, $view, $input_date, $describes, $quantity, $purchase_count,)
{
    $sql = "UPDATE products SET name=?, price=?, image=?, category_id=?, view=?, input_date=?, describes=?, quantity=?, purchase_count=? WHERE product_id=?";
    pdo_execute($sql, $name, $price, $image, $category_id, $view, $input_date, $describes, $quantity, $purchase_count, $product_id);
}
function product_delete($product_id)
{
    $sql = "DELETE FROM products WHERE product_id=?";
    if (is_array($product_id)) {    
        foreach ($product_id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $product_id);
    }
}
function product_select_all()
{
    $sql = "SELECT * FROM products ORDER BY product_id desc";
    return pdo_query($sql);
}
function product_select_by_id($product_id)
{
    $sql = "SELECT * FROM products WHERE product_id=?";
    return pdo_query_one($sql, $product_id);
}
function product_exist($product_id)
{
    $sql = "SELECT count(*) FROM products WHERE product_id=?";
    return pdo_query_value($sql, $product_id) > 0;
}
function product_exist_add($name)
{
    $sql = "SELECT count(*) FROM products WHERE name=?";
    return pdo_query_value($sql, $name) > 0;
}
function product_exist_update($product_id, $name)
{
    $sql = "SELECT count(*) FROM products WHERE product_id!=? and name=?";
    return pdo_query_value($sql, $product_id, $name) > 0;
}

function product_view($product_id)
{
    $sql = "UPDATE products SET view = view + 1 WHERE product_id=?";
    pdo_execute($sql, $product_id);
}
function product_select_popular_products()
{
    $sql = "SELECT * FROM products WHERE view > 0 ORDER BY view DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function product_select_outstanding()
{
    $sql = "SELECT * FROM products WHERE outstanding=1";
    return pdo_query($sql);
}
function product_select_new_product()
{
    $sql = "SELECT * FROM products WHERE outstanding=''";
    return pdo_query($sql);
}

function product_select_by_loai($category_id)
{
    $sql = "SELECT * FROM products WHERE category_id=?";
    return pdo_query($sql, $category_id);
}
function product_select_keyword($keyword)
{
    $sql = "SELECT * FROM products p "
    . " JOIN categories c ON c.category_id = p.category_id "
    . " WHERE p.name LIKE ? OR c.name LIKE ?";
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
function product_select_price(){
    $sql = "SELECT * FROM products ORDER BY price DESC";
    return pdo_query($sql);
}
function product_select_date_old(){
    $sql = "SELECT * FROM products ORDER BY input_date DESC";
    return pdo_query($sql);
}
function product_select_view()
{
    $sql = "SELECT * FROM products WHERE view > 0";
    pdo_execute($sql);
}
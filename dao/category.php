<?php
require_once 'pdo.php';
function category_insert($name, $status)
{
    $sql = "INSERT INTO categories(name,status)  VALUES(?,?)";
    pdo_execute($sql, $name, $status);
}
function category_update($category_id, $name, $status)
{
    $sql = "UPDATE categories SET name=? , status=? WHERE category_id=?";
    pdo_execute($sql, $name, $status, $category_id);
}
function category_update_status_display($category_id){
    $sql = "UPDATE categories SET status=1 WHERE category_id = ?";
    pdo_execute($sql , $category_id);
}
function category_update_status_hide($category_id){
    $sql = "UPDATE categories SET status=0 WHERE category_id = ?";
    pdo_execute($sql , $category_id);
}
function category_delete($category_id)
{
    $sql = "DELETE FROM categories WHERE category_id=?";
    if (is_array($category_id)) {
        foreach ($category_id as $category_id) {
            pdo_execute($sql, $category_id);
        }
    } else {
        pdo_execute($sql, $category_id);
    }
}
//Mặc định sắp xếp ngược/ truyền ASC vào thì xuôi

function category_select_all($order = 'DESC')
{
    $sql = "SELECT * FROM categories ORDER BY category_id $order";
    return pdo_query($sql);
}
function category_select_by_id($category_id)
{
    $sql = "SELECT * FROM categories WHERE category_id=?";
    return pdo_query_one($sql, $category_id);
}
function category_select_by_name($name)
{
    $sql = "SELECT * FROM categories WHERE name=?";
    return pdo_query_one($sql, $name);
}
function category_exist($category_id)
{
    $sql = "SELECT count(*) FROM categories WHERE category_id=?";
    return pdo_query_value($sql, $category_id) > 0;
}


function category_exist_name_add($name)
{
    $sql = "SELECT count(*) FROM categories WHERE name=?";
    return pdo_query_value($sql, $name) > 0;
}
function category_exist_name_update($category_id, $name)
{
    $sql = "SELECT count(*) FROM categories WHERE  category_id!=? and category_id=?";
    return pdo_query_value($sql, $category_id, $name) > 0;
}

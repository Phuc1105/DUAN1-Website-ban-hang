<?php
require_once 'pdo.php';
function catagogy_insert($name,$status)
{
    $sql = "INSERT INTO catagogies(name,status)  VALUES(?,?)";
    pdo_execute($sql, $name,$status);
}
function catagogy_update($catagogy_id, $name, $status)
{
    $sql = "UPDATE catagogies SET name=? , status=? WHERE catagogy_id=?";
    pdo_execute($sql, $name, $status, $catagogy_id);
}
function catagogy_delete($catagogy_id)
{
    $sql = "DELETE FROM catagogy WHERE catagogy_id=?";
    if (is_array($catagogy_id)) {
        foreach ($catagogy_id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $catagogy_id);
    }
}
//Mặc định sắp xếp ngược/ truyền ASC vào thì xuôi

function catagogy_select_all($order = 'DESC')
{
    $sql = "SELECT * FROM catagogies ORDER BY catagogy_id $order";
    return pdo_query($sql);
}
function catagogy_select_by_id($catagogy_id)
{
    $sql = "SELECT * FROM catagogies WHERE catagogy_id=?";
    return pdo_query_one($sql, $catagogy_id);
}
function catagogy_select_by_name($name)
{
    $sql = "SELECT * FROM catagogies WHERE name=?";
    return pdo_query_one($sql, $name);
}
function catagogy_exist($catagogy_id)
{
    $sql = "SELECT count(*) FROM catagogies WHERE catagogy_id=?";
    return pdo_query_value($sql, $catagogy_id) > 0;
}


function catagogy_exist_name_add($name)
{
    $sql = "SELECT count(*) FROM catagogies WHERE name=?";
    return pdo_query_value($sql, $name) > 0;
}
function catagogy_exist_name_update($catagogy_id, $name)
{
    $sql = "SELECT count(*) FROM catagogies WHERE  catagogy_id!=? and catagogy_id=?";
    return pdo_query_value($sql, $catagogy_id, $name) > 0;
}
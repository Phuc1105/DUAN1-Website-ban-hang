<?php
require "pdo.php";
function user_insert($user_id, $password, $name, $email, $image, $status, $role,$phone,$gender)
{
    $sql = "INSERT INTO users(user_id,password,name,email,image,status,role,phone,gender) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_id, $password, $name, $email, $image,$status == 1, $role == 1,$phone,$gender);
}
function user_update_status($status,$user_id){
    $sql = "UPDATE users SET status=? WHERE user_id = ?";
    pdo_execute($sql,$status,$user_id);
}
function user_update($password, $name, $email, $status, $role,$phone,$gender,$image,$user_id)
{
    if(isset($image)){
    $sql = "UPDATE users SET password=?,name=?,email=?,status=?,role=?,phone=?,gender=?,image=? WHERE user_id=?";
    pdo_execute($sql, $password, $name, $email, $status, $role,$phone,$gender,$image,$user_id);
    }else{
        $sql = "UPDATE users SET password=?,name=?,email=?,status=?,role=?,phone=?,gender=? WHERE user_id=?";
        pdo_execute($sql, $password, $name, $email, $status, $role,$phone,$gender,$user_id);    
    }
}
function user_delete($user_id)
{
    $sql = "DELETE FROM users WHERE user_id=?";
    if (is_array($user_id)) {
        foreach ($user_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $user_id);
    }
}
function user_select_all()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}
function user_select_by_id($user_id)    
{
    $sql = "SELECT * FROM users WHERE user_id=?";
    return pdo_query_one($sql, $user_id);
}
function user_exist($user_id)
{
    $sql = "SELECT count(*) FROM users WHERE user_id=?";
    return pdo_query_value($sql, $user_id) > 0;
}

function user_exist_email($email)
{
    $sql = "SELECT count(*) FROM users WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function user_change_password($user_id, $password2)
{

    $sql = "UPDATE users SET mat_khau=? WHERE user_id=?";
    pdo_execute($sql, $password2, $user_id);
}
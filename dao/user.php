<?php
require_once 'pdo.php';
function user_insert(
    $user_id,
    $password,
    $name,
    $email,
    $image,
    $status,
    $role
) {
    $sql = "INSERT INTO users(user_id,password,name,email,image,status,role) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_id, $password, $name, $email, $image, $status == 1, $role == 1);
}
function user_update($user_id, $password, $name, $email, $image, $status, $role)
{
    $sql = "UPDATE users SET password=?,name=?,email=?,image=?,status=?,role=? WHERE user_id=?";
    pdo_execute($sql, $user_id, $password, $name, $email, $image, $status == 1, $role == 1);
}
function user_delete($user_id)
{
    $sql = "DELETE FROM user WHERE user_id=?";
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
function user_select_by_facebook_id($facebook_id)
{
    $sql = "SELECT * FROM users WHERE facebook_id = :facebook_id";
    $params = array(':facebook_id' => $facebook_id);
    return pdo_query_one($sql, $params);
}

function user_insert_facebook($facebook_id, $facebook_name, $facebook_email)
{
    $sql = "INSERT INTO users (facebook_id, facebook_name, facebook_email) 
            VALUES (:facebook_id, :facebook_name, :facebook_email)";
    $params = array(
        ':facebook_id' => $facebook_id,
        ':facebook_name' => $facebook_name,
        ':facebook_email' => $facebook_email
    );

    pdo_execute($sql, $params);

    // Return the ID of the newly inserted user
    return pdo_query_one("SELECT LAST_INSERT_ID()")['LAST_INSERT_ID()'];
}


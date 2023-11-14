<?php
require '../../global.php';
require '../../dao/user.php';

extract($_REQUEST);
$VIEW_NAME = "../account/form-login.php";

if (exist_param("btn_login")) {
    $user = user_select_by_id($user_id);
    if ($user) {
        if ($user['password'] == $password) {

            if (exist_param('ghi_nho')) {
                add_cookie("user_id", $user_id, 30);
                add_cookie("password", $password, 30);
            } else {
                delete_cookie("user_id");
                delete_cookie("password");
            }
            $_SESSION["user"] = $user;

            $role =  $user['role'] == 0 ? "" : "staff";
            echo "<script>
                     alert('Log in to your account " . $role . " success!'); 
                     location.href='http://localhost:/" . $ROOT_URL . "';
                </script>";
        } else {
            $MESSAGE = "Incorrect password!";
        }
    } else {
        $MESSAGE = "Incorrect username!";
    }
} else {

    if (exist_param("btn_logout")) {
        unset($_SESSION['user']);//xóa người dùng khỏi session
        $_SESSION['name_page'] = 'home';
    }
    $user_id = get_cookie("user_id");
    $password = get_cookie("password");
}
require '../layout.php';
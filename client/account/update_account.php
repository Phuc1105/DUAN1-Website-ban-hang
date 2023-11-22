<?php
require '../../global.php';
require '../../dao/user.php';


check_login();

extract($_REQUEST);

if (exist_param("btn_update")) {
    $file_name = save_file("up_image", "$UPLOAD_URL/users/");
    $image = $file_name ? $file_name : $image;
    try {
        user_update($user_id, $password, $name, $email, $image, $status, $role);
        $MESSAGE = "Update successful!";
        $_SESSION['user'] = user_select_by_id($user_id);
    } catch (Exception $exc) {
        $MESSAGE = "Update failed!";
    }
} else {
    extract($_SESSION['user']);
}

$VIEW_NAME = "account/update_account_form.php";
require '../layout.php';
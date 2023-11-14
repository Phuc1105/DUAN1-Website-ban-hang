<?php

require '../../global.php';
require '../../dao/user.php';

extract($_REQUEST);
$VIEW_NAME = "account/form-register.php";


extract($_REQUEST);

if (exist_param("btn_register")) {
    if ($password != $password2) {
        $MESSAGE = "Passwords must match";
    } else if (user_exist($user_id)) {
        $MESSAGE = "Username already exists.";
    } else {

        $file_name = save_file("img", "$UPLOAD_URL/users/");
        $image = $file_name ? $file_name : "";
        try {
            user_insert($user_id, $password, $name, $email, $image, $status, $role);
            $MESSAGE = "Member registration successful!";
            $VIEW_NAME = "form-login.php";
        } catch (Exception $exc) {
            $MESSAGE = "Membership registration failed!";
        }
    }
} else {
    global $user_id, $name, $password, $image, $email, $role, $status, $password2;
    $VIEW_NAME = "account/form-register.php";
}

require '../layout.php';
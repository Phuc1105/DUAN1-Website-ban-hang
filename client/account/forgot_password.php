<?php

require '../../global.php';
require '../../dao/user.php';

extract($_REQUEST);
$VIEW_NAME = 'account/forgot_password.php';
if (exist_param('btn_forgot_pass')) {
    $user = user_select_by_id($user_id);
    if ($user) {
        if ($user['email'] != $email) {
            $MESSAGE = 'Incorrect email address';
        } else {
            $MESSAGE = "Your Password :" . $user['password'];
            global $user_id, $password;
            $VIEW_NAME = 'account/form-login.php';
        }
    } else {
        $MESSAGE = 'Incorrect username';
    }
}

require '../layout.php';
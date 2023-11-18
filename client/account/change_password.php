<?php
require '../../global.php';
require '../../dao/user.php';
check_login();
extract($_REQUEST);
if (exist_param('btn_change')) {
    if ($password2 != $password3) {
        $MESSAGE = "Confirmation of the new password is incorrect";
    } else {
        $user = user_select_by_id($user_id);
        if ($user) {
            if ($user['password'] == $password) {
                try {
                    user_change_password($user_id, $password2);
                    $MESSAGE = 'Password updated successfully';
                } catch (Exception $exc) {
                    $MESSAGE = 'Failed';
                }
            } else {
                $MESSAGE = 'Incorrect old password';
            }
        } else {
            $MESSAGE = "Wrong login ID";
        }
    }
}
$VIEW_NAME = 'account/change_password_form.php';
require '../layout.php';

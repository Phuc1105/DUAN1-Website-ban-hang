<?php
require '../../global.php';
require '../../dao/user.php';


check_login();

extract($_REQUEST);

if (exist_param("btn_update")) {
    extract($_SESSION['user']);
    $VIEW_NAME = "account/user.php";


    // $file_name = save_file("up_image", "$UPLOAD_URL/users/");
    // $image = $file_name ? $file_name : $image;
    // try {
    //     user_update_client($user_id, $password, $name, $email, $image, $status, $role);
    //     $MESSAGE = "Update successful!";
    //     $_SESSION['user'] = user_select_by_id($user_id);
    // } catch (Exception $exc) {
    //     $MESSAGE = "Update failed!";
    // }
} else if (exist_param("btn_confirm")) {
    extract($_SESSION['user']);
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $file_name = save_file("up_hinh", "$UPLOAD_URL/users/");
    $image = $file_name ? $file_name : $image;
    try {
        user_update_client($user_id, $password, $name, $email, $gender, $image, $address, $phone);
        echo "Update successful!";
        $_SESSION['user'] = user_select_by_id($user_id);
        $VIEW_NAME = "account/user.php";
    } catch (Exception $exc) {
        echo "Update failed!";
        // $VIEW_NAME = "account/user.php";
    }
} else {
    $VIEW_NAME = "account/update_account_form.php";
    extract($_SESSION['user']);
}

require '../layout.php';

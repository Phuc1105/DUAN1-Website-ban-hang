<?php
require '../../global.php';
require '../../dao/user.php';   
if (isset($_GET['user_id'])) {

    $result = user_exist($_GET['user_id']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['email'])) {
    $result = user_exist_email($_GET['email']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}   
if (isset($_GET['phone'])) {
    # code...
    $result = phone_exist($_GET['phone']);
    if ($result == true) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}

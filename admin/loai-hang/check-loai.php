<?php
require_once "../../global.php";
require "../../dao/loai.php";
if (isset($_GET['act'])) {


    if ($_GET['act'] == 'add') {
        $result = loai_exist_ten_loai_add($_GET['ten_loai']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
    if ($_GET['act'] == 'update') {
        // var_dump($_GET['ma_loai']);
        $result = loai_exist_ten_loai_update($_GET['ma_loai'], $_GET['ten_loai']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}
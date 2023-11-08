<?php

require_once "../../dao/pdo.php";
require_once "../../dao/binh-luan.php";
require_once "../../dao/thong-ke.php";
require "../../global.php";
check_login();

extract($_REQUEST);
if (exist_param("ma_hh")) {

    if (exist_param("btn_delete")) {
        try {
            binh_luan_delete($ma_bl);
            $MESSAGE = "Xóa thành công";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại";
        }
    } else if (exist_param("btn_delete_all")) {
        try {
            $arr_ma_bl = $_POST['ma_bl'];
            binh_luan_delete($arr_ma_bl);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
        // $items = binh_luan_select_by_hang_hoa($ma_hh);
        $VIEW_NAME = "detail.php";
    }

    $items = binh_luan_select_by_hang_hoa($ma_hh);

    if (count($items) == 0) {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = "list.php";
    } else {
        $VIEW_NAME = "detail.php";
    }
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
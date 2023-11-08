<?php
require_once "../../dao/pdo.php";
require_once "../../dao/khach-hang.php";
require "../../global.php";
check_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ma_kh = $_POST['ma_kh'];
    $ho_ten = $_POST['ho_ten'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];
    $hinh = save_file('hinh', "$UPLOAD_URL/users");
    //insert vào db
    khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);

    //show dữ liệu
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_kh = $_REQUEST['ma_kh'];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);

    //show dữ liệu
    $items = khach_hang_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_kh = $_REQUEST['ma_kh'];
    khach_hang_delete($ma_kh);
    //hiển thị danh sách

    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_kh = $_POST['ma_kh'];
        khach_hang_delete($arr_ma_kh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_kh = $_POST['ma_kh'];
    $ho_ten = $_POST['ho_ten'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];
    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

    khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
    //hiển thị danh sách

    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
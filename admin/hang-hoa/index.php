<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";
require_once "../../dao/hang-hoa.php";
require "../../global.php";

check_login();

// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $ngay_nhap = $_POST['ngay_nhap'];

    // $hinh = $_FILES['hinh']['name'];
    // Upload file lên host
    $hinh = save_file('hinh', "$UPLOAD_URL/products/");
    //insert vào db
    hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);

    //show dữ liệu
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_hh = $_REQUEST['ma_hh'];
    $hang_hoa_info = hang_hoa_select_by_id($ma_hh);
    extract($hang_hoa_info);

    $loai_hang = loai_select_all('ASC');
    //show dữ liệu
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_hh = $_REQUEST['ma_hh'];
    hang_hoa_delete($ma_hh);
    //hiển thị danh sách

    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        // Vừa sửa gì ở đây quên cmnr
        $arr_ma_hh = $_POST['ma_hh'];
        hang_hoa_delete($arr_ma_hh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $ngay_nhap = $_POST['ngay_nhap'];

    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;


    hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
    //hiển thị danh sách

    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else {
    $loai_hang = loai_select_all('ASC');
    $VIEW_NAME = "add.php";
}
require "../layout.php";
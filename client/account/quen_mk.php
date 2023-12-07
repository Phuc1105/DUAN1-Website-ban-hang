<?php
require '../../global.php';
require '../../dao/user.php';
extract($_REQUEST);
$VIEW_NAME = 'account/quen-mk-email.php';
$thongbao = "";
if (exist_param('btn_forgot_Email')) {
    $user = user_select_by_email($email);
    if ($user) {
        if ($user['email'] != $email) {
            $thongbao = "Nhập Sai Email Xin Vui Lòng Nhập Lại!";
        } else {
            $_SESSION['email'] = $email;
            $VIEW_NAME = 'account/quen-mk-Maller.php';

        }
    } else {
        $thongbao = 'Sai Email Vui Lòng Nhập Lại';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_forgot_xac-nhan"])) {
    $user = user_select_by_id($ma_kh);
    if (isset($_POST["token"]) && $_POST["token"] === $_SESSION["token"]) {
        $VIEW_NAME = 'account/quen-mk-form.php';
    } else {
        echo "Sai Token";
    }
}

if (exist_param('btn_forgot_pass')) {
    $email = $_POST['email'];
    $mat_khau1 = $_POST['mat_khau1'];
    $mat_khau2 = $_POST['mat_khau2'];
    if ($mat_khau1 != $mat_khau2) {
        $thongbao = "Xác nhận mật khẩu mới không đúng";
    } else {
        $user = user_select_by_email($email);
        if ($user) {
            try {
                $thongbao = "Cập Nhật Mật Khẩu Thành Công!";
                user_change_Email($email, $mat_khau1);
                $VIEW_NAME = 'account/cap-nhat-thanh-cong.php';
            } catch (Exception $exc) {
                $thongbao = 'Thất bại';
            }
        } else {
            $thongbao = "Sai mã đăng nhập";
        }
    }
}


require '../layout.php';

<?php
session_start(); 
$ROOT_URL = "/duan1"; 
$CONTENT_URL = "$ROOT_URL/content"; 
$ADMIN_URL = "$ROOT_URL/admin"; 
$CLIENT_URL = "$ROOT_URL/client";
$SL_PER_PAGE = 10; 
$UPLOAD_URL = "../../upload"; 

$VIEW_NAME = 'index.php'; // Đặt tên mặc định cho tệp view là 'index.php'.
$MESSAGE = ''; // Khởi tạo một biến tin nhắn rỗng.

function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}

function save_file($fieldname, $target_dir)
{
    $file_upload = $_FILES[$fieldname];
    $file_name = basename($file_upload['name']);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $target_path);
    return $file_name;
}

// Hàm thêm cookie với tên, giá trị và số ngày tồn tại của cookie.
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}

// Hàm xóa cookie theo tên.
function delete_cookie($name)
{
    add_cookie($name, "", -1);
}

// Hàm lấy giá trị của cookie dựa trên tên.
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}

// Hàm kiểm tra đăng nhập.
function check_login()
{
    global $CLIENT_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['role'] == 1) {
            return;
        }
        if (strpos($_SERVER['REQUEST_URI'], '/admin/') == false) {
            return;
        }
    }

    $_SESSION['name_page'] = 'home';
    header("location: $CLIENT_URL/account/login.php");
    die;
}




<?php
// bill_delivery.php

// Giả sử bạn đã bắt đầu phiên và có hàm xử lý giỏ hàng
session_start();
require "../../global.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['agree_order'])) {
    // Lấy thông tin từ biểu mẫu
    $name = $_POST['name'];
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $trang_thai = $_POST['trang_thai'];
    $ghi_chu = $_POST['ghi_chu'];

    // Thực hiện các hành động cần thiết để xử lý đơn hàng và thanh toán
    // ...

    // Xóa sản phẩm khỏi giỏ hàng sau khi thanh toán thành công
    clearCart();

    // Chuyển hướng đến trang "thanks" hoặc trang cảm ơn khác
    header("location:" . $ROOT_URL. "");
    exit();
}

// Hàm để xóa giỏ hàng
function clearCart() {
     // Kiểm tra xem phiên đã bắt đầu chưa
     if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Xóa giỏ hàng bằng cách unset biến $_SESSION['cart']
    unset($_SESSION['cart']);
}

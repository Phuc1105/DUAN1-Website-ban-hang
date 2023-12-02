<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/user.php';
require '../../dao/invoice.php';
//-------------------------------//

extract($_REQUEST);
// var_dump($_REQUEST);
// die;
if (exist_param("form_invoice")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $VIEW_NAME = "../cart/form_invoice.php";
    } else {
        header("location:" . $CLIENT_URL . "/account/login.php");
    }
} else if (exist_param("delivery")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $VIEW_NAME = "../cart/delivery.php";
    } else {
        header("location:" . $CLIENT_URL . "/account/login.php");
    }
} else if (exist_param("btn_insert")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $user_id = $kh['user_id'];
        $voucher_id = 1;
        $order_date = $_POST['order_date'];
        $img_product = $_POST['image'];
        $status = "";
        $receiving_date = "";
        $note = "";
        $price = $_POST['price'];
        $order_id = $_POST['order_id'];
        $name_product = $_POST['name'];

        invoice_insert($user_id, $order_id, $voucher_id, $order_date, $img_product, $name_product, $status);
        invoice_details_insert($order_id, $address, $order_date, $receiving_date, $note, $status, $price);
        header('Loccalhost: ../cart/bill_delivery.php');
        clearCart();

    }
}else {
    $VIEW_NAME = "../cart/cart.php";
}   
$items = product_select_all();
require '../layout.php';
function clearCart()
{
    // Kiểm tra xem phiên đã bắt đầu chưa
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Xóa giỏ hàng bằng cách unset biến $_SESSION['cart']
    unset($_SESSION['cart']);
}

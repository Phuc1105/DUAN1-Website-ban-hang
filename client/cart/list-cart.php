<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/user.php';
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
}else if (exist_param("delivery")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $VIEW_NAME = "../cart/delivery.php";
    } else {
        header("location:" . $CLIENT_URL . "/account/login.php");
    }
} else {
    $VIEW_NAME = "../cart/cart.php";
}
require '../layout.php';

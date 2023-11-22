<?php
require '../../global.php';
require '../../dao/product.php';
check_login();
extract($_REQUEST);

if (isset($id) && $id > 0) {
    $items = product_select_by_id($id);
    $total = 0;
    extract($items);
    if (isset($_SESSION['cart'])) {

        if (isset($_SESSION['cart'][$id]['sl'])) {
            $_SESSION['cart'][$id]['sl'] += 1;
        } else {
            $_SESSION['cart'][$id]['sl'] = 1;
        }
        $_SESSION['cart'][$id]['name'] = $name;
        $_SESSION['cart'][$id]['image'] = $image;
        $_SESSION['cart'][$id]['price'] = $price;
        $_SESSION['cart'][$id]['discount'] = $discount;

        foreach ($_SESSION['cart'] as $key => $value) {
            $total += $_SESSION['cart'][$key]['sl'];
        }
        echo $total;
    } else {
        $_SESSION['cart'][$id]['sl'] = 1;
        $_SESSION['cart'][$id]['name'] = $name;
        $_SESSION['cart'][$id]['image'] = $image;
        $_SESSION['cart'][$id]['price'] = $price;
        $_SESSION['cart'][$id]['discount'] = $discount;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total += $_SESSION['cart'][$key]['sl'];
        }
        echo $total;
    }
    $_SESSION['total_cart'] = $total;

    header("location:" . $CLIENT_URL . "/cart/list-cart.php");
}
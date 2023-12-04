<?php
// require '../../global.php';
// require '../../dao/product.php';
// if (isset($_GET['name'])) {
//     $result = product_exist($_GET['name']);
//     if ($result == true) {
//         echo json_encode(false);
//     } else {
//         echo json_encode(true);
//     }
// }
require '../../global.php';
require '../../dao/product.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $result = product_select_by_name($name);

    // Nếu tên đã tồn tại, trả về "false"
    if ($result) {
        echo json_encode(false);
    } else {
        // Nếu tên chưa tồn tại, trả về "true"
        echo json_encode(true);
    }
} else {
    // Nếu không có dữ liệu gửi đến, trả về "false"
    echo json_encode(false);
}


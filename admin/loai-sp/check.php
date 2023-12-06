<?php
require '../../global.php';
require '../../dao/category.php';
if (isset($_GET['name'])) {
    # code...   
    $result = category_exist_name_add($_GET['name']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
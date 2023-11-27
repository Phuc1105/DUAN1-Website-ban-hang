<?php

require_once "../../dao/pdo.php";
require_once "../../dao/comment.php";
require_once "../../dao/statistical.php";
require "../../global.php";
check_login();

extract($_REQUEST);
if (exist_param("product_id")) {

    if (exist_param("btn_delete")) {
        try {
            comment_delete($comment_id);
            $MESSAGE = "Deleted successfully";
        } catch (Exception $exc) {
            $MESSAGE = "Delete failed";
        }
    } else if (exist_param("btn_delete_all")) {
        try {
            $arr_comment_id = $_POST['comment_id'];
            comment_delete($arr_comment_id);
            $MESSAGE = "Deleted successfully";
        } catch (Exception $exc) {
            $MESSAGE = "Delete failed!";
        }
        $VIEW_NAME = "detail.php";
    }

    $items = comment_select_by_product($product_id);

    if (count($items) == 0) {
        $items = statistical_comment();
        $VIEW_NAME = "list.php";
    } else {
        $VIEW_NAME = "detail.php";
    }
} else {
    $items = statistical_comment();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
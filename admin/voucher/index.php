<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/voucher.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
  $items = voucher_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
  $name = $_REQUEST['name'];
  $reduce = $_REQUEST['reduce'];
  $quantity = $_REQUEST['quantity'];
  $start_date = $_REQUEST['start_date'];
  $end_date = $_REQUEST['end_date'];
  $status = $_REQUEST['status'];
  $discribe = $_REQUEST['discribe'];
  voucher_insert($name, $reduce, $quantity, $start_date, $end_date, $status, $discribe);
  $VIEW_NAME = "list.php";
} elseif (exist_param('btn_delete')) {
  $voucher_id = $_REQUEST['voucher_id'];
  voucher_delete($voucher_id);
  $items = voucher_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param('btn_edit')) {
  $voucher_id = $_REQUEST['voucher_id'];
  $voucher_info = voucher_select_by_id($voucher_id);
  extract($voucher_info);
  $items = voucher_select_all();
  $VIEW_NAME = "edit.php";
} elseif (exist_param('btn_update')) {
  $voucher_id = $_REQUEST['voucher_id'];
  $name = $_REQUEST['name'];
  $reduce = $_REQUEST['reduce'];
  $quantity = $_REQUEST['quantity'];
  $start_date = $_REQUEST['start_date'];
  $end_date = $_REQUEST['end_date'];
  $status = $_REQUEST['status'];
  $discribe = $_REQUEST['discribe'];
  voucher_update($name, $reduce, $quantity, $start_date, $end_date, $status, $discribe, $voucher_id);
  $items = voucher_select_all();
  $VIEW_NAME = "list.php";
} else {
  $VIEW_NAME = "add.php";
}

require "../layout.php";

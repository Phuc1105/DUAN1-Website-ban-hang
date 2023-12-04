<?php
require "../../global.php";
require "../../dao/voucher.php";
extract($_REQUEST);
$err =  "";
$err_name = "";
$err_reduce = "";
$err_quantity ="";
$err_start = "";
$err_end = "";
$err_status = "";
if (exist_param("btn_list")) {
  $items = voucher_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
  $name = $_REQUEST['name'];
  $reduce = $_REQUEST['reduce'];
  $quantity = $_REQUEST['quantity'];
  $start_date = $_REQUEST['start_date'];
  $end_date = $_REQUEST['end_date'];
  $discribe = $_REQUEST['discribe'];
  if(empty($name)){
    $err = "Please do not leave your voucher blank";
    $err_name = $err;
  }
  if(empty($reduce)){
    $err = "Please enter number";
    $err_reduce = $err;
  }
  if(empty($quantity)){
    $err = "Please enter number";
    $err_quantity = $err;
  }
  if ($start_date >= $end_date) {
    $err = "The start date must be before the end date";
    $err_start  = $err;
} 
  if(empty($quantity)){
    $err = "Please do not leave the quantity blank";
    $err_quantity = $err;
  }
  if(empty($start_date)){
    $err = "Please do not leave the start date blank";  
    $err_start = $err;
  }
  if(empty($end_date)){
    $err = "Please do not leave the end date blank";
    $err_end = $err;
  }
  if(empty($status)){
    $err = "Please select voucher status";
    $err_status = $err;
  }
  if(!empty($err) && !empty($status) && !empty($name) && !empty($quantity) && !empty($start_date) && !empty($end_date)  && $start_date < $end_date) {
  voucher_insert($name, $reduce, $quantity ,$start_date, $end_date, $status, $discribe);
  $VIEW_NAME = "list.php";
  }else{
    $VIEW_NAME = "add.php";  
  }
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

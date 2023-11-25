<?php
require "../../global.php";
require "../../dao/user.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
  $items = user_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
  $user_id = $_REQUEST['user_id'];
  $name = $_REQUEST['name'];
  $password = $_REQUEST['password'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $address = $_REQUEST['address'];
  $role = $_REQUEST['role'];
  $status = $_REQUEST['status'];
  $gender = $_REQUEST['gender'];
  if (isset($_FILES['image'])) {
    $image_array = $_FILES['image'];
    $image = $image_array['name'];
  } else {
    $image = "default.jpg";
  }
  user_insert($user_id, $password, $name, $email, $image, $status, $role, $phone, $gender);
  $VIEW_NAME = "list.php";
} elseif (exist_param('btn_update_status_hide')) {
  $user_id = $_REQUEST['user_id'];
  $status = "";
  user_update_status($status, $user_id);
  $items = user_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param('btn_update_status_display')) {
  $user_id = $_REQUEST['user_id'];
  $status = 1;
  user_update_status($status, $user_id);
  $items = user_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param("btn_edit")) {
  $user_id = $_REQUEST['user_id'];
  $user_info = user_select_by_id($user_id);
  extract($user_info);
  $items = user_select_all();
  $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_update")) {
  $user_id = $_REQUEST['user_id'];
  $name = $_REQUEST['name'];
  $password = $_REQUEST['password'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $address = $_REQUEST['address'];
  $role = $_REQUEST['role'];
  $status = $_REQUEST['status'];
  $gender = $_REQUEST['gender'];
  if (isset($_FILES['image'])) {
    $image_array = $_FILES['image'];
    $image = $image_array['name'];
  }
  user_update($password, $name, $email, $status, $role,$phone,$gender,$image,$user_id);
  $items = user_select_all();
  $VIEW_NAME = "list.php";
} else {
  $VIEW_NAME = "add.php";
}
require "../layout.php";

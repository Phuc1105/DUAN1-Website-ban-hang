<?php
require "../../global.php";
require "../../dao/user.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
  $items = user_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param('btn_delete')) {
  $user_id = $_REQUEST['user_id'];
  user_delete($user_id);
  $items = user_select_all();
  $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
  // if (!empty($_REQUEST['user_id']) || !empty($_REQUEST['name']) || !empty($_REQUEST['email']) || !empty($_REQUEST['password']) || !empty($_REQUEST['phone']) && !empty($_REQUEST['address'])) {
    $user_id = $_REQUEST['user_id'];
    $user_select_id = user_select_by_id($user_id);
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    $phone = preg_replace('/[^0-9]/', '', $phone);
    $role = $_REQUEST['role'];
    $status = $_REQUEST['status'];
    $gender = $_REQUEST['gender'];
    $image_array = $_FILES['image'];
    $image = $image_array['name'];
    if (!isset($image)) {
      $image = "default.jpg";
    }
    // if ((strlen($phone) == 10 && preg_match('/^0[0-9]{9}$/', $phone)) && strlen($password) >= 6 && filter_var($email, FILTER_VALIDATE_EMAIL) && empty($user_select_id)) {
      user_insert_admin($user_id, $password, $name, $email, $image, $status, $role, $phone, $gender, $address);
      $VIEW_NAME = "list.php";
  //   } else {
  //     if (strlen($phone) != 10 || !preg_match('/^0[0-9]{9}$/', $phone)) {
  //       $tb_phone = "Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại gồm 10 chữ số, bắt đầu bằng 0";
  //     }
  //     if (strlen($password) < 6) {
  //       $tb_password = "Mật khẩu phải có 6 chữ số trở lên";
  //     }
  //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //       $tb_email = "Địa chỉ email không hợp lệ";
  //     }
  //     if (!empty($user_select_id)) {
  //       $tb_user_id = "This account has been registered";
  //     }
  //     if (empty($_REQUEST['user_id'])) {
  //       $tb_user_id = "Vui lòng không để trống tên tài khoản của bạn";
  //     }
  //     if (empty($_REQUEST['password'])) {
  //       $tb_password = "Vui lòng không để trống mật khẩu của bạn";
  //     }
  //     if (empty($_REQUEST['name'])) {
  //       $tb_name = "Vui lòng không để trống tên của bạn";
  //     }
  //     if (empty($_REQUEST['phone'])) {
  //       $tb_phone = "Vui lòng không để trống điện thoại của bạn";
  //     }
  //     if (empty($_REQUEST['address'])) {
  //       $tb_address = "Vui lòng không để trống địa chỉ của bạn";
  //     }
  //     if (empty($_REQUEST['email'])) {
  //       $tb_email = "Vui lòng không để trống email của bạn";
  //     }
  //     $VIEW_NAME = "add.php";
  //   }
  // } else {
  //   if (empty($_REQUEST['user_id'])) {
  //     $tb_user_id = "Vui lòng không để trống tên tài khoản của bạn";
  //   }
  //   if (empty($_REQUEST['password'])) {
  //     $tb_password = "Vui lòng không để trống mật khẩu của bạn";
  //   }
  //   if (empty($_REQUEST['name'])) {
  //     $tb_name = "Vui lòng không để trống tên của bạn";
  //   }
  //   if (empty($_REQUEST['phone'])) {
  //     $tb_phone = "Vui lòng không để trống điện thoại của bạn";
  //   }
  //   if (empty($_REQUEST['address'])) {
  //     $tb_address = "Vui lòng không để trống địa chỉ của bạn";
  //   }
  //   if (empty($_REQUEST['email'])) {
  //     $tb_email = "Vui lòng không để trống email của bạn";
  //   }
  //   $VIEW_NAME = "add.php";
  // }
}elseif (exist_param('btn_update_status_hide')) {
  $user_id = $_REQUEST['user_id'];
  $status = "";
  user_update_status($status, $user_id);
  $items = user_select_all();
  $VIEW_NAME = "list.php";
}elseif (exist_param('btn_update_status_display')) {
  $user_id = $_REQUEST['user_id'];
  $status = 1;
  user_update_status($status, $user_id);
  $items = user_select_all();
  $VIEW_NAME = "list.php";
}elseif (exist_param("btn_edit")) {
  $user_id = $_REQUEST['user_id'];
  $user_info = user_select_by_id($user_id);
  extract($user_info);
  $items = user_select_all();
  $VIEW_NAME = "edit.php";
}elseif (exist_param("btn_update")) {
  // if (!empty($_REQUEST['name']) || !empty($_REQUEST['email']) || !empty($_REQUEST['password']) || !empty($_REQUEST['phone']) && !empty($_REQUEST['address'])) {
  $user_id = $_REQUEST['user_id'];
  $name = $_REQUEST['name'];
  $password = $_REQUEST['password'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $role = $_REQUEST['role'];
  $status = $_REQUEST['status'];
  $gender = $_REQUEST['gender'];
if (isset($_FILES['image'])) {
    $image_array = $_FILES['image'];
    $image = $image_array['name'];
  }else{
    $image = "default.jpg";
  }
// if ((strlen($phone) == 10 && preg_match('/^0[0-9]{9}$/', $phone)) && strlen($password) >= 6 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  user_update($password, $name, $email, $status, $role, $phone, $gender, $image, $user_id);
  $items = user_select_all();
  $VIEW_NAME = "list.php";
// } else {
//   if (strlen($phone) != 10 || !preg_match('/^0[0-9]{9}$/', $phone)) {
//     $tb_phone = "Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại gồm 10 chữ số, bắt đầu bằng 0";
//   }
//   if (strlen($password) < 6) {
//     $tb_password = "Mật khẩu phải có 6 chữ số trở lên";
//   }
//   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $tb_email = "Địa chỉ email không hợp lệ";
//   }
//   if (empty($_REQUEST['user_id'])) {
//     $tb_user_id = "Vui lòng không để trống tên tài khoản của bạn";
//   }
//   if (empty($_REQUEST['password'])) {
//     $tb_password = "Vui lòng không để trống mật khẩu của bạn";
//   }
//   if (empty($_REQUEST['name'])) {
//     $tb_name = "Xin đừng để trống tên của bạn";
//   }
//   if (empty($_REQUEST['phone'])) {
//     $tb_phone = "Xin đừng để trống điện thoại của bạn";
//   }
//   if (empty($_REQUEST['address'])) {
//     $tb_address = "Vui lòng không để trống địa chỉ của bạn";
//   }
//   if (empty($_REQUEST['email'])) {
//     $tb_email = "Vui lòng không để trống email của bạn";
//   }
//   $VIEW_NAME = "edit.php";
// }
//   }else{
//     if (empty($_REQUEST['password'])) {
//       $tb_password = "Vui lòng không để trống mật khẩu của bạn";
//     }
//     if (empty($_REQUEST['name'])) {
//       $tb_name = "Vui lòng không để tên của bạn";
//     }
//     if (empty($_REQUEST['phone'])) {
//       $tb_phone = "Vui lòng không để điện thoại của bạn";
//     }
//     if (empty($_REQUEST['address'])) {
//       $tb_address = "Vui lòng không để trống địa chỉ của bạn";
//     }
//     if (empty($_REQUEST['email'])) {
//       $tb_email = "Vui lòng không để trống email của bạn";
//     }
//     $VIEW_NAME = "edit.php"; 
//   }
} else {
  $VIEW_NAME = "add.php";
}
require "../layout.php";

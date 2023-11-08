<?php

require "../../global.php";
require "../../dao/loai.php";
require "../../dao/hang-hoa.php";
require "../../dao/khach-hang.php";
require "../../dao/binh-luan.php";
check_login();


$loai = count(loai_select_all());
$hang_hoa = count(hang_hoa_select_all());
$khach_hang = count(khach_hang_select_all());
$binh_luan = count(binh_luan_select_all());

$VIEW_NAME = "trang-chinh/home.php";

require "../layout.php";
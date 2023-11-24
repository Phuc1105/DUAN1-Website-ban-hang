<?php 
  require "../../global.php";
  require "../../dao/pdo.php";
  require "../../dao/user.php";
  extract($_REQUEST);
  if(exist_param("btn_list")){
    $items = user_select_all();
    $VIEW_NAME = "list.php";
  }elseif(exist_param("btn_add")){
    $VIEW_NAME = "add.php";
  }else{
    $VIEW_NAME = "add.php";
  }
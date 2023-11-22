<?php 
  require "../../global.php";
  require "../../dao/pdo.php";
  require "../../dao/catagogy.php";
  extract($_REQUEST);
  $thongbao_name = "";
  $thongbao_status = "";
  if(exist_param("btn_list")){
    $items = catagogy_select_all();
    $VIEW_NAME = "list.php";
  }elseif(exist_param("btn_insert")){
    $name = $_POST['name'];
    $val_name = catagogy_select_by_name($name);
    if(isset($name) && isset($status) && $val_name == ""){ 
        $status = $_POST['status'];
        catagogy_insert($name,$status);  
        $VIEW_NAME = "list.php";
    }else{
      if($val_name != ""){    
        $thongbao_name = "Đã có tên sản phẩm này!!";
      } 
      if($name == ""){    
        $thongbao_name = "Vui lòng nhập tên sản phẩm!!";
      } 
      if(!isset($_POST['status'])){  
        $thongbao_status = "Vui lòng chọn trạng thái!!  ";
      }
      $VIEW_NAME = "add.php";
    }
    
  }elseif(exist_param('btn_delete')){
    $catagogy_id = $_REQUEST['catagogy_id'];
    catagogy_delete($catagogy_id);
    $items = catagogy_select_all();
    $VIEW_NAME = "list.php";
}elseif(exist_param('btn_edit')){
  $catagogy_id = $_REQUEST['catagogy_id'];
  $loai_info = catagogy_select_by_id($catagogy_id);
  extract($loai_info);
  $items = catagogy_select_all();
  $VIEW_NAME = "edit.php";
}elseif(exist_param('btn_update')){
  if(isset($name) && $name != "" ){ 
  $catagogy_id = $_POST['catagogy_id'];
  $name =$_POST['name'];
  $status = $_POST['status'];
  catagogy_update($catagogy_id,$name,$status);
  $items = catagogy_select_all();
  $VIEW_NAME = "list.php";
}else{
  if($val_name != ""){    
    $thongbao_name = "Đã có tên sản phẩm này!!";
  } 
  if($name == ""){    
    $thongbao_name = "Vui lòng nhập tên sản phẩm!!";
  } 
  $VIEW_NAME = "edit.php";
}
}
  else{
    $VIEW_NAME = "add.php";
  }

  require "../layout.php";
?>
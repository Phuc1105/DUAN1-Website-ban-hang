<?php 
  require "../../global.php";
  require "../../dao/category.php";
  extract($_REQUEST);
  if(exist_param("btn_list")){
    $items = category_select_all();
    $VIEW_NAME = "list.php";
  }elseif(exist_param("btn_insert")){
    $name = $_POST['name'];
    $images = $_FILES['image'];
    $image = $images['name'];
    $status = $_POST['status'];
        category_insert($name,$image, $status);  
        $VIEW_NAME = "list.php";
  }elseif(exist_param('btn_delete')){
    $category_id = $_REQUEST['category_id'];
    category_delete($category_id);
    $items = category_select_all();
    $VIEW_NAME = "list.php";
}elseif(exist_param('btn_edit')){
  $category_id = $_REQUEST['category_id'];
  $loai_info = category_select_by_id($category_id);
  extract($loai_info);
  $items = category_select_all();
  $VIEW_NAME = "edit.php";
}elseif(exist_param('btn_update')){
  if(isset($name) && $name != "" ){ 
  $category_id = $_POST['category_id'];
  $name =$_POST['name'];
  $status = $_POST['status'];
  category_update($category_id,$name,$status);
  $items = category_select_all();
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
}elseif (exist_param('btn_update_status_hide')) {
  $category_id = $_REQUEST['category_id'];
  $status = "";
  category_update_status_hide($category_id);
  $items = category_select_all();
  $VIEW_NAME = "list.php";
}elseif(exist_param('btn_update_status_display')){
  $category_id = $_REQUEST['category_id'];
  $status = 1;
  category_update_status_display( $category_id);
  $items = category_select_all();
  $VIEW_NAME = "list.php";
} 
  else{
    $VIEW_NAME = "add.php";
  }

  require "../layout.php";
?>
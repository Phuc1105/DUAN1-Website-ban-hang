<?php
require "../../global.php";
require "../../dao/statistic.php";
extract($_REQUEST);
if(exist_param("chart",$_REQUEST)){
    $items=thong_ke_products();
    $VIEW_NAME="chart.php";
}else{
    $items=thong_ke_products();
    $VIEW_NAME="list.php";
}
require "../layout.php";    
?>
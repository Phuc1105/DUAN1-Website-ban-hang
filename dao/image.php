<?php
require_once 'pdo.php';
function image_variavable_insert($image_url,$product_id)
{
    $sql = "INSERT INTO image_variavables(image_url,product_id)  VALUES(?,?)";
    pdo_execute($sql,$image_url,$product_id);
}
?>
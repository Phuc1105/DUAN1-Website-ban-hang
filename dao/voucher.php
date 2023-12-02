<?php
require_once "pdo.php";
function voucher_select_all(){
    $sql = "SELECT * FROM vouchers ORDER BY voucher_id desc";
    return pdo_query($sql);
}
function voucher_insert($name, $reduce, $quantity ,$start_date, $end_date, $status, $discribe){
    $sql = "INSERT INTO vouchers(name, reduce, quantity ,start_date, end_date, status, 	discribe) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql,$name, $reduce, $quantity ,$start_date, $end_date, $status, $discribe);
}
function voucher_delete($voucher_id)
{
    $sql = "DELETE FROM vouchers WHERE voucher_id=?";
    if (is_array($voucher_id)) {
        foreach ($voucher_id as $voucher_id) {
            pdo_execute($sql, $voucher_id);
        }
    } else {
        pdo_execute($sql, $voucher_id);
    }
}
function voucher_select_by_id($voucher_id)    
{
    $sql = "SELECT * FROM vouchers WHERE voucher_id=?";
    return pdo_query_one($sql, $voucher_id);
}
function voucher_update($name, $reduce, $quantity, $start_date, $end_date, $status, $discribe, $voucher_id)
{
    $sql = "UPDATE vouchers SET name=?, reduce=?, quantity=?, start_date=?, end_date=?, status=?, discribe=? WHERE voucher_id= ? ";
    pdo_execute($sql,$name, $reduce, $quantity, $start_date, $end_date, $status, $discribe, $voucher_id);
}
?>
<?php
namespace App\model;
class voucher{
    function get_voucher_by_code($code){
        $xl = new xl_data();
        $sql = "SELECT * FROM voucher WHERE Code = ?";
        $result = $xl->readitem($sql);
        return $result;
    }
}
?>
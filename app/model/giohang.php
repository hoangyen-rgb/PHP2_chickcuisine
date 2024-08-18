<?php

namespace App\model;
class giohang {  
    // Kiểm tra sản phẩm có tồn tại trong giỏ hàng hay không
    function kiemtra($sp_id) {
        if (!isset($_SESSION['cart'])) {
            return -1;
        }
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['Id'] == $sp_id) {
                return $key;
            }
        }

        return -1;
    }
    function clear_cart_by_user_id($user_id) {
        $xl = new xl_data();
        $sql = "DELETE FROM cartdetail WHERE UserId = $user_id";
        $result = $xl->readitem($sql);
        return $result;
    }
}
?>
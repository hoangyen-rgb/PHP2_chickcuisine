<?php

namespace App\model;


class order {
    
    public function get_orders_by_user_id($userId) {
        $xl = new xl_data();
        $sql = "SELECT * FROM `order` WHERE UserId = $userId";
        $result = $xl->readitem($sql);
        return $result;
    }

    public function get_order_by_id($orderId) {
        $xl = new xl_data();
        $sql = "SELECT * FROM `order` WHERE Id = $orderId";
        $result = $xl->readitem($sql);
        return $result;
    }
    public function insert_order($total_price, $note, $date, $status, $user_id, $recipient_name, $recipient_phonenumber, $recipient_address) {
        $xl = new xl_data();
        $sql = "INSERT INTO `order` (TotalPrice, Note, Date, Status, UserId, RecipientName, RecipientPhoneNumber, RecipientAddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $xl->item($sql, [$total_price, $note, $date, $status, $user_id, $recipient_name, $recipient_phonenumber, $recipient_address]);
    }
    public function insert_order_detail($quantity, $price, $orderId, $productId) {
        $xl = new xl_data();
        $sql = "INSERT INTO orderdetail (Quantity, Price, OrderId, ProductId) VALUES ($quantity, $price, $orderId, $productId)";
        $result = $xl->readitem($sql);
        return $result;
    }

    public function get_order_detail_by_order_id($order_id) {
        $xl = new xl_data();
        $sql = "SELECT * FROM orderdetail WHERE OrderId = $order_id";
        $result = $xl->readitem($sql);
        return $result;
    }



    public function get_latest_order_id() {
        $xl = new xl_data();
        $result = $xl->item("SELECT MAX(Id) AS max_id FROM `order`");
        return $result[0]['max_id'];
    }
    public function get_order_by_status(...$status) {
        $xl = new xl_data();
        $statusPlaceholders = implode(', ', $status);
        $sql = "SELECT * FROM `order` WHERE Status IN ($statusPlaceholders) ORDER BY Date ASC";
        $result = $xl->readitem($sql);
        return $result;
    }
    function cancel_order($order_id) {
        $xl = new xl_data();
        $sql = "UPDATE `order` SET Status = 5 WHERE Id = $order_id";
        return $xl->readitem($sql);
    }


}
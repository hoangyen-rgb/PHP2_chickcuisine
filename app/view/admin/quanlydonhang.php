<style>
.container {
    width: 100%;
    height: calc(100vh - 85px);
    display: grid;
    grid-template-columns: 400px auto;
    gap: 20px;
}

.left {
    display: grid;
    grid-template-rows: 40px auto;
    gap: 20px;
    height: 100%;
    -ms-overflow-style: none;
    scrollbar-width: none;
    overflow-y: scroll;
}

.left .tab {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    /* display: grid;
        grid-template-columns: repeat(4, 1fr); */
    background-color: white;
    border-radius: 10px;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 4px var(--gray);
    overflow: hidden;

}

.left .tab>* {
    justify-self: center;
    padding: 2% 4%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.left .tab>.selected {
    background-color: var(--red);
    border-radius: 10px;
    color: white;
    font-size: 16px;
    box-shadow: 0px 0px 4px var(--gray);
    font-weight: 600;
}

.list-orders {
    -ms-overflow-style: none;
    scrollbar-width: none;
    overflow: hidden;
    overflow-y: scroll;
}

.list-orders .order {
    height: 100px;
    background-color: white;
    border-radius: 10px;
    border: 1px solid var(--gray);
    padding: 0px 20px;
    display: grid;
    grid-template-columns: 200px auto;
    row-gap: 10px;
    cursor: pointer;
    position: relative;
}

.list-orders>:not(:last-child) {
    margin-bottom: 20px;
}

.list-orders .order.selected .border {
    display: block !important;
    position: absolute;
    left: 0;
    top: 0;
    width: 10px;
    height: 100%;
    background: var(--red);
    border-radius: 10px 0px 0 10px;
    transition: 0.3s;
}

.list-orders .order .id {
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    align-self: self-end;
    font-size: 20px;
    font-weight: 400;
}

.list-orders .order .time {
    grid-column: 1 / 2;
    grid-row: 2 / 3;
    font-size: 16px;
    font-weight: 400;
}

.list-orders .order .price {
    grid-column: 2 / 3;
    grid-row: 1 / 3;
    font-size: 20px;
    font-weight: 600;
    align-self: center;
    justify-self: end;
}

.list-orders .order .price span {
    font-size: 16px;
    padding: 5px 15px;
    border-radius: 20px;
    color: white;
}

.right {
    display: grid;
    grid-template-rows: auto 35px;
    height: 100%;
    -ms-overflow-style: none;
    scrollbar-width: none;
    overflow-y: scroll;
}

.order-detail {
    background-color: white;
    border-radius: 10px;
    border: 1px solid var(--gray);
    padding: 20px;
    display: grid;
    grid-template-rows: 30px 60px auto;
    gap: 10px;
    height: fit-content;
}

.order-detail>.title {
    font-size: 20px;
    font-weight: 600;
}

.order-detail>.order-info {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
}

.order-detail>.order-info>* {
    padding: 0px 20px;
    border-left: 1px solid var(--gray);
}

.order-detail>.order-info>:is(:last-child) {
    border-right: 1px solid var(--gray);
}

.order-detail tr td:nth-child(2) {
    text-align: left;
    padding-left: 20px;
}

.product-list {
    width: 100%;
}

.product-list .product {
    height: 100px;
    display: grid;
    grid-template-columns: 100px 300px 1fr 1fr;
}

.product-list :not(tr:last-child) {
    border-bottom: 1px solid var(--gray);
}

.product-list .product img {
    width: 75px;
    height: 75px;
    border-radius: 5px;
}

.product-list .product td {
    font-size: 20px;
    font-weight: 400;
    text-align: center;
    align-self: center;
    border: none;
}

.right .buttons {
    width: 100%;
    display: flex;
    justify-content: end;
    align-items: center;
    margin-top: 20px;
}

.right .buttons>* {
    width: fit-content;
    min-width: 100px;
    padding: 0px 10px;
    height: 35px;
    background-color: var(--red);
    color: white;
    font-size: 16px;
    font-weight: 600;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    margin-left: 20px;
    cursor: pointer;
}

.right .order-total-price {
    width: 100%;
    font-size: 24px;
    font-weight: 600;
    text-align: right;
}
</style>
<?php 
$dh = new App\model\order();
$sps = new App\model\sanpham();
?>
<main>
    <div class="container">
        <div class="left">
            <div class="tab">
                <a href="quanlydonhang?tab=new" <?php if ($tab == "new") { ?>class="selected" <?php } ?>>Mới</a>
                <a href="quanlydonhang?tab=preparing" <?php if ($tab == "preparing") { ?>class="selected"
                    <?php } ?>>Đang
                    chuẩn bị</a>
                <a href="quanlydonhang?tab=delivering" <?php if ($tab == "delivering") { ?>class="selected"
                    <?php } ?>>Giao
                    hàng</a>
                <a href="quanlydonhang?tab=cancelled" <?php if ($tab == "cancelled") { ?>class="selected"
                    <?php } ?>>Hủy</a>
            </div>
            <div class="list-orders">
                <?php 
                        function calculate_time($sqlDateTime) {
                            $sqlTime = new DateTime($sqlDateTime);
                            $currentTime = new DateTime();

                            $interval = $currentTime->diff($sqlTime);
                            
                            if ($interval->days * 24 + $interval->h <= 1) {
                                return $interval->format('%h giờ %i phút trước');
                            } else {
                                return $sqlDateTime;
                            }
                        }
                    ?>
                <?php foreach($orders as $order) {extract($order); ?>
                <div class="order <?php if ($order_id == $Id) { ?>selected<?php } ?>"
                    onclick="ApplyFilters(new filter('order_id', '<?=$Id?>'))">
                    <div class="border" style="display: none;"></div>
                    <p class="id">Đơn hàng #<?=$Id?></p>
                    <p class="time">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5 15C3.3642 15 0 11.6358 0 7.5C0 3.3642 3.3642 0 7.5 0C11.6358 0 15 3.3642 15 7.5C15 11.6358 11.6352 15 7.5 15ZM7.5 1.2C4.026 1.2 1.2 4.026 1.2 7.5C1.2 10.974 4.026 13.8 7.5 13.8C10.974 13.8 13.8 10.974 13.8 7.5C13.8 4.026 10.9734 1.2 7.5 1.2ZM7.452 8.052H3.6C3.44087 8.052 3.28826 7.98879 3.17574 7.87626C3.06321 7.76374 3 7.61113 3 7.452C3 7.29287 3.06321 7.14026 3.17574 7.02774C3.28826 6.91521 3.44087 6.852 3.6 6.852H6.852V2.4C6.852 2.24087 6.91521 2.08826 7.02774 1.97574C7.14026 1.86321 7.29287 1.8 7.452 1.8C7.61113 1.8 7.76374 1.86321 7.87627 1.97574C7.98879 2.08826 8.052 2.24087 8.052 2.4V7.452C8.052 7.61113 7.98879 7.76374 7.87627 7.87626C7.76374 7.98879 7.61113 8.052 7.452 8.052Z"
                                fill="#BDBDBD" />
                        </svg>
                        <span>
                            <?=calculate_time($Date)?>
                        </span>
                    </p>
                    <p class="price">
                        <?php if ($tab != "delivering" && $tab != "cancelled") { ?>
                        <?= number_format($TotalPrice, 0, '.', '.') ?> vnđ
                        <?php } else if ($Status == 3) { ?>
                        <span class="delivering" style="background-color: #23AADA;">Đang giao hàng</span>
                        <?php } else if ($Status == 4) { ?>
                        <span class="delivered" style="background-color: #56D237;">Đã giao hàng</span>
                        <?php } else { ?>
                        <span class="cancelled" style="background-color: #C34439;">Đã hủy</span>
                        <?php } ?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="right">
            <div class="order-detail-box">
                <?php 
                if ($order_focus) {
                    foreach ($order_focus as $order) {
                        // extract();
                ?>
                <div class="order-detail">
                    <p class="title">Thông tin đơn hàng</p>
                    <div class="order-info">
                        <div class="time">
                            <p class="title">Ghi chú</p>
                            <p class="detail"><?=$order['Note']?></p>
                        </div>
                        <div class="address">
                            <p class="title">Địa chỉ</p>
                            <p class="detail"><?= $order['RecipientAddress']?></p>
                        </div>
                        <div class="phonenumber">
                            <p class="title">Số điện thoại</p>
                            <p class="detail"><?= $order['RecipientPhoneNumber']?></p>
                        </div>
                    </div>
                    <?php 
                    $order_detail = $dh->get_order_detail_by_order_id($order['Id']);
                    foreach ($order_detail as $product) {
                        $detail_product = $sps->get_product_by_id($product['ProductId']);
                        foreach ($detail_product as $product) {
                    ?>
                    <table class="product-list">
                        <tr class="product">
                            <td>
                                <img src="../../public/image/<?= $product['Image'] ?>" alt="">
                            </td>
                            <td>
                                <?= $product['Name'] ?>
                            </td>
                            <?php if (isset($product['Quantity'])) { ?>
                            <td>
                                <?= $product['Quantity'] ?>
                            </td>
                            <?php } ?>
                            <td>
                                <?= number_format($product['Price'], 0, '.', '.') ?> vnđ
                            </td>
                        </tr>
                    </table>
                    <?php 
                        }
                    }
                    ?>
                    <div class="order-total-price">Tổng tiền:
                        <?=number_format($order['TotalPrice'], 0, '.', '.') ?> vnđ</div>
                </div>
                <?php 
                if ($tab == "new") {
                ?>
                <div class="buttons">
                    <p onclick="location.href='quanlydonhang?xulydonhang&id=<?=$Id?>&status=5'">Hủy đơn</p>
                    <p onclick="location.href='quanlydonhang?xulydonhang&id=<?=$Id?>&status=2'">Nhận đơn</p>
                </div>
                <?php 
} else if ($tab == "preparing") {
?>
                <div class="buttons">
                    <p onclick="location.href='quanlydonhang?xulydonhang&id=<?=$Id?>&status=3'">Hoàn tất và giao</p>
                </div>
                <?php 
} else if ($tab == "delivering" && $order['Status'] == 3) {
?>
                <div class="buttons">
                    <p onclick="location.href='quanlydonhang?xulydonhang&id=<?=$Id?>&status=4'">Đã giao hàng</p>
                    <p onclick="location.href='quanlydonhang?xulydonhang&id=<?=$Id?>&status=5'">Khách không nhận hàng
                    </p>
                </div>
                <?php 
                }
                }
                }
                ?>

            </div>
        </div>

    </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
function filter(key, value) {
    this.key = key;
    this.value = value;
}

function ApplyFilters(...filters) {
    var current_url = new URL(window.location.href);
    var params = new URLSearchParams(current_url.search);
    var redirectToCategory = false;
    filters.forEach(filter => {
        if (filter.value === "") {
            return;
        }
        params.set(filter.key, filter.value);
    });
    if (redirectToCategory) {
        return;
    }
    var filter_array = [];
    if (params.get("tab") != null) {
        filter_array.push("tab=" + params.get("tab"));
    }
    if (params.get("order_id") != null) {
        filter_array.push("order_id=" + params.get("order_id"));
    }
    var url = "quanlydonhang?" + filter_array.join("&");


    window.location.href = url;
}

function set_order(id, status) {
    if (status == 4) {
        add_point(id);
    }
    $.post("quanlydonhang?xulidonhang", {
            order_id: id,
            status: status

        },
        function(data, textStatus, jqXHR) {

            window.location.reload();
        }
    );
}

function add_point(order_id) {

    $.post("quanlydonhang?xulidonhang", {
            order_id: order_id,
            point: true

        },
        function(data, textStatus, jqXHR) {}
    );
}
</script>
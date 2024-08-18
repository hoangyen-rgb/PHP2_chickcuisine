<!-- css trang -->
<style>
main {
    padding: 0px 100px;
}

.banner {
    position: relative;
}

.banner img {
    width: 100%;
    margin: auto;
}

.banner p {
    position: absolute;
    right: 6.5%;
    bottom: 20%;

    font-size: 20px;
    font-weight: 600;
    background-color: var(--red);
    padding: 10px 20px;
    border-radius: 10px;
    cursor: pointer;
    border: 1px solid rgba(0, 0, 0, 0);
}

.banner a {
    color: white;
}

.banner p:hover {
    border: 1px solid white;
    background-color: rgba(0, 0, 0, 0.4);
    transition: 0.3s;
}

.container {
    width: 100%;
    margin: 10px 0px;
}

.container-title {
    width: 100%;
    text-align: center;
    margin: 80px 0px 50px;
}

.container-title p:first-child {
    color: var(--red);
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 10px;
}

.container-title p:last-child {
    font-size: 20px;
    font-weight: 400;
}

.list-categories {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.category {
    background-color: var(--red);
    border-radius: 10px;
    height: 100px;
    width: 395px;
    display: grid;
    grid-template-columns: 100px auto;
    transition: 0.3s;
    overflow: hidden;
    position: relative;
    cursor: pointer;
    margin: 10px 0px;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 5px var(--gray);
}

.category>* {
    align-self: center;
    color: white;
}

.category .category-image {
    width: 100%;
    grid-column: 1 / 2;
    grid-row: 1 / 3;
    margin-left: -100px;
    background-color: white;
}

.category:hover .category-image {
    margin-left: 0px;
    transition: 0.3s;
}

.category .category-name {
    grid-column: 2 / 3;
    grid-row: 1 / 2;
    margin-top: 10px;
    margin-left: -60px;
    font-size: 26px;
    font-weight: 600;
}

.category:hover .category-name {
    margin-left: 10px;
    transition: 0.3s;
}

.category .category-product-count {
    grid-column: 2 / 3;
    grid-row: 2 / 3;
    margin-bottom: 10px;
    font-size: 22px;
    font-weight: 400;
    margin-left: -60px;
}

.category:hover .category-product-count {
    margin-left: 10px;
    transition: 0.3s;
}

.category svg {
    position: absolute;
    left: 10px;
}

.category:hover svg {
    display: none;
}

.view-more {
    text-align: right;
}

.view-more a * {
    display: inline-block;
    color: var(--red);
    font-size: 24px;
    font-weight: 600;
    vertical-align: middle;
    margin: 0px 5px;
}

@media screen and (max-width:720px) {
    main {
        padding: 0px 15px !important;
    }

    .banner {
        width: 100%;
    }

    .banner p {
        padding: 5px 10px !important;
        font-size: 15px;
        bottom: 15% !important;
    }


}
</style>
<?php
$sps = new App\model\sanpham();
$dmsp = new App\model\danhmuc();


$get_hot_products = $sps->get_hot_products(10);
$get_discount_products = $sps->get_discount_products(10);

$show_hot_products = $sps->showsp($get_hot_products);
$show_discount_products = $sps->showsp($get_discount_products);

$get_hot_categories =  $dmsp->get_hot_categories(6);
$show_hot_categories =  $dmsp->show_hot_categories($get_hot_categories);

?>

<div class="banner">
    <img src="../../public/image/banner.png" alt>
    <p><a href="<?=$SITE_URL?>/thucdon">Khám phá ngay !</a></p>
</div>
<main>

    <div class="container">
        <div class="container-title">
            <p>Món ăn nổi bậc</p>
            <p>Danh sách các món ăn được xem nhiều nhất</p>
        </div>
        <div class="list-products">

            <?=$show_hot_products?>
        </div>
        <div class="view-more">
            <a href="/thucdon">
                <p>Xem thêm</p>
                <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector"
                        d="M0 9.44109C0 8.65897 0.671578 8.02493 1.5 8.02493H19.0739L12.4998 2.47157C11.8824 1.95004 11.8297 1.05476 12.3821 0.471886C12.9345 -0.110989 13.8828 -0.160724 14.5002 0.360802L24.0001 8.38571C24.3181 8.65437 24.4999 9.0382 24.4999 9.44109C24.4999 9.844 24.3181 10.2278 24.0001 10.4965L14.5002 18.5214C13.8828 19.0429 12.9345 18.9933 12.3821 18.4104C11.8297 17.8275 11.8824 16.9321 12.4998 16.4106L19.0739 10.8573H1.5C0.671578 10.8573 0 10.2232 0 9.44109Z"
                        fill="#C34439" />
                </svg>
            </a>
            <div class="line"></div>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <p>Sự kiện giảm giá</p>
            <p>Đồng loạt giảm giá, lên tới 30%!</p>
        </div>
        <div class="list-products">
            <?=$show_discount_products?>
        </div>
        <div class="view-more">
            <a href="/thucdon">
                <p>Xem thêm</p>
                <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector"
                        d="M0 9.44109C0 8.65897 0.671578 8.02493 1.5 8.02493H19.0739L12.4998 2.47157C11.8824 1.95004 11.8297 1.05476 12.3821 0.471886C12.9345 -0.110989 13.8828 -0.160724 14.5002 0.360802L24.0001 8.38571C24.3181 8.65437 24.4999 9.0382 24.4999 9.44109C24.4999 9.844 24.3181 10.2278 24.0001 10.4965L14.5002 18.5214C13.8828 19.0429 12.9345 18.9933 12.3821 18.4104C11.8297 17.8275 11.8824 16.9321 12.4998 16.4106L19.0739 10.8573H1.5C0.671578 10.8573 0 10.2232 0 9.44109Z"
                        fill="#C34439" />
                </svg>
            </a>
            <div class="line"></div>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <p>Danh mục ưa thích</p>
            <p>Tập hợp các danh mục món ăn được đặt nhiều nhất</p>
        </div>
        <div class="list-categories">
            <?=$show_hot_categories?>
        </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
function linkto(url) {
    window.location.href = url;
}

// function copy(event, name, price, url) {
//     event.stopPropagation();
//     let text = "Mua ngay " + name + " chỉ với " + price.toLocaleString('vi-VN', {
//         useGrouping: true,
//         maximumFractionDigits: 0,
//     }) + " vnđ tại " + url + " !";

//     var hiddenTextarea = document.createElement('textarea');
//     hiddenTextarea.value = text;
//     document.body.appendChild(hiddenTextarea);

//     // Copy nội dung vào clipboard
//     hiddenTextarea.select();
//     document.execCommand('copy');
//     alert("Đã sao chép vào bảng nhớ tạm");

//     // Loại bỏ đối tượng textarea ẩn
//     document.body.removeChild(hiddenTextarea);
//     // navigator.clipboard.writeText(text).then(function() {
//     // }).catch(function(err) {
//     // console.error('Unable to write to clipboard', err);
//     // });
// }

// function addtocart(event, id) {
//     event.stopPropagation();
//     $.post("/gioang", {
//             cart_product_id: id,
//             cart_product_quantity: 1

//         },
//         // function(data, textStatus, jqXHR) {
//         //     $.post("<?=$SITE_URL?>/giohang/cart_count.php", {
//         //         },
//         //         function(data, textStatus, jqXHR) {
//         //             showNotification(data);
//         //         }
//         //     );
//         // }

//     );


// }

// function showNotification(quantity) {
//     var notification = document.getElementById('cart-count');
//     notification.innerHTML = "<p>" + quantity + "</p>";
//     notification.classList.add('show');
//     setTimeout(function() {
//         notification.classList.remove('show');
//     }, 3000);
//     var audio = new Audio('<?=$SOUND_DIR?>/ting.mp3');
//     audio.play();
// }
</script>
<!-- css trang -->
<style>
main {
    padding: 0px 100px;
}

.detail-product {
    display: grid;
    width: 100%;
    margin: 50px auto;
    grid-template-columns: 670px auto;
    gap: 10px 50px;
    height: fit-content;
}

.detail-product .product-image {
    grid-column: 1 / 2;
    grid-row: 1 / 9;
    width: 100%;
    border-radius: 10px;
    height: 450px;
}

.detail-product .product-path {
    color: #289FD3;
}

.detail-product .product-line {
    border-bottom: 1px solid var(--gray);
    width: 100%;
    height: 1px;
}

.detail-product .product-name {
    font-size: 30px;
    font-weight: bold;
}

.detail-product .product-description {
    color: var(--lightblack);
    line-height: 30px;
    text-align: justify;
}

.detail-product .product-rating {
    color: var(--yellow);
    font-size: 20px;
}

.detail-product .product-rating span {
    color: var(--lightblack);
}

.detail-product .product-original-price {

    text-decoration: line-through;
    color: var(--gray);
    font-size: 24px;
    font-weight: 600;
}

.detail-product .product-discount-price {
    color: var(--red);
    font-size: 36px;
    font-weight: 600;
}

.detail-product .product-buttons {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.detail-product .product-buttons>* {
    display: inline-block;
}

.detail-product .product-buttons .buttons-quantity {
    margin-right: 30%;
}

.detail-product .product-buttons .buttons-quantity>* {
    display: inline-flex;
    vertical-align: middle;
    font-size: 20px;
    font-weight: 600;
    width: 38px;
    height: 38px;
    border-radius: 5px;
    justify-content: center;
    align-items: center;
}

.detail-product .product-buttons .buttons-quantity>:not(:nth-child(2)) {
    background-color: var(--red);
    color: white;
}

.detail-product .product-buttons .button-addtocart {
    background-color: var(--red);
    padding: 5px 10px;
    border-radius: 5px;
    width: fit-content;
    align-items: center;
    height: 38px;
}

.detail-product .product-buttons .button-addtocart>* {
    display: inline-block;
    vertical-align: middle;
    color: white;
    font-size: 18px;
    font-weight: 600;
    margin: 0px 5px;
}

.title {
    text-align: center;
    color: var(--red);
    font-weight: 600;
    font-size: 32px;
    margin: 30px 0px;
}

.comment-box {
    width: 100%;
    margin: 50px auto;
    display: grid;
    grid-template-columns: 90% 10%;
    grid-template-rows: auto 60px;
    gap: 10px;
}

.column .comment {
    border-radius: 10px;
    border: 1px solid #BDBDBD;

    background: #FFF;

    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);

}

.comment-box .comments {
    width: 100%;
    overflow-y: scroll;
    height: 500px;
    justify-content: space-between;
}

.comment-box .column {
    column-count: 2;
    column-gap: 10px;
}

.comment-box .comments .comment {
    width: 1fr;
    height: fit-content;
    margin-bottom: 20px;
    background-color: white;
    border: 1px solid var(--gray);
    border-radius: 10px;
    overflow: hidden;
    padding: 5px;
    display: grid;
    grid-template-columns: 70px auto;
}

.comment-box .comments .comment .left {
    padding: 10px;
    grid-column: 1 / 2;
}

.comment .user-avatar {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    background-color: var(--lightgray);
}

.comment-box .comments .comment .right {
    padding: 10px;
    grid-column: 2 / 3;
}

.comment .user-name {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 5px;
}

.comment .time {
    color: var(--lightblack);
    font-weight: lighter;
}

.comment .rating {
    color: var(--yellow);
    font-size: 18px;
    margin: 10px 0px;
}

.comment .content {
    color: var(--lightblack);
    font-size: 15px;
}

.filter-box {
    width: 100%;
    text-align: center;
    padding: 10px 0px;
    position: relative;
}

.filter-box .filter-click {
    background-color: white;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 5px var(--gray);
    z-index: 2;
    transition: 0.3s;
    border-radius: 5px;
    padding: 2% 0;
    position: absolute;
    right: 0;
}

.filter-box label {
    cursor: pointer;
}

.filter-box input {
    margin-right: 10px;
}

.filter-box>div:first-child>* {
    display: inline-block;
    vertical-align: middle;
    margin-bottom: 20px;
}

.filter-box>div:first-child>p {
    font-size: 20px;
}

.filter-box>div:not(.filter-box>div:first-child) {
    width: 100%;
    text-align: left;
    padding-left: 20px;
    margin: 5px 0px;
}

.user-comment-form {
    width: 1fr;
    height: 40px;
    display: grid;
    gap: 20px;
    grid-template-columns: 200px auto;
    align-self: flex-end;
}

.user-comment-form .stars {
    align-self: center;
    display: flex;
    justify-content: space-between;
}

.user-comment-form .stars svg:hover path {
    cursor: pointer;
}

.user-comment-form .comment-form {
    width: 1fr;
    position: relative;
}

.user-comment-form .stars {
    align-self: left !important;
}

.user-comment-form .comment-form input {
    width: 100%;
    height: 40px;
    border: 1px solid var(--gray);
    border-radius: 10px;
    padding-left: 20px;
    outline: none;
}

.user-comment-form .comment-form input::placeholder {
    font-size: 13px;
    font-weight: 400;
}

.user-comment-form .comment-form svg {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translate(0px, -50%);
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


.stars .selected path {
    fill: var(--yellow);
}

@media screen and (max-width: 720px) {
    .user-comment-form {
        display: flex;
    }

    .discount-percentage {
        top: 60% !important;
    }

    .detail-product,
    .comment-box {
        display: flex;
        flex-direction: column;
        margin: 20px 0;
    }

    .filter-box {
        order: 1;
        /* width: 50%; */
        text-align: right;
    }

    .filter-click {
        width: 30% !important;
        margin: 0 !important;
    }

    .title {
        margin: 10px 0;
    }

    .comments {
        order: 2;

    }

    .product-image {
        order: 2;
    }

    .detail-product .product-image {
        height: 350px !important;
    }

    .column {
        column-count: 1 !important;
    }

    .product-name {
        order: 1;
    }

    .detail-product .product-description {
        order: 3;
        height: 100% !important;
    }

    .product-rating {
        order: 5;
    }

    .detail-product .product-price {
        order: 4;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 5px;
    }

    .detail-product .product-price>* {
        font-size: 32px !important;
    }

    .product-path {
        order: 1;
    }

    .product-line {
        order: 7;
    }

    .product-buttons {
        order: 8;
    }

    .button-addtocart {
        font-size: 15px;
        padding: 0% !important;
    }

    .button-addtocart>svg {
        display: none !important;
    }

    .user-comment-form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>
<?php
$sps = new App\model\sanpham();
$cmsp = new App\model\comment();
$dmsp = new App\model\danhmuc();

$similar_products = $sps->get_similar_products_by_product_id($_GET['id'], 8, 1);
// var_dump($similar_products);
$filter = isset($filter) ? ($filter > 5 ? null : $filter) : null;
$comments = $cmsp-> get_comment_by_product_id($_GET['id'], $filter);
$show_similar_products= $sps ->showsp($similar_products);


// extract($_REQUEST);
//     $comment_form = false;
//     // Xử lí hiện thị form bình luận
//     if (isset($_SESSION['LOGGED_IN_USER_ID'])) {
//         // if (bought_product($_SESSION['LOGGED_IN_USER_ID'],$_GET['id'] ) && !commented($_SESSION['LOGGED_IN_USER_ID'],$_GET['id'] )) {
//         //     $comment_form = true;
//         // }
//     }

?>

<main>
    <div class="detail-product">
        <?php extract($sp[0]);
        // var_dump($sp[0]);
        ?>
        <img class="product-image" src="../../public/image/<?=$Image?>" alt="">
        <div class="product-path">
            <?php $category_product = $dmsp -> get_category_by_product_id($Id) ;?>
            <?=$category_product ? $category_product[0]['Name'] : "Chưa phân loại"?> > <?=$Name?>
        </div>
        <div class="product-line"></div>
        <div class="product-name"><?=$Name?></div>
        <div class="product-description">
            <?=$Description?>
        </div>
        <div class="product-rating">
            <?=str_repeat('
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                </svg>
                ', ceil($Rating))?>
            <span>


            </span>
            <span>| <?=$Views?> Lượt xem</span>
        </div>
        <div class="product-price">
            <?php if($Discount > 0) {?>
            <p class="product-original-price"><?=number_format($Price, 0, '.', '.')?> vnđ</p>
            <p class="product-discount-price"><?=number_format($Price * (100 - $Discount) / 100, 0, '.', '.')?> vnđ</p>
            <?php } else {?>
            <p class="product-discount-price"><?=number_format($Price, 0, '.', '.')?> vnđ</p>
            <?php } ?>
        </div>
        <div class="product-buttons">
            <div class="buttons-quantity">
                <button onclick="changeQuantity(-1)" id="decrease-button">-</button>
                <p class="product-quantity" id="product-quantity">1</p>
                <button onclick="changeQuantity(1)">+</button>
            </div>
            <button class="button-addtocart">
                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.851191 0C0.381095 0 0 0.368234 0 0.822466C0 1.2767 0.381095 1.64493 0.851191 1.64493H1.26947C1.6495 1.64493 1.9835 1.88836 2.0879 2.24145L4.78713 11.3699C5.10033 12.4292 6.10232 13.1595 7.24244 13.1595H15.0201C16.0642 13.1595 17.0032 12.5452 17.391 11.6084L19.9008 5.54571C20.348 4.46522 19.5244 3.28986 18.3202 3.28986H4.16842L3.72478 1.78955C3.41157 0.7303 2.40958 0 1.26947 0H0.851191Z"
                        fill="white" />
                    <path
                        d="M7.66075 19.7391C9.07105 19.7391 10.2143 18.6344 10.2143 17.2717C10.2143 15.9091 9.07105 14.8043 7.66075 14.8043C6.25045 14.8043 5.10718 15.9091 5.10718 17.2717C5.10718 18.6344 6.25045 19.7391 7.66075 19.7391Z"
                        fill="white" />
                    <path
                        d="M14.4702 19.7391C15.8805 19.7391 17.0238 18.6344 17.0238 17.2717C17.0238 15.9091 15.8805 14.8043 14.4702 14.8043C13.0599 14.8043 11.9166 15.9091 11.9166 17.2717C11.9166 18.6344 13.0599 19.7391 14.4702 19.7391Z"
                        fill="white" />
                </svg>
                <p>Thêm vào giỏ hàng</p>
            </button>
        </div>
    </div>

    <div class="line"></div>
    <div class="title">Đánh giá món ăn</div>
    <div class="comment-box">
        <?php if($comments) {?>
        <div class="comments " style="grid-column: 1 / 2; grid-row: 1 / 2;">
            <div class="column">
                <?php foreach($comments as $comment) { extract($comment); ?>
                <div class="comment ">

                    <div class="left">
                        <img class="user-avatar" src="../../public/image/<?=$Avatar?>" alt="">
                    </div>
                    <div class="right">
                        <p class="user-name"><?=$Name?></p>
                        <p class="time"><?=$Time?></p>
                        <p class="rating">
                            <?=str_repeat('
                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                                        </svg>
                                        ', ceil($Rating))?>
                        </p>
                        <p class="content">"<?=nl2br($Content);?>"</p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <form class="filter-box" style="grid-column: 2 / 3; grid-row: 1 / 2;" method="get"
            action="<?=$_SERVER['PHP_SELF'];?>">
            <div>
                <p>Lọc</p>
                <svg width="20" height="16" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.5 17C19.3284 17 20 17.6716 20 18.5C20 19.3284 19.3284 20 18.5 20H9.5C8.67157 20 8 19.3284 8 18.5C8 17.6716 8.67157 17 9.5 17H18.5ZM22.5 8.5C23.3284 8.5 24 9.17157 24 10C24 10.8284 23.3284 11.5 22.5 11.5H5.5C4.67157 11.5 4 10.8284 4 10C4 9.17157 4.67157 8.5 5.5 8.5H22.5ZM26.5 0C27.3284 0 28 0.671573 28 1.5C28 2.32843 27.3284 3 26.5 3H1.5C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0H26.5Z"
                        fill="#4E4E4E" />
                </svg>
            </div>
            <div class="filter-click ">
                <div>

                    <label for="filter-all"><input type="radio" name="filter" id="filter-all">Tất cả</label>
                </div>
                <div>

                    <label for="filter-5"><input type="radio" name="filter" id="filter-5">5
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                                fill="#FFB11B" />
                        </svg>
                    </label>
                </div>
                <div>

                    <label for="filter-4"><input type="radio" name="filter" id="filter-4">4
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                                fill="#FFB11B" />
                        </svg>
                    </label>
                </div>
                <div>
                    <label for="filter-3"><input type="radio" name="filter" id="filter-3">3
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                                fill="#FFB11B" />
                        </svg>
                    </label>
                </div>

                <div>

                    <label for="filter-2"><input type="radio" name="filter" id="filter-2">2
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                                fill="#FFB11B" />
                        </svg>
                    </label>
                </div>

                <div>

                    <label for="filter-1"><input type="radio" name="filter" id="filter-1">1
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                                fill="#FFB11B" />
                        </svg>
                    </label>
                </div>
            </div>
    </div>
    </form>
    <form class="user-comment-form" style="grid-column: 1 / 2; grid-row: 2 / 3;" data-rate="0">
        <div class="stars">
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
        </div>
        <div class="comment-form">
            <input type="text" placeholder="Bạn chỉ được bình luận (1 lần) sau khi mua hàng!" style="cursor:not-allowed"
                ; class="content">
            <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                style="cursor: pointer" class="comment-button">
                <path
                    d="M1.36708 15.92L18.4068 8.86742C19.1977 8.53743 19.1977 7.46257 18.4068 7.13257L1.36708 0.0800295C0.722601 -0.193398 0.00976486 0.268601 0.00976486 0.938027L0 5.28458C0 5.75601 0.3613 6.16144 0.849544 6.21801L14.6473 8L0.849544 9.77256C0.3613 9.83856 0 10.244 0 10.7154L0.00976486 15.062C0.00976486 15.7314 0.722601 16.1934 1.36708 15.92Z"
                    fill="#C34439" />
            </svg>

        </div>
    </form>
    <?php } else {?>
    <form class="filter-box" style="grid-column: 2 / 3; grid-row: 1 / 2;" method="get"
        action="<?=$_SERVER['PHP_SELF'];?>">
        <div>
            <p>Lọc</p>
            <svg width="20" height="16" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.5 17C19.3284 17 20 17.6716 20 18.5C20 19.3284 19.3284 20 18.5 20H9.5C8.67157 20 8 19.3284 8 18.5C8 17.6716 8.67157 17 9.5 17H18.5ZM22.5 8.5C23.3284 8.5 24 9.17157 24 10C24 10.8284 23.3284 11.5 22.5 11.5H5.5C4.67157 11.5 4 10.8284 4 10C4 9.17157 4.67157 8.5 5.5 8.5H22.5ZM26.5 0C27.3284 0 28 0.671573 28 1.5C28 2.32843 27.3284 3 26.5 3H1.5C0.671573 3 0 2.32843 0 1.5C0 0.671573 0.671573 0 1.5 0H26.5Z"
                    fill="#4E4E4E" />
            </svg>

        </div>
        <div>

            <label for="filter-all"><input type="radio" name="filter" id="filter-all">Tất cả</label>
        </div>
        <div>

            <label for="filter-5"><input type="radio" name="filter" id="filter-5">5
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                        fill="#FFB11B" />
                </svg>
            </label>
        </div>

        <div>

            <label for="filter-4"><input type="radio" name="filter" id="filter-4">4
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                        fill="#FFB11B" />
                </svg>
            </label>
        </div>

        <div>

            <label for="filter-3"><input type="radio" name="filter" id="filter-3">3
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                        fill="#FFB11B" />
                </svg>
            </label>
        </div>

        <div>

            <label for="filter-2"><input type="radio" name="filter" id="filter-2">2
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                        fill="#FFB11B" />
                </svg>
            </label>
        </div>

        <div>

            <label for="filter-1"><input type="radio" name="filter" id="filter-1">1
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                        fill="#FFB11B" />
                </svg>
            </label>
        </div>
    </form>
    <form class="user-comment-form" style="grid-column: 1 / 2; grid-row: 2 / 3;" data-rate="0">
        <div class="stars">
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
            <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
                    fill="#BDBDBD" />
            </svg>
        </div>
        <div class="comment-form">
            <!-- -->
            <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                style="cursor: pointer" class="comment-button">
                <path
                    d="M1.36708 15.92L18.4068 8.86742C19.1977 8.53743 19.1977 7.46257 18.4068 7.13257L1.36708 0.0800295C0.722601 -0.193398 0.00976486 0.268601 0.00976486 0.938027L0 5.28458C0 5.75601 0.3613 6.16144 0.849544 6.21801L14.6473 8L0.849544 9.77256C0.3613 9.83856 0 10.244 0 10.7154L0.00976486 15.062C0.00976486 15.7314 0.722601 16.1934 1.36708 15.92Z"
                    fill="#C34439" />
            </svg>

        </div>
    </form>
    <div class="empty-comment-box">
        <p style="text-align: center;">Không có đánh giá</p>
    </div>
    <?php } ?>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="container-title">
            <p>Món ăn tương tự</p>
            <p>Danh sách các món ăn cùng loại</p>
        </div>
        <div class="list-products">
            <?=$show_similar_products?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
    var product_quantity = Number.parseInt(document.getElementById("product-quantity").innerText);

    function changeQuantity(sl) {
        product_quantity += quantity;
        if (product_quantity <= 1) {
            product_quantity = 1;
            document.getElementById("decrease-button").setAttribute("opacity", "0.5");
        } else {
            document.getElementById("decrease-button").setAttribute("opacity", "1");
        }
        document.getElementById("product-quantity").innerText = product_quantity;
    }

    // $(".button-addtocart").click(function() {
    //     var quantity = Number.parseInt(document.getElementById("product-quantity").innerText);
    //     var price = Number.parseInt(document.getElementsByClassName("product-discount-price")[0].innerText
    //         .replace(/[^\d]/g, ""));
    //     $.post("/giohang/index.php", {
    //             cart_product_id: <?=$_GET['id']?>,
    //             cart_product_quantity: quantity

    //         },
    //         function(data, textStatus, jqXHR) {
    //             $.post("/giohang/cart_count.php", {

    //                 },
    //                 function(data, textStatus, jqXHR) {
    //                     showNotification(data);
    //                 }
    //             );
    //         }
    //     );

    // });


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
    //     $.post("<?=$SITE_URL?>/giohang/index.php", {
    //             cart_product_id: id,
    //             cart_product_quantity: 1

    //         },
    //         function(data, textStatus, jqXHR) {
    //             $.post("<?=$SITE_URL?>/giohang/cart_count.php", {

    //                 },
    //                 function(data, textStatus, jqXHR) {
    //                     showNotification(data);
    //                 }
    //             );
    //         }

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
    // if (document.querySelector(".stars") && !document.querySelector(".comment-form").querySelector(".content")
    //     .readOnly) {
    //     document.querySelector(".stars").querySelectorAll("svg").forEach(function(element) {
    //         element.addEventListener("click", function() {
    //             let list = document.querySelector(".stars").querySelectorAll("svg");
    //             list.forEach(function(element) {
    //                 element.classList.remove("selected");
    //             });



    //             for (let i = 0; i < list.length; i++) {
    //                 if (list[i] === element) {
    //                     document.querySelector(".user-comment-form").setAttribute("data-rate", i + 1);
    //                     list[i].classList.add("selected");
    //                     break;
    //                 } else {
    //                     list[i].classList.add("selected");
    //                 }
    //             }
    //         });
    //     });
    // }
    // let
    //     comment_button = document.querySelector(".comment-button");
    // if (comment_button != null &&
    //     !document.querySelector(".comment-form").querySelector(".content").readOnly) {
    //     comment_button.addEventListener("click", function() {
    //         let
    //             rate = document.querySelector(".user-comment-form").getAttribute("data-rate");
    //         let
    //             content = document.querySelector(".comment-form").querySelector(".content").value;
    //         let
    //             product_id = document.querySelector(".detail-product").getAttribute("data-id");
    //         $.post("<?=$SITE_URL?>/monan/comment_handler.php", {
    //             content: content,
    //             rating: rate,
    //             product_id: product_id
    //         }, function(data, textStatus, jqXHR) {
    //             window.location.reload();
    //         });
    //     });
    // }
    // document.querySelector(".filter-box").querySelectorAll("label").forEach(function(element) {
    //     element.addEventListener("click", function() {
    //         let
    //             labelIndex = Array.from(document.querySelector(".filter-box").querySelectorAll("label"))
    //             .indexOf(element);
    //         ApplyFilters(new filter('filter', 6 - labelIndex));
    //     });
    // });

    // function filter(key,
    //     value) {
    //     this.key = key;
    //     this.value = value;
    // }

    // function ApplyFilters(...filters) {
    //     var current_url = new
    //     URL(window.location.href);
    //     var params = new URLSearchParams(current_url.search);
    //     var
    //         redirectToCategory = false;
    //     filters.forEach(filter => {
    //         if (filter.value === "") {
    //             return;
    //         }
    //         params.set(filter.key, filter.value);
    //     });
    //     var filter_array = [];
    //     if (params.get("id") != null) {
    //         filter_array.push("id=" + params.get("id"));
    //     }
    //     if (params.get("filter") != null) {
    //         filter_array.push("filter=" + params.get("filter"));
    //     }
    //     var url = "<?=$SITE_URL?>/monan/?" + filter_array.join("&");


    //     window.location.href = url;
    // }
    </script>
</main>
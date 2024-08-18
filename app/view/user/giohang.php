<!-- css trang -->
<style>
main {
    padding: 0px 100px;
    color: #4E4E4E;
}

main .container {
    width: 100%;
    margin: 50px auto;
    min-height: 500px;
    display: grid;
    grid-template-columns: 70% 30%;
    gap: 30px;
}

main .menucon {
    grid-column: 1 / 3;
    height: 70px;
}

.menucon ul {
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 0;
    justify-items: center;
}

.menucon ul>li svg {
    margin-right: 10px;
}

.menucon ul>li {
    align-self: center;
    justify-self: center;
    display: flex;
    align-items: center;
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    padding: 10px 15px;
}

.menucon ul li.selected {
    background-color: var(--red);
    border-radius: 5px;
}

.menucon ul li.selected svg path {
    fill: white;
}

.menucon ul li.selected a {
    color: white;
}

.menucon ul li a {
    text-decoration: none;
    color: #4E4E4E;
}

main .cart,
.menucon,
.checkout {
    height: fit-content;
    border: 1px solid #BDBDBD;
    background: #FFF;
    border-radius: 10px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}

main .cart,
main .checkout,
main .cart table {
    width: 100%;
}

main .cart table {
    border-collapse: collapse;
}

main .cart table tr:first-child td {
    font-size: 20px;
    font-weight: 600;
}

.product .product-image {
    height: auto;
}

main .cart table tr:not(:first-child) td {
    padding: 2% 0;
}

main .cart table td,
th {
    text-align: center;
    padding: 2% 0;
}

tr:not(:last-child) {
    background-image: linear-gradient(to right, transparent calc(50% - 48%), #BDBDBD calc(50% - 48%), #BDBDBD calc(50% + 47%), transparent calc(50% + 47%));
    background-position: bottom;
    background-size: 100% 1px;
    background-repeat: no-repeat;
    padding-bottom: 10px;
    /* Khoảng cách ngắn hơn, ví dụ 10px */
}

main .cart table td:nth-child(1) {
    width: 12%;
}

.cart table td:nth-child(2) {
    width: 31%;
}

.cart table td:nth-child(3) {
    width: 21%;
}

.cart table td:nth-child(4) {
    width: 21%;
}

.cart table td:nth-child(5) {
    width: 14%;
}

main .cart table td:nth-child(5) div {
    background-color: var(--red);
    width: 35px;
    height: 35px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}

main .cart .product-image {
    padding: 0 2%;
}

main .cart .product-image img {
    width: 75px;
    height: 75px;
    border-radius: 5px;
    border: 1px solid var(--gray);


}

main .product-buttons-cart>*:not(:nth-child(2)) {
    background-color: var(--red);
    border-radius: 5px;
}

main .product-buttons-cart>* {
    margin: auto 0px;
    font-size: 20px;
    cursor: pointer;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    text-align: center;
    color: white;
    font-weight: 600;
}

main .product-quantity {
    margin: 0px 5px;
    color: var(--lightblack);
    background-color: white;
    border: unset;
}

main .product-name {
    font-size: 20px !important;
    font-weight: 400 !important;
    text-align: left !important;
}

main .product-original-price {
    text-decoration: line-through;
    color: var(--gray);
    font-size: 15px;
}

main .product-price {
    font-weight: 400;
    font-size: 20px;
}

main .checkout {
    height: fit-content;
    border-radius: 10px;
    overflow: hidden;
    font-size: 20px;
    font-weight: 400;
}

main .checkout-title {
    width: 100%;
    background-color: var(--red);
    padding: 10px 0px;
    text-align: center;
    font-size: 20px;
    font-weight: 600;
    color: white;
}

main .cart-information {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding: 10px 20px;
    position: relative;
}

main .cart-information>* {
    margin: 10px 0px;
}

main .cart-information .right {
    text-align: right;
    font-weight: 600;
}

main .cart-information .voucher-form {
    grid-column: 1 / 3;
    display: grid;
    grid-template-columns: auto 30px;
    gap: 10px;
}

main .cart-information .voucher-form button {
    width: 30px;
    height: 30px;
    border-radius: 5px;
    border: 1px solid var(--gray);
    display: flex;
    justify-content: center;
    align-items: center;
}

main .cart-information .voucher-form input {
    width: 1fr;
    height: 30px;
    border: 1px solid var(--gray);
    border-radius: 5px;
    outline: none;
    padding: 0px 10px;
}

main .checkout-buttons {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

main .checkout-buttons .note-button,
main .checkout-buttons .pay-button {
    width: 80%;
    justify-self: center;
    height: 40px;
    border: unset;
    background-color: var(--red);
    color: white;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    margin: 10px 0px;
}

main .checkout-buttons .note-button {
    background-color: unset;
    border: 2px solid var(--red);
    display: flex;
    align-items: center;
    padding: 0px 10px;
    justify-content: space-evenly;
}

main .checkout-buttons .note-button>* {
    color: var(--red);
}

main .checkout #otherAddress {
    margin: 10px 0px 10px 10px;

}

main .orderer-information,
main .recipient-information {
    display: grid;
    padding: 10px 20px;
    transition: 0.3s;
    overflow: hidden !important;
    height: fit-content;
}

main .orderer-information label,
main .recipient-information label {
    font-size: 16px;
    font-weight: 600;
    margin: 5px 0px;
}

main .orderer-information input,
main .recipient-information input {
    border-radius: 5px;
    outline: unset;
    border: 1px solid var(--gray);
    box-shadow: 1px 1px 1px var(--gray) inset;
    height: 30px;
    padding-left: 10px;
    margin-bottom: 10px;
}

main .hidden {
    display: none;
}

main .remove-button {
    cursor: pointer;
}

main .empty-cart-message {
    margin: 50px 0px;
    text-align: center;
    height: fit-content;
}

main .empty-cart-message>* {
    margin: 20px 0px;
}

main .empty-cart-message img {
    width: 120px;
}

main .empty-cart-message p {
    color: var(--lightblack);
    font-size: 35px;
    font-weight: 600;
}

main .empty-cart-message p span {
    color: var(--red);
}

main .empty-cart-message a {
    padding: 10px 30px;
    background-color: var(--red);
    color: white;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
}

.vouchers-list {
    position: absolute;
    right: 20px;
    top: 200px;
    width: calc(100% - 40px);
    max-height: 200px;
    overflow-y: scroll;
    background-color: white;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 2px var(--gray);
    border-radius: 10px;
    padding: 10px;
}

.vouchers-list-button {
    border-radius: 5px;
    border: 1px solid var(--gray);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.vouchers-list> :not(:last-child) {
    border-bottom: 1px solid var(--gray);
    height: 50px;
}

.vouchers-list .voucher {
    padding: 5px 0px 5px 10px;
    display: grid;
    grid-template-columns: 120px auto;
    grid-template-rows: auto 20px;
    cursor: pointer;
}

.vouchers-list .voucher .code {
    font-weight: 600;
    grid-column: 1 / 2;
    grid-row: 1 / 2;
}

.vouchers-list .voucher .discount {
    text-align: right;
    grid-column: 2 / 3;
    grid-row: 1 / 2;

}

.vouchers-list .voucher .max-discount {
    text-align: right;
    grid-column: 2 / 3;
    grid-row: 2 / 3;
    font-weight: 400;
}

.popup-background {
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.6);
    position: fixed;
    z-index: 100;
    top: 0px;
    left: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.popup-form .title {
    color: var(--lightblack);
    font-weight: 600;
}

.popup-form {
    background-color: white;
    border: 1px solid var(--gray);
    border-radius: 10px;
    width: 500px;
    height: fit-content;
    padding: 15px;
}

.popup-form> :not(:last-child) {
    margin-bottom: 15px;
}

.popup-form input {
    width: 100%;
    height: 30px;
    border: 1px solid var(--gray);
    border-radius: 5px;
    outline: unset;
    padding-left: 15px;
}

.popup-form .buttons {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 30px;
}

.popup-form .buttons div {
    background-color: var(--red);
    width: 100px;
    color: white;
    border: unset;
    height: 100%;
    border-radius: 5px;
    font-weight: 600;
    margin-left: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
</style>
<style>
.message {
    width: 350px;
    background-color: white;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 5px var(--gray);
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    position: absolute;
    top: 10px;
    left: calc(50% - 175px);
}

.message p {
    margin-top: 20px;
    color: var(--lightblack);
    font-weight: 600;
}

@media (max-width: 768px) {
    main {
        padding: 0px 25px;
    }

    main .container {
        grid-template-columns: 100%;
    }

    main .menucon {
        grid-column: auto;
    }

    main .cart table td:nth-child(1) {
        width: 28%;
    }

    .cart table td:nth-child(2) {
        width: 25%;
    }

    main .menucon ul {
        padding: 0 2%;
    }

    main .menucon ul li[data-name="giohang"] a {
        color: white;
    }

    main .menucon ul li[data-name="giohang"] {
        width: 100%;
        background-color: var(--red);

        border-radius: 5px;
    }

    main .menucon ul li[data-name="giohang"] svg {
        display: none;
    }

    main .menucon ul li[data-name="khomagiamgia"],
    main .menucon ul li[data-name="sodiachi"] {
        display: none;
    }

    main .menucon ul>li[data-name="giohang"] {
        justify-self: center;
    }

    .product-image img {
        width: 90%;
    }

    .product-name {
        margin-left: 5%;
    }

    .cart table td:nth-child(2) {
        width: 5%;
    }
}
</style>
<main>
    <?php if($_SESSION['message']) { $_SESSION['message'] = false;?>
    <div class="message jumpAnimate">
        <svg width="50" height="50" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M45 0C20.19 0 0 20.19 0 45C0 69.81 20.19 90 45 90C69.81 90 90 69.81 90 45C90 20.19 69.81 0 45 0ZM45 86C22.39 86 4 67.61 4 45C4 22.39 22.39 4 45 4C67.61 4 86 22.39 86 45C86 67.61 67.61 86 45 86ZM67.41 29.59C68.19 30.37 68.19 31.64 67.41 32.42L39.41 60.42C39.02 60.8 38.51 61 38 61C37.49 61 36.98 60.8 36.59 60.41L22.59 46.41C21.81 45.63 21.81 44.36 22.59 43.58C23.37 42.8 24.64 42.8 25.42 43.58L38 56.17L64.59 29.58C65.37 28.8 66.63 28.8 67.41 29.59Z"
                fill="#56D237" />
        </svg>
        <p>Đơn hàng của bạn đã được gửi đi!</p>
    </div>
    <?php } ?>
    <?php if($_SESSION['cart']) { ?>
    <div class="container">
        <div class="menucon">
            <ul>
                <li data-name="giohang">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5 20C6.11875 20 5.0125 21.1187 5.0125 22.5C5.0125 23.8813 6.11875 25 7.5 25C8.88125 25 10 23.8813 10 22.5C10 21.1187 8.88125 20 7.5 20ZM0 0V2.5H2.5L6.99375 11.9812L5.30625 15.0437C5.1125 15.4062 5 15.8125 5 16.25C5 17.6313 6.11875 18.75 7.5 18.75H22.5V16.25H8.03125C7.85625 16.25 7.71875 16.1125 7.71875 15.9375C7.71875 15.8813 7.73125 15.8313 7.75625 15.7875L8.875 13.75H18.1875C19.125 13.75 19.9437 13.2313 20.375 12.4625L24.8438 4.35C24.9438 4.175 25 3.96875 25 3.75C25 3.41848 24.8683 3.10054 24.6339 2.86612C24.3995 2.6317 24.0815 2.5 23.75 2.5H5.26875L4.08125 0H0ZM20 20C18.6187 20 17.5125 21.1187 17.5125 22.5C17.5125 23.8813 18.6187 25 20 25C21.3813 25 22.5 23.8813 22.5 22.5C22.5 21.1187 21.3813 20 20 20Z"
                            fill="#4E4E4E" />
                    </svg>
                    <a href="/giohang">Giỏ hàng</a>
                </li>
                <li data-name="khomagiamgia" onclick="alert('tính năng đang phát triễn');">
                    <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.7903 0H1.20968C0.540323 0 0 0.540323 0 1.20968V4.25C0 4.91936 0.540323 5.45968 1.20968 5.45968C2.37097 5.45968 3.31452 6.40323 3.31452 7.56452C3.31452 8.72581 2.37097 9.66936 1.20968 9.66936C0.540323 9.66936 0 10.2097 0 10.879V13.9194C0 14.5887 0.540323 15.129 1.20968 15.129H23.7903C24.4597 15.129 25 14.5887 25 13.9194V10.879C25 10.2097 24.4597 9.66936 23.7903 9.66936C22.629 9.66936 21.6855 8.72581 21.6855 7.56452C21.6855 6.40323 22.629 5.45968 23.7903 5.45968C24.4597 5.45968 25 4.91936 25 4.25V1.20968C25 0.540323 24.4597 0 23.7903 0ZM17.7419 10.3871C17.7419 11.0484 17.2016 11.5968 16.5323 11.5968C15.8629 11.5968 15.3226 11.0484 15.3226 10.3871V4.74194C15.3226 4.08065 15.8629 3.53226 16.5323 3.53226C17.2016 3.53226 17.7419 4.08065 17.7419 4.74194V10.3871Z"
                            fill="#4E4E4E" />
                    </svg>

                    <a href="">Kho mã giảm giá</a>
                </li>
                <li data-name="sodiachi" onclick="alert('tính năng đang phát triễn');">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.57143 0C1.59898 0 0 1.59898 0 3.57143V21.4286C0 23.4011 1.59898 25 3.57143 25H21.4286C23.4011 25 25 23.4011 25 21.4286V3.57143C25 1.59898 23.4011 0 21.4286 0H3.57143ZM8.03571 7.58929C8.03571 8.32895 7.43609 8.92857 6.69643 8.92857C5.95677 8.92857 5.35714 8.32895 5.35714 7.58929C5.35714 6.84963 5.95677 6.25 6.69643 6.25C7.43609 6.25 8.03571 6.84963 8.03571 7.58929ZM6.69643 14.2857C5.95677 14.2857 5.35714 13.6861 5.35714 12.9464C5.35714 12.2068 5.95677 11.6071 6.69643 11.6071C7.43609 11.6071 8.03571 12.2068 8.03571 12.9464C8.03571 13.6861 7.43609 14.2857 6.69643 14.2857ZM8.03571 18.3036C8.03571 19.0432 7.43609 19.6429 6.69643 19.6429C5.95677 19.6429 5.35714 19.0432 5.35714 18.3036C5.35714 17.5639 5.95677 16.9643 6.69643 16.9643C7.43609 16.9643 8.03571 17.5639 8.03571 18.3036ZM11.6071 7.14286H18.75C19.243 7.14286 19.6429 7.54261 19.6429 8.03571C19.6429 8.52882 19.243 8.92857 18.75 8.92857H11.6071C11.114 8.92857 10.7143 8.52882 10.7143 8.03571C10.7143 7.54261 11.114 7.14286 11.6071 7.14286ZM10.7143 13.3929C10.7143 12.8998 11.114 12.5 11.6071 12.5H18.75C19.243 12.5 19.6429 12.8998 19.6429 13.3929C19.6429 13.8859 19.243 14.2857 18.75 14.2857H11.6071C11.114 14.2857 10.7143 13.8859 10.7143 13.3929ZM11.6071 17.8571H18.75C19.243 17.8571 19.6429 18.257 19.6429 18.75C19.6429 19.243 19.243 19.6429 18.75 19.6429H11.6071C11.114 19.6429 10.7143 19.243 10.7143 18.75C10.7143 18.257 11.114 17.8571 11.6071 17.8571Z"
                            fill="#4E4E4E" />
                    </svg>
                    <a href="">Sổ địa chỉ</a>
                </li>
            </ul>
        </div>
        <div class="cart">
            <table>
                <tr>
                    <td>Hình ảnh</td>
                    <td>Tên</td>
                    <td>Số lượng</td>
                    <td>Giá</td>
                    <td>Xóa</td>
                </tr>
                <?php
                    $totalQuantity = 0;
                    $totalPrice = 0;
                    $totalDiscount = 0;

                    foreach ($_SESSION['cart'] as $item) {
                        extract($item);

                        $totalQuantity += $Quantity;
                        $totalPrice += ($Price * (100 - $Discount) / 100) * $Quantity;
                        $totalDiscount += ($Price * $Discount / 100) * $Quantity;
                        ?>
                <tr class="product">
                    <td class="product-image"><img src="../../public/image/<?=$Image?>" alt=""></td>
                    <td class="product-name"><?=$Name?></td>
                    <td class="product-buttons-cart">
                        <button class="increase-button" onclick="changeQuantity(-1, <?=$Id?>);">-</button>
                        <button class="product-quantity"><?=$Quantity?></button>
                        <button class="decrease-button" onclick="changeQuantity(+1, <?=$Id?>);">+</button>
                    </td>
                    <td>
                        <?php if ($Discount > 0) { ?>
                        <p class="product-original-price"><?=number_format($Price, 0, '.', '.')?> vnđ</p>
                        <?php } ?>
                        <p class="product-price"><?=number_format($Price * (100 - $Discount) / 100, 0, '.', '.')?> vnđ
                        </p>
                    </td>
                    <td>
                        <div onclick="location.href='/giohang?del=<?=$Id?>';" class="remove-button">
                            <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 4.32397C0 4.5755 0.0999182 4.81672 0.277774 4.99458C0.455629 5.17243 0.696853 5.27235 0.948379 5.27235H1.45418V16.479C1.45502 17.3065 1.78406 18.0999 2.36913 18.6851C2.95419 19.2702 3.74749 19.5994 4.57498 19.6005H12.425C13.2525 19.5994 14.0458 19.2702 14.6309 18.6851C15.2159 18.0999 15.545 17.3065 15.5458 16.479V5.27235H16.0516C16.3031 5.27235 16.5444 5.17243 16.7222 4.99458C16.9001 4.81672 17 4.5755 17 4.32397C17 4.07245 16.9001 3.83122 16.7222 3.65337C16.5444 3.47551 16.3031 3.37559 16.0516 3.37559H12.7323V2.39687C12.7323 1.07546 11.6575 0 10.3361 0H6.66394C5.34253 0 4.2677 1.07483 4.2677 2.39687V3.37496H0.948379C0.696853 3.37496 0.455629 3.47488 0.277774 3.65274C0.0999182 3.83059 0 4.07245 0 4.32397ZM6.16446 2.3975C6.16446 2.12121 6.38828 1.89739 6.66394 1.89739H10.3361C10.6117 1.89739 10.8355 2.12121 10.8355 2.3975V3.37559H6.16383V2.39687L6.16446 2.3975ZM3.35094 5.27235H13.6491V16.479C13.6487 16.8036 13.5197 17.1148 13.2902 17.3444C13.0608 17.574 12.7496 17.7032 12.425 17.7037H4.57498C4.25039 17.7032 3.93924 17.574 3.70978 17.3444C3.48032 17.1148 3.35127 16.8036 3.35094 16.479V5.27235Z"
                                    fill="white"></path>
                                <path
                                    d="M6.14271 15.9568C6.39424 15.9568 6.63546 15.8569 6.81332 15.679C6.99117 15.5011 7.09109 15.2599 7.09109 15.0084V7.96764C7.09109 7.71611 6.99117 7.47489 6.81332 7.29703C6.63546 7.11917 6.39424 7.01926 6.14271 7.01926C5.89119 7.01926 5.64996 7.11917 5.47211 7.29703C5.29425 7.47489 5.19434 7.71611 5.19434 7.96764V15.0084C5.19434 15.2599 5.29425 15.5011 5.47211 15.679C5.64996 15.8569 5.89119 15.9568 6.14271 15.9568ZM10.8568 15.9568C11.1083 15.9568 11.3495 15.8569 11.5274 15.679C11.7052 15.5011 11.8052 15.2599 11.8052 15.0084V7.96764C11.8052 7.71611 11.7052 7.47489 11.5274 7.29703C11.3495 7.11917 11.1083 7.01926 10.8568 7.01926C10.6053 7.01926 10.364 7.11917 10.1862 7.29703C10.0083 7.47489 9.90841 7.71611 9.90841 7.96764V15.0084C9.90841 15.2599 10.0083 15.5011 10.1862 15.679C10.364 15.8569 10.6053 15.9568 10.8568 15.9568Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                    </td>
                </tr>
                <?php }  ?>

            </table>
        </div>
        <form class="checkout" method="post" data-submitted="false" action="/giohang?thanhtoan"
            onclick="validateForm()">
            <p class="checkout-title">Thông tin thanh toán</p>
            <div class="cart-information">
                <p>Số sản phẩm</p>
                <p class="cart-product-count right"><?=$totalQuantity?></p>
                <p>Tạm tính</p>
                <p class="cart-total-price right"><?=number_format($totalPrice, 0, '.', '.')?> vnđ</p>
                <p>Tổng giảm giá</p>
                <p class="cart-total-discount right"><?=number_format($totalDiscount, 0, '.', '.')?> vnđ</p>
                <p class="voucher-form-message"
                    style="grid-column: 1 / 3; color: var(--red); height: 10px; font-size: 14px;"></p>
                <div class="voucher-form">
                    <input type="text" name="code">
                    <div class="vouchers-list-button">
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0625 13.0435C19.5802 13.0435 20 13.4815 20 14.0217C20 14.517 19.6473 14.9263 19.1897 14.9911L19.0625 15H0.9375C0.419738 15 0 14.562 0 14.0217C0 13.5265 0.352696 13.1172 0.810288 13.0524L0.9375 13.0435H19.0625ZM19.0625 6.52174C19.5802 6.52174 20 6.95973 20 7.5C20 8.04026 19.5802 8.47826 19.0625 8.47826H0.9375C0.419738 8.47826 0 8.04026 0 7.5C0 6.95973 0.419738 6.52174 0.9375 6.52174H19.0625ZM19.0625 0C19.5802 0 20 0.437987 20 0.978261C20 1.51853 19.5802 1.95652 19.0625 1.95652H0.9375C0.419738 1.95652 0 1.51853 0 0.978261C0 0.437987 0.419738 0 0.9375 0H19.0625Z"
                                fill="#BDBDBD" />
                        </svg>
                    </div>
                </div>
                <div class="vouchers-list hidden">
                </div>
                <p>Mã giảm giá</p>
                <p class="voucher-discount right"></p>
                <p>Tổng</p>
                <p class="cart-final-total-price right"><?=number_format($totalPrice, 0, '.', '.')?> vnđ</p>
                <input type="hidden" name="totalPrice" value="<?=$totalPrice?>">

            </div>
            <div class="line"></div>
            <?php
            
                // $user = $_SESSION['LOGGED_IN_USER_ID'];
            ?>
            <div class="orderer-information">
                <label for="orderer-name">Tên người đặt hàng</label>
                <input type="text" name="orderer_name" id="orderer-name"
                    value="<?=isset($_SESSION['LOGGED_IN_USER_ID'][0]['Name']) ? $_SESSION['LOGGED_IN_USER_ID'][0]['Name'] : "";?>"
                    required>
                <label for="orderer-phone-number">Số điện thoại</label>
                <input type="text" name="orderer_phone_number"
                    value="<?=isset($_SESSION['LOGGED_IN_USER_ID'][0]['PhoneNumber']) ? $_SESSION['LOGGED_IN_USER_ID'][0]['PhoneNumber'] : "";?>"
                    id="orderer-phone-number" required>
                <label for="orderer-address">Địa chỉ</label>
                <input type="text" name="orderer_address" id="orderer-address"
                    value="<?=isset($_SESSION['LOGGED_IN_USER_ID'][0]['Address']) ? $_SESSION['LOGGED_IN_USER_ID'][0]['Address'] : "";?>"
                    required>
            </div>

            <input type="checkbox" name="other_address" id="otherAddress">
            <label for="otherAddress" style="font-size:16px;">Giao đến địa chỉ khác</label>
            <div class="line"></div>
            <div class="recipient-information hidden">
                <label for="recipient-name">Tên người nhận hàng</label>
                <input type="text" name="recipient_name" id="recipient-name">
                <label for="recipient-phone-number">Số điện thoại</label>
                <input type="text" name="recipient_phone_number" id="recipient-phone-number">
                <label for="recipient-address">Địa chỉ</label>
                <input type="text" name="recipient_address" id="recipient-address">
            </div>
            <div class="checkout-buttons">
                <div class="note-button">
                    <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.5625 0.59375C3.5625 0.265834 3.29667 0 2.96875 0C2.64083 0 2.375 0.265834 2.375 0.59375V1.1875H1.78125C0.797489 1.1875 0 1.98499 0 2.96875V17.2188C0 18.2025 0.797489 19 1.78125 19H8.3125V14.8438C8.3125 13.86 9.11003 13.0625 10.0938 13.0625H14.25V2.96875C14.25 1.98499 13.4525 1.1875 12.4688 1.1875H11.875V0.59375C11.875 0.265834 11.6091 0 11.2812 0C10.9534 0 10.6875 0.265834 10.6875 0.59375V1.1875H7.71875V0.59375C7.71875 0.265834 7.45287 0 7.125 0C6.79708 0 6.53125 0.265834 6.53125 0.59375V1.1875H3.5625V0.59375ZM3.5625 6.53125C3.5625 6.20333 3.82833 5.9375 4.15625 5.9375H10.0938C10.4216 5.9375 10.6875 6.20333 10.6875 6.53125C10.6875 6.85917 10.4216 7.125 10.0938 7.125H4.15625C3.82833 7.125 3.5625 6.85917 3.5625 6.53125ZM4.15625 9.5H10.0938C10.4216 9.5 10.6875 9.76588 10.6875 10.0938C10.6875 10.4216 10.4216 10.6875 10.0938 10.6875H4.15625C3.82833 10.6875 3.5625 10.4216 3.5625 10.0938C3.5625 9.76588 3.82833 9.5 4.15625 9.5ZM3.5625 13.6562C3.5625 13.3284 3.82833 13.0625 4.15625 13.0625H6.53125C6.85917 13.0625 7.125 13.3284 7.125 13.6562C7.125 13.9841 6.85917 14.25 6.53125 14.25H4.15625C3.82833 14.25 3.5625 13.9841 3.5625 13.6562Z"
                            fill="#C34439" />
                        <path
                            d="M13.8809 14.25H10.0938C9.76588 14.25 9.5 14.5159 9.5 14.8438V18.6309C9.56092 18.5841 9.61899 18.5332 9.67385 18.4783L13.7283 14.4239C13.7832 14.369 13.8341 14.3109 13.8809 14.25Z"
                            fill="#C34439" />
                    </svg>
                    <p>Ghi chú</p>
                </div>
                <div class="popup-background hidden">
                    <div action="" class="popup-form">
                        <p class="title">Ghi chú</p>
                        <input type="text" name="note">
                        <div class="buttons">
                            <div class="cancel">Hủy</div>
                            <div class="confirm">Xác nhận</div>
                        </div>
                    </div>
                </div>
                <button class="pay-button" type="submit" name="paybutton">Thanh toán</button>
            </div>
        </form>
    </div>
    <?php } else { ?>
    <div class="empty-cart-message">
        <img src="../../public/image/cart.png" alt="">
        <p>Giỏ hàng <span>Trống!</span></p>
        <a href="/trangchu">Quay lại trang chủ</a>
    </div>
    <?php } ?>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
// if (document.querySelector(".message") == null) {
//     update_order();
//     let otherAddress = document.getElementById("otherAddress");
//     let recipient_information = document.getElementsByClassName("recipient-information")[0];
//     otherAddress.addEventListener('change', function() {
//         if (this.checked) {
//             recipient_information.classList.remove("hidden");
//             let orderDiv = document.querySelector(".orderer-information");
//             let orderinputDivs = Array.from(orderDiv.querySelectorAll("input"));
//             orderinputDivs.forEach(input => {
//                 input.required = false;
//             });

//             let recipientDiv = document.querySelector(".recipient-information");
//             let recipientinputDivs = Array.from(recipientDiv.querySelectorAll("input"));
//             recipientinputDivs.forEach(input => {
//                 input.required = true;
//             });
//         } else {
//             recipient_information.classList.add("hidden");
//             let orderDiv = document.querySelector(".orderer-information");
//             let orderinputDivs = Array.from(orderDiv.querySelectorAll("input"));
//             orderinputDivs.forEach(input => {
//                 input.required = true;
//             });

//             let recipientDiv = document.querySelector(".recipient-information");
//             let recipientinputDivs = Array.from(recipientDiv.querySelectorAll("input"));
//             recipientinputDivs.forEach(input => {
//                 input.required = false;
//             });
//         }
//     });
//     document.querySelector(".vouchers-list-button").addEventListener("click", function() {
//         let voucher_list_div = document.querySelector(".vouchers-list");
//         if (voucher_list_div.classList.contains("hidden")) {
//             let order_price = get_total_price();
//             $.post("<?=$SITE_URL?>/giohang/get_voucher.php", {
//                     get_voucher_list: true,
//                     order_price: order_price

//                 },
//                 function(data, textStatus, jqXHR) {
//                     document.querySelector(".vouchers-list").innerHTML = data;
//                 }
//             );
//         }
//         document.querySelector(".vouchers-list").classList.toggle("hidden");
//     });
//     document.querySelector(".voucher-form").querySelector("input").addEventListener("input", function() {
//         check_voucher(document.querySelector(".voucher-form").querySelector("input").value, get_total_price());
//     });
//     document.querySelector(".note-button").addEventListener("click", function() {
//         document.querySelector(".popup-background").classList.toggle("hidden");
//     });
//     document.querySelector(".popup-form").querySelector(".cancel").addEventListener("click", function() {
//         document.querySelector(".popup-background").classList.toggle("hidden");
//     });
//     document.querySelector(".popup-form").querySelector(".confirm").addEventListener("click", function() {
//         document.querySelector(".popup-background").classList.toggle("hidden");
//     });
// }

// function changeQuantity(quantity, product_id) {
//     let productDiv = event.target.closest('.product');
//     if (quantity != 0) {
//         let buttons_div = event.target.closest('.product-buttons-cart');
//         let product_quantity = buttons_div.querySelector('.product-quantity');
//         if (quantity == -1 && product_quantity.innerText == 1) {
//             return;
//         }
//         product_quantity.innerText = Number.parseInt(product_quantity.innerText) + quantity;
//     } else {
//         productDiv.parentNode.removeChild(productDiv);
//     }
//     $.post("<?=$SITE_URL?>/giohang/index.php", {
//             cart_product_id: product_id,
//             cart_product_quantity: quantity

//         },
//         function(data, textStatus, jqXHR) {}
//     );
//     check_voucher(document.querySelector(".voucher-form").querySelector("input").value, get_total_price());

//     let remaining_products = document.querySelectorAll('tr').length;
//     if (remaining_products === 1) {
//         // Nếu chỉ còn lại một dòng (dòng tên cột của table), reload trang
//         location.reload();
//     }
// }

// function update_order() {
//     // check_voucher(document.querySelector(".voucher-form").querySelector("input").value, get_total_price() );
//     let products_list = document.querySelectorAll(".product");
//     let products_array = Array.from(products_list);
//     let total_product = 0;
//     let total_price = 0;
//     let total_discount = 0;
//     let voucher_discount = Number.parseInt(document.querySelector(".voucher-discount").innerText.replace(".", "")
//         .replace(" vnđ", "")) || 0;

//     products_array.forEach(product => {
//         total_product += Number.parseInt(product.querySelector(".product-quantity").innerText);

//         let price = Number.parseInt(product.querySelector(".product-price").innerText.replace(".", "").replace(
//             " vnđ", ""));
//         if (product.querySelector(".product-original-price") != null) {
//             total_discount += (Number.parseInt(product.querySelector(".product-original-price").innerText
//                 .replace(".", "").replace(" vnđ", "")) - price) * Number.parseInt(product.querySelector(
//                 ".product-quantity").innerText);
//         }
//         total_price += price * Number.parseInt(product.querySelector(".product-quantity").innerText);

//     });
//     let final_total_price = total_price - total_discount - voucher_discount;
//     document.querySelector(".cart-product-count").innerText = total_product;
//     document.querySelector(".cart-total-price").innerText = total_price.toLocaleString('vi-VN', {
//         useGrouping: true,
//         maximumFractionDigits: 0,
//     }) + " vnđ";
//     document.querySelector(".cart-total-discount").innerText = total_discount.toLocaleString('vi-VN', {
//         useGrouping: true,
//         maximumFractionDigits: 0,
//     }) + " vnđ";
//     document.querySelector(".voucher-discount").innerText = voucher_discount.toLocaleString('vi-VN', {
//         useGrouping: true,
//         maximumFractionDigits: 0,
//     }) + " vnđ";
//     document.querySelector(".cart-final-total-price").innerText = final_total_price.toLocaleString('vi-VN', {
//         useGrouping: true,
//         maximumFractionDigits: 0,
//     }) + " vnđ";
// }

// function get_total_price() {
//     let products_list = document.querySelectorAll(".product");
//     let products_array = Array.from(products_list);
//     let total_product = 0;
//     let total_price = 0;
//     let total_discount = 0;
//     // voucher
//     products_array.forEach(product => {
//         total_product += Number.parseInt(product.querySelector(".product-quantity").innerText);

//         let price = Number.parseInt(product.querySelector(".product-price").innerText.replace(".", "").replace(
//             " vnđ", ""));
//         if (product.querySelector(".product-original-price") != null) {
//             total_discount += (Number.parseInt(product.querySelector(".product-original-price").innerText
//                 .replace(".", "").replace(" vnđ", "")) - price) * Number.parseInt(product.querySelector(
//                 ".product-quantity").innerText);
//         }
//         total_price += price * Number.parseInt(product.querySelector(".product-quantity").innerText);

//     });
//     let final_total_price = total_price - total_discount;
//     return final_total_price;
// }

// function select_voucher(code) {
//     document.querySelector(".voucher-form").querySelector("input").value = code;
//     document.querySelector(".vouchers-list").classList.toggle("hidden");
//     check_voucher(code, get_total_price());
// };

// function check_voucher(voucher_code, order_price) {
//     //
//     $.post("<?=$SITE_URL?>/giohang/get_voucher.php", {
//             get_voucher: true,
//             voucher_code: voucher_code,
//             order_price: order_price

//         },
//         function(data, textStatus, jqXHR) {
//             if (data == 0) {
//                 if (document.querySelector(".voucher-form").querySelector("input").value != "") {
//                     document.querySelector(".voucher-form-message").innerText =
//                         "Mã giảm giá không hợp lệ hoặc hết lượt dùng";
//                 }
//                 document.querySelector(".voucher-discount").innerText = "";
//             } else {
//                 document.querySelector(".voucher-discount").innerText = data;
//                 document.querySelector(".voucher-form-message").innerText = "";
//             }
//             update_order();
//         }
//     );
// }
// document.addEventListener("DOMContentLoaded", function() {
//     var messageElement = document.querySelector(".message");

//     if (messageElement) {
//         setTimeout(function() {
//             messageElement.classList.toggle("hidden");
//         }, 2000);
//     }
// });

// document.querySelector(".menucon").querySelectorAll("li").forEach(function(element) {
//     let url = window.location.href;
//     if (url.includes(element.getAttribute("data-name"))) {
//         element.classList.add("selected");
//     }
// });

function validateForm() {
    let isValid = true;

    let ordererPhoneNumber = document.getElementById('orderer-phone-number').value;
    let recipientPhoneNumber = document.getElementById('recipient-phone-number').value;
    let checkbox = document.getElementById("otherAddress");



    let phoneRegex = /^0\d{9}$/;
    if (!phoneRegex.test(ordererPhoneNumber) && !checkbox.checked) {
        alert('Số điện thoại không hợp lệ. Vui lòng nhập 10 chữ số bắt đầu bằng 0.');
        return false;
    }

    if (!phoneRegex.test(recipientPhoneNumber) && checkbox.checked) {
        alert('Số điện thoại không hợp lệ. Vui lòng nhập 10 chữ số bắt đầu bằng 0.');
        return false;
    }

    return true;
}
</script>
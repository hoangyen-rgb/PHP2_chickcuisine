<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ChickCuisine</title>
    <link rel="icon" href="../../public/image/mini-logo.png" type="image/png">

</head>
<!-- css global -->
<style>
:root {
    --red: #c34439;
    --black: #202020;
    --lightblack: #4E4E4E;
    --gray: #BDBDBD;
    --lightgray: #faf9f8;
    --yellow: #FFB11B;
    --green: #56D237;
}

button {
    border: 1px solid var(--red);
}

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--lightgray);

}

a {
    text-decoration: none;
    color: var(--lightblack);
}

/* Đường gạch ngang */
.line {
    border-bottom: 1px solid var(--gray);
    width: 100%;
    margin: 10px auto;
}

.vertical-line {
    border-right: 1px solid var(--gray);
    height: 100%;
    margin: auto 10px;
}

.whitediv {
    background-color: white;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 5px var(--gray);
    border-radius: 10px;
}

.whitediv2 {
    border-radius: 10px;
    border: 1px solid #BDBDBD;

    background: #FFF;

    box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.25);
}

main {
    padding: 0 100px;
}
</style>
<style>
.list-products {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    column-gap: 20px;
}

.product {
    position: relative;
    width: 230px;
    padding: 10px;
    margin: 15px 0px;
}

.product .product-image {
    width: 100%;
    height: 150px;
    margin-bottom: 10px;
}

.product .product-name {
    font-size: 24px;
    font-weight: 600;
    text-align: center;
    color: var(--lightblack);
}

.product .product-rating {
    justify-content: center;
    margin-bottom: 10px;
    height: 22px;
    display: flex;

}

.product .product-rating>* {
    margin: 5px;
}

.product .product-description {
    text-align: center;
    font-size: 14px;
    font-weight: 400;
    color: var(--lightblack);
    margin-bottom: 10px;
    width: 100%;
    height: 55px;
    word-wrap: wordwrap;
}

.product .product-price {
    width: 100%;
    text-align: center;
}

.product .product-price>* {
    display: inline-block;
}

.product .product-price .original-price {

    text-decoration: line-through;
}

.product .product-price .discount-price {
    color: var(--red);
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 10px;
}

.product .product-buttons {
    display: grid;
    grid-template-columns: auto 30px 30px;
    gap: 10px;
}

.product .product-buttons button {
    height: 30px;
    color: white;
    font-size: 15px;
    font-weight: 600;
    background-color: var(--red);
    border: none;
    border-radius: 5px;
}

.product .product-buttons button:last-child {
    background-color: var(--black);
}

.product .product-buttons>:not(button:first-child) {
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.product .product-discount-tag {
    position: absolute;
    top: -10px;
    right: 20px;
}

.product .product-discount-tag p {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -80%);
    font-size: 16px;
    font-weight: 600;
    color: white;
}

.global-message {
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

.global-message p {
    color: var(--lightblack);
    font-weight: 600;
}

header {
    width: 100%;
    padding: 10px 100px;
    background-color: #171717;
    display: inline-grid;
    grid-template-columns: 2fr 350px 4fr 1fr 137px;
    gap: 10px;
    justify-content: space-around;
    align-items: center;
}

header>* {
    text-align: center;
}

header * {
    font-size: 18px;
}

header .logo {
    width: 193px;
}

header .menu {
    display: flex;
}

header .menu a {
    color: white;
    width: 100%;
}

header .menu a svg {
    display: none;
}

header .menu a:nth-child(4) {
    display: none;
}

header .search-box {
    border: 1px solid var(--gray);
    padding: 5px 0px 5px 10px;
    height: 42px;
    border-radius: 21px;
    width: 100%;
    min-width: 150px;
    text-align: left;
}

header .search-box>* {
    margin: auto;
    vertical-align: middle;
}

header .search-box input {
    outline: none;
    border: none;
    background-color: unset;
    color: white;
    width: 80%;
}

header .search-box input::placeholder {
    color: white;
}

header .cart {
    text-align: right;
    padding-right: 20px;
    position: relative;
}

header .cart img {
    height: fit-content;
}

header .account {
    text-align: center;
    background-color: var(--red);
    padding: 5px;
    border-radius: 5px;
    width: 137px;
}

header .account:hover {
    transform: scale(1.1);
    transition: 0.3s;
    cursor: pointer;
}

header .account>* {
    display: inline-block;
    vertical-align: top;
    margin: 0px 5px;
    color: white;
}

main {
    margin-top: 5%;
}



@media screen and (max-width: 720px) {
    main {
        padding: 0px 15px !important;
    }

    header a>img {
        width: 150px !important;
        /* margin-bottom: 8%; */
    }

    footer .menu-box>.logo-footer {
        width: 170px !important;
        margin-top: 6%;

    }

    header {
        padding: 10px 15px !important;
        grid-template-columns: auto auto auto auto auto;
        gap: 5px;
    }

    .search-an {
        display: block !important;
    }

    header .search-box {
        position: absolute;
        width: 50%;
        top: 75px;
        left: 25%;
        display: none;
    }

    .search-box.ghim-search {
        display: block;
        z-index: 3;
    }

    header .menu {
        margin: 0 !important;
        position: absolute;
        top: 59px !important;
        background-color: #202020;
        display: grid;
        grid-template-columns: auto;
        z-index: 2;
        padding: 0 !important;
        width: 45%;
        left: -100%;
    }

    .menu.open {
        left: 0;
    }

    header .menu a svg {
        margin-left: 15%;
        width: 25px;
        margin-right: 10%;
        display: block;

    }

    header .menu a:hover {
        background-color: #c34439;
        width: 100%;

    }

    header .menu a:nth-child(4) {
        display: block;
    }

    header .menu a {
        display: flex !important;
        padding: 20px 0 !important;
        width: 100%;
        transition: transform 0.5s ease-in-out;
        align-items: center !important;

    }

    header .cart {
        padding-right: 0px !important;
    }

    header .iconmenu {
        display: block !important;
    }

    header .account {
        background-color: black;
        padding: 1px !important;
        width: 100% !important;
    }

    header .account p {
        display: none;
    }

    footer {
        padding: 10px 15px !important;
    }

    footer .gallery {
        left: 0px;
    }

    footer .gallery>img {
        width: 30% !important;

    }

    footer .gallery img:nth-child(1) {
        margin-left: 3%;
    }

    footer .gallery img:nth-child(3),
    footer .gallery img:nth-child(4) {
        display: none;
    }

    footer .about {
        margin: 70% auto 0px !important;
    }

    footer .menu-box {
        margin-bottom: 5%;
    }

    footer .about>* {
        display: none;

    }

    .footer-menu {
        position: absolute !important;
        top: 0;
    }

    footer .footer-menu a {
        display: none;

    }

    footer .iconmenu {
        display: block !important;
        margin-top: 5%;
    }

    footer .logo-footer img {
        width: 89px !important;
        /* height: 34px; */
    }

    footer .more-info ul li:nth-child(1) {
        margin-right: 0;
    }

    footer .more-info li:nth-child(2),
    li:nth-child(3) {
        display: none !important;
    }

    /* Responsive main */
    .category>.item {
        font-size: 14px;
    }

    .container {
        width: 100%;
    }

    .list-products {
        grid-template-columns: repeat(2, 1fr) !important;
    }

    .list-products>* {
        width: 100%;
    }

    /* .products {
            width:220px;
        } */
    .product-description {
        height: 65px !important;
    }

    .buy-now {
        font-size: 14px !important;
    }

    .product-name {
        font-size: 20px !important;
    }
}
</style>

<body>
    <header>
        <div class="iconmenu" style="display: none;"><img src="../../public/image/icon/more.png" alt=""></div>
        <a href="/trangchu"><img src="../../public/image/horizontal-logo-red.png" alt="" class="logo"></a>
        <div class="menu" id="menu">
            <a href="/trangchu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                    <path
                        d="M12.3335 2H10.6668C10.4828 2 10.3335 2.14924 10.3335 2.33333V2.37261L12.6668 4.23927V2.33333C12.6668 2.14924 12.5176 2 12.3335 2Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.8335 7.30679L14.3545 7.72359C14.5702 7.89605 14.8848 7.86112 15.0573 7.64545C15.2298 7.42985 15.1948 7.11519 14.9792 6.94265L9.5619 2.60887C8.64889 1.87843 7.3515 1.87843 6.43844 2.60887L1.02117 6.94265C0.805535 7.11519 0.770575 7.42985 0.943082 7.64545C1.11558 7.86112 1.43023 7.89605 1.64586 7.72359L2.16685 7.30679V14.1665H1.33352C1.05737 14.1665 0.833515 14.3903 0.833515 14.6665C0.833515 14.9426 1.05737 15.1665 1.33352 15.1665H14.6668C14.943 15.1665 15.1668 14.9426 15.1668 14.6665C15.1668 14.3903 14.943 14.1665 14.6668 14.1665H13.8335V7.30679ZM6.16685 6.33312C6.16685 5.3206 6.98763 4.49979 8.00016 4.49979C9.0127 4.49979 9.8335 5.3206 9.8335 6.33312C9.8335 7.34565 9.0127 8.16645 8.00016 8.16645C6.98763 8.16645 6.16685 7.34565 6.16685 6.33312ZM8.0331 8.83312C8.47636 8.83312 8.85823 8.83305 9.16409 8.87419C9.49183 8.91825 9.80603 9.01765 10.0608 9.27245C10.3157 9.52732 10.415 9.84145 10.4591 10.1693C10.4976 10.4559 10.5 10.8095 10.5002 11.2178C10.5002 11.2451 10.5002 11.2725 10.5002 11.3002V14.1665H9.50016V11.3331C9.50016 10.8476 9.49909 10.5337 9.46803 10.3025C9.4389 10.0856 9.39183 10.0177 9.35376 9.97959C9.31569 9.94152 9.24769 9.89445 9.03083 9.86525C8.79956 9.83419 8.48569 9.83312 8.00016 9.83312C7.51463 9.83312 7.20076 9.83419 6.96956 9.86525C6.75269 9.89445 6.68469 9.94152 6.64663 9.97959C6.60856 10.0177 6.56149 10.0856 6.53233 10.3025C6.50124 10.5337 6.50018 10.8476 6.50018 11.3331V14.1665H5.50018V11.3002C5.50015 10.857 5.50014 10.4751 5.54125 10.1693C5.58532 9.84145 5.68469 9.52732 5.93952 9.27245C6.19435 9.01765 6.50853 8.91825 6.8363 8.87419C7.1421 8.83305 7.52403 8.83312 7.96729 8.83312H8.0331Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.16675 6.33333C7.16675 5.87309 7.53988 5.5 8.00008 5.5C8.46035 5.5 8.83341 5.87309 8.83341 6.33333C8.83341 6.7936 8.46035 7.16667 8.00008 7.16667C7.53988 7.16667 7.16675 6.7936 7.16675 6.33333Z"
                        fill="white" />
                </svg>Trang chủ</a>
            <a href="/thucdon"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="11" viewBox="0 0 17 11"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.4625 5.4984C13.4625 6.87079 12.9797 8.04259 12.0126 9.00963C11.0442 9.97805 9.87378 10.4623 8.50138 10.4623C7.13452 10.4623 5.96411 9.97943 4.9943 9.00963C4.02588 8.04259 3.5389 6.87079 3.5389 5.4984C3.5389 4.13015 4.0245 2.96389 4.9943 1.9927C5.96688 1.02427 7.13591 0.537295 8.50138 0.537295C9.87378 0.537295 11.0442 1.02289 12.0126 1.9927C12.9783 2.96389 13.4625 4.13015 13.4625 5.4984ZM2.26473 4.58393C2.70052 4.28648 2.91911 3.89773 2.88175 3.00816V0.721296C2.8776 0.401716 2.29793 0.362979 2.26888 0.721296L2.24674 2.57652C2.24536 2.92377 1.7238 2.93484 1.72518 2.57652L1.74731 0.657657C1.7404 0.314558 1.18701 0.279971 1.18009 0.657657C1.18009 1.19029 1.15796 2.04389 1.15796 2.57652C1.18563 2.9127 0.701416 2.95697 0.713867 2.57652L0.736003 0.670108C0.723551 0.4114 0.438558 0.318708 0.244873 0.440453C0.038737 0.571882 0.0802409 0.836123 0.0719401 1.05886L0 3.2475C0.0110677 3.88389 0.178467 4.40131 0.676514 4.62128C0.752604 4.65448 0.857747 4.68077 0.979492 4.69875L0.807943 10.0362C0.798259 10.353 1.05697 10.6117 1.35994 10.6117H1.42912C1.77083 10.6117 2.05998 10.3198 2.05029 9.96422L1.8995 4.69737C2.05859 4.67247 2.19002 4.63511 2.26473 4.58393ZM14.7671 9.87567L14.7588 5.08197C13.0779 4.11078 13.6133 0.368513 15.2956 0.389265C17.3403 0.412784 17.5824 4.60606 15.8241 5.06676L15.9541 9.89504C15.979 10.8081 14.7685 10.8925 14.7671 9.87567ZM11.3901 5.49425C11.3901 6.29389 11.1092 6.97593 10.5434 7.54177C9.97892 8.10484 9.29688 8.38845 8.49723 8.38845C7.70312 8.38845 7.02108 8.10484 6.45662 7.54177C5.89217 6.97593 5.60994 6.29389 5.60994 5.49425C5.60994 4.70014 5.89217 4.01809 6.45662 3.45502C7.02246 2.89195 7.70312 2.60834 8.49723 2.60834C10.1034 2.60972 11.3901 3.88666 11.3901 5.49425ZM12.0666 5.49425C12.0666 4.51199 11.7207 3.67222 11.0248 2.97634C10.3289 2.28046 9.48641 1.93459 8.49723 1.93459C7.51082 1.93459 6.67106 2.28046 5.97933 2.97634C5.28345 3.67222 4.93343 4.51199 4.93343 5.49425C4.93343 6.47927 5.28345 7.31903 5.97933 8.01768C6.67106 8.71495 7.51082 9.06497 8.49723 9.06497C9.48503 9.06497 10.3276 8.71495 11.0248 8.01768C11.7193 7.31765 12.0666 6.47789 12.0666 5.49425Z"
                        fill="white" stroke="white" stroke-width="0.0012288" />
                </svg>Thực đơn</a>
            <a href="/trangchu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                    fill="none">
                    <g clip-path="url(#clip0_1400_4665)">
                        <path
                            d="M8.00051 0C3.58369 0 0.000488281 3.57868 0.000488281 7.99579C0.000488281 12.4171 3.58369 16 8.00047 16C12.4197 16 15.9999 12.4171 15.9999 7.99579C15.9999 3.57868 12.4197 0 8.00051 0ZM8.57059 12.4472C8.38478 12.6126 8.16945 12.6957 7.92552 12.6957C7.67314 12.6957 7.45299 12.614 7.26507 12.4505C7.07686 12.2873 6.98257 12.0587 6.98257 11.7651C6.98257 11.5046 7.07383 11.2853 7.25574 11.1076C7.43765 10.9299 7.6608 10.8411 7.92552 10.8411C8.18601 10.8411 8.40527 10.9299 8.58326 11.1076C8.76095 11.2853 8.85009 11.5045 8.85009 11.7651C8.84976 12.0545 8.75669 12.2819 8.57059 12.4472ZM10.8874 6.70351C10.7446 6.96823 10.5751 7.19649 10.3785 7.38896C10.1824 7.5814 9.82975 7.90484 9.32076 8.35958C9.18042 8.48789 9.06749 8.60052 8.98287 8.69748C8.89825 8.79477 8.83501 8.88357 8.79374 8.9643C8.75217 9.045 8.72027 9.12573 8.69767 9.20642C8.67507 9.28682 8.64106 9.42868 8.59497 9.63134C8.51668 10.0614 8.27063 10.2764 7.85713 10.2764C7.64209 10.2764 7.4614 10.2062 7.31413 10.0656C7.16745 9.92496 7.09428 9.71626 7.09428 9.43921C7.09428 9.09198 7.14818 8.7911 7.2557 8.53664C7.36263 8.28215 7.50567 8.059 7.68336 7.86657C7.86135 7.67413 8.10106 7.44583 8.40312 7.18111C8.66784 6.94952 8.85909 6.77487 8.97683 6.65709C9.09487 6.53905 9.19398 6.40774 9.27438 6.26318C9.35541 6.11831 9.39516 5.96141 9.39516 5.79187C9.39516 5.46091 9.2726 5.18204 9.02626 4.95466C8.78021 4.72729 8.46277 4.61344 8.07398 4.61344C7.61893 4.61344 7.28404 4.72818 7.06901 4.95766C6.85397 5.18715 6.67239 5.52504 6.52331 5.97167C6.38237 6.43909 6.11554 6.67276 5.72311 6.67276C5.49152 6.67276 5.29608 6.59114 5.13677 6.4279C4.97775 6.26466 4.89824 6.0879 4.89824 5.89757C4.89824 5.50485 5.02443 5.10671 5.27652 4.70347C5.5289 4.30022 5.89691 3.96622 6.38085 3.7018C6.8645 3.43708 7.4292 3.30455 8.07398 3.30455C8.67358 3.30455 9.20273 3.41537 9.66169 3.63674C10.1207 3.85778 10.4754 4.15866 10.7257 4.5393C10.9757 4.91965 11.1009 5.33316 11.1009 5.77979C11.1015 6.13069 11.0302 6.43879 10.8874 6.70351Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1400_4665">
                            <rect width="16" height="16" fill="white" />
                        </clipPath>
                    </defs>
                </svg>Giới thiệu</a>
            <a href="/goi_email"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                    fill="none">
                    <path
                        d="M11.7275 9.14173L11.4048 9.46246C11.4048 9.46246 10.638 10.225 8.54486 8.14368C6.45175 6.06247 7.21857 5.29999 7.21857 5.29999L7.42172 5.09798C7.92223 4.60035 7.96941 3.8014 7.53272 3.21813L6.63955 2.02502C6.09911 1.30311 5.0548 1.20775 4.43536 1.82367L3.32356 2.92916C3.01641 3.23457 2.81058 3.63046 2.83554 4.06964C2.8994 5.19321 3.40775 7.61066 6.24437 10.4312C9.25248 13.4222 12.075 13.541 13.2292 13.4334C13.5943 13.3994 13.9118 13.2135 14.1676 12.9591L15.1739 11.9586C15.8531 11.2832 15.6616 10.1254 14.7925 9.653L13.4392 8.91733C12.8686 8.60715 12.1734 8.69824 11.7275 9.14173Z"
                        fill="white" />
                </svg>
                Liên hệ</a>
        </div>
        <div class="search-an" style="display: none;">
            <img src="../../public/image/icon/search.png" alt="">
        </div>
        <form class="search-box" action="/thucdon" method="get">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector"
                    d="M8.02421 0C12.4559 0 16.0484 3.62885 16.0484 8.10526C16.0484 9.94489 15.4417 11.6414 14.4193 13.0017L20.4695 19.1132C20.8968 19.5448 20.8968 20.2446 20.4695 20.6763C20.081 21.0687 19.4732 21.1043 19.0448 20.7833L18.9221 20.6763L12.8717 14.5649C11.525 15.5977 9.84544 16.2105 8.02421 16.2105C3.59256 16.2105 0 12.5817 0 8.10526C0 3.62885 3.59256 0 8.02421 0ZM8.02421 2.21053C4.80119 2.21053 2.18842 4.84969 2.18842 8.10526C2.18842 11.3608 4.80119 14 8.02421 14C11.2472 14 13.86 11.3608 13.86 8.10526C13.86 4.84969 11.2472 2.21053 8.02421 2.21053Z"
                    fill="white" />
            </svg>
            <input type="text" placeholder="Tìm món" name="search" <?php if(isset($search) && $search) 
            { ?> value="<?=$search?>" <?php } ?>>

        </form>
        <a href="/giohang" class="cart">
            <svg width="30" height="30" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <div id="cart-count">
                <p></p>
            </div>
        </a>
        <!-- check nếu đã đăng nhập, chuyển sang trang tài khoảng, chưa đăng nhập, chuyển sang đăng ký -->
        <a class="account"
            href="/<?php if (isset($_SESSION['LOGGED_IN_USER_ID'])) { ?>taikhoan<?php } else { ?>dangky<?php } ?>">
            <svg width="16" height="20" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.75 7.5C10.9926 7.5 12 8.50735 12 9.75C12 11.4241 11.3115 12.7654 10.1818 13.6722C9.06987 14.5647 7.57962 15 6 15C4.42038 15 2.93013 14.5647 1.81823 13.6722C0.688455 12.7654 0 11.4241 0 9.75C0 8.58051 0.892315 7.61933 2.03328 7.5103L2.24997 7.5H9.75ZM6 0C7.65686 0 9 1.34314 9 3C9 4.65686 7.65686 6 6 6C4.34314 6 3 4.65686 3 3C3 1.34314 4.34314 0 6 0Z"
                    fill="white" />
            </svg>

            <p>
                <?php
                $user = new App\model\user();
                // var_dump($_SESSION['LOGGED_IN_USER_ID'][0]['Id']);
                // var_dump($_SESSION['LOGGED_IN_USER_ID']);
                // var_dump($Id);
                if (isset($_SESSION['LOGGED_IN_USER_ID'])) {
                   $Id= $_SESSION['LOGGED_IN_USER_ID'][0]['Id'];
                   $user = $user->get_user_by_id($Id);
                   extract($user[0]);
               if ($Name) {
                   if (strlen($Name) >= 9) {
                       $Name = mb_substr($Name, 0, 6, 'UTF-8')."...";
                   }
                   echo $Name;
               } else {
                   if(strlen($Email) >= 9) {
                       $Email = mb_substr($Email, 0, 6, 'UTF-8')."...";
                   }
                   echo $Email;
               }
                } else { 
                    ?>
                Đăng ký
                <?php } ?>
            </p>
        </a>
    </header>

    <script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     var messageElement = document.querySelector(".global-message");

    //     if (messageElement) {
    //         setTimeout(function() {
    //             messageElement.classList.toggle("hidden");
    //         }, 4000);
    //     }
    // });
    </script>

</body>

</html>
<script>
// document.querySelector('.iconmenu').addEventListener('click', function() {
//     document.querySelector('.menu').classList.toggle('open');
// });
// document.querySelector('.footer-menu .iconmenu').addEventListener('click', function() {
//     document.querySelector('.menu').classList.toggle('open');
// });
// document.querySelector('.search-an').addEventListener('click', function() {
//     document.querySelector('.search-box').classList.toggle('ghim-search');
// });
</script>
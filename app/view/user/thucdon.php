    <!-- css trang -->

    <!-- css thân trang -->
    <style>
.list-products {
    grid-template-columns: repeat(4, 1fr);

}

.monanhot {
    position: relative;
}

.tieude {
    text-align: center;
    padding: 10px;
}

.tieude>h2 {
    color: #c34439;
}

.tieude>p {
    display: block;
    padding: 10px;
    width: 50%;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    margin: auto;
}

.category {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 50px;
    padding: 5px;
}

.category>.item {
    height: 100%;
    width: auto;
    border-radius: 5px;
    font-weight: 500;
    color: var(--lightblack);
    padding: 0px 10px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
}

.category>.selected {
    transition: 0.3s;
    background-color: #c34439;
    color: #faf9f8;
}

.fillingbar {
    text-align: right;
    width: 100%;
    margin: 20px 0px;
}

.fillingbar * {

    font-weight: 500;
}

.fillingbar>div {
    display: inline-block;
}

.fillingbar>.filter,
.fillingbar>.sort {
    width: 120px;
    position: relative;
    text-align: center;
}

.fillingbar #filter-button,
.fillingbar #sort-button {
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    padding: 5px;
}

.fillingbar #filter-button:hover,
.fillingbar #sort-button:hover {

    background-color: rgb(0, 0, 0, 0.08);
}

.fillingbar #filter-button>*,
.fillingbar #sort-button>* {
    display: inline-block;
    vertical-align: middle;
}

.hidden {
    display: none !important;
    width: 0px;
    overflow: hidden;
}

.filter-box,
.sort-box {
    width: 300px;
    background-color: white;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 5px var(--gray);
    position: absolute;
    right: 0px;
    top: 50px;
    z-index: 2;
    border-radius: 5px;
    padding: 15px;
    text-align: left;
    display: grid;
    transition: 0.3s;
}

.sort-box {
    width: 250px;
}

.filter-box p,
.filter-box input[type="range"],
.sort-box label {
    width: 100%;
}

.filter-box input,
.sort-box label {
    margin: 5px 0px 15px;
    cursor: pointer;
}

.filter-box label {
    margin-left: 10px;
}

.sort-box input {
    margin-right: 10px;
}

.filter-box button {
    width: 100px;
    height: 35px;
    margin-top: 15px;
    border-radius: 5px;
    background-color: var(--red);
    color: white;
    font-size: 18px;
    font-weight: 400;
    justify-self: end;
}
    </style>
    <!-- css danhmuc -->
    <style>
.container-sanpham {
    display: grid;
    grid-template-columns: 220px auto;
    column-gap: 50px;
    margin: 20px 0;
}

.danhmuc {
    border-radius: 10px;
    overflow: hidden;
    width: 100%;
    border: 1px solid var(--gray);
}

.danhmuc>:not(:last-child) {
    border-bottom: 1px solid var(--gray);
}

.itemdanhmuc {
    background-color: white;
    width: 250%;
    height: 57px;
    display: flex;
    align-items: center;
    padding-left: 15px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
}

.danhmuc .selected {
    transition: 0.3s;
    background-color: #c34439;
    color: #faf9f8;
}

.box-product {
    width: 100%;
}
    </style>
    <!-- css so trang san pham -->
    <style>
.sotrang {
    width: 100%;
    text-align: center;
    margin-top: 50px;
}

.sotrang>* {
    display: inline-block;
    vertical-align: middle;
    margin: 0px 20px;
    cursor: pointer;
}

.sotrang p {

    width: 40px;
    height: 40px;
    font-size: 25px;
    border-radius: 5px;
}

.sotrang .selected {
    background-color: var(--red);
    color: white;
}

@media screen and (max-width:720px) {
    .danhmuc {
        display: none;
    }

    .container-sanpham {
        grid-template-columns: auto;
        gap: 0;
    }

    .sotrang {
        display: flex;
        align-items: center;
        justify-content: center !important;
    }

    .sotrang>* {
        margin: 0 15px;
    }

    .filter-box {
        right: -54%;
    }
}
    </style>
    <main>
        <div class="tieude">
            <h2>Danh sách món ăn</h2>
            <p>Toàn bộ món ăn mà ChickCuisine có cung cấp cho bạn</p>
        </div>
        <div class="category whitediv2">
            <a class="item <?php 
                if (!isset($_GET['category_id'])) {?>
                    selected
                    <?php } ?>" href="/thucdon">
                Tất cả
            </a>
            <?php foreach($hot_categories as $category) {extract($category); ?>
            <p class="item <?php if (isset($_GET['category_id'])) { if($_GET['category_id'] == $Id) { ?>selected<?php }} ?>"
                onclick='ApplyFilters(new filter("category_id", <?=$Id?>))'>
                <?=$Name?>
            </p>
            <?php } ?>
        </div>
        <div class="fillingbar">
            <div class="filter">
                <div id="filter-button">
                    <p>Lọc</p>
                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.875 12.75C14.4963 12.75 15 13.2537 15 13.875C15 14.4963 14.4963 15 13.875 15H7.125C6.50368 15 6 14.4963 6 13.875C6 13.2537 6.50368 12.75 7.125 12.75H13.875ZM16.875 6.375C17.4963 6.375 18 6.87868 18 7.5C18 8.12132 17.4963 8.625 16.875 8.625H4.125C3.50368 8.625 3 8.12132 3 7.5C3 6.87868 3.50368 6.375 4.125 6.375H16.875ZM19.875 0C20.4963 0 21 0.50368 21 1.125C21 1.74632 20.4963 2.25 19.875 2.25H1.125C0.50368 2.25 0 1.74632 0 1.125C0 0.50368 0.50368 0 1.125 0H19.875Z"
                            fill="#4E4E4E" />
                    </svg>
                </div>
                <div class="filter-box hidden" id="filter-box">
                    <p id="min_price_label">Giá tối thiểu:
                        <?php if(isset($filter_by_min_price)) {?><?=number_format($filter_by_min_price, 0, ',', '.')?><?php } else { ?>0<?php } ?>
                        vnđ</p>
                    <input type="range" min="0" max="100000" step="1000" name="min_price_filter" id="min_price_filter"
                        value="<?php if(isset($filter_by_min_price)) {?><?=$filter_by_min_price?><?php } else { ?>0<?php } ?>">
                    <div>
                        <p id="max_price_label">Giá tối đa:
                            <?php if(isset($filter_by_min_price)) {?><?=number_format($filter_by_max_price, 0, ',', '.')?><?php } else { ?>100.000<?php } ?>
                            vnđ</p>
                        <input type="range" min="0" max="100000" step="1000" name="max_price_filter"
                            id="max_price_filter"
                            value="<?php if(isset($filter_by_max_price)) {?><?=$filter_by_max_price?><?php } else { ?>100000<?php } ?>">
                    </div>
                    <div>
                        <input type="checkbox" name="is_discount" id="discount_filter"
                            <?php if(isset($filter_by_discount) && $filter_by_discount == true) {?>checked<?php } ?>>
                        <label for="discount_filter">Giảm giá</label>
                    </div>
                    <button
                        onclick="ApplyFilters(new filter('min_price', document.getElementById('min_price_filter').value), new filter('max_price', document.getElementById('max_price_filter').value), new filter('is_discount', document.getElementById('discount_filter').checked));">Lọc</button>
                </div>
            </div>
            <div class="sort">
                <div id="sort-button">
                    <p>Sắp xếp</p>
                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.68505 1.12065e-05C4.92653 -0.00116571 5.16966 0.0903585 5.35391 0.274608L9.11428 4.03498C9.48039 4.40109 9.48039 4.99469 9.11428 5.3608C8.74817 5.72691 8.15457 5.72691 7.78846 5.3608L5.62254 3.19488V14.0625C5.62254 14.5802 5.20281 14.9999 4.68505 14.9999C4.16729 14.9999 3.74755 14.5802 3.74755 14.0625V3.20801L1.6004 5.35515C1.23429 5.72127 0.640703 5.72127 0.274592 5.35515C-0.0915308 4.98904 -0.0915308 4.39545 0.274592 4.02933L3.9567 0.347208C4.12859 0.135396 4.39101 1.12065e-05 4.68505 1.12065e-05ZM15.3124 2.16373e-05C15.8302 2.16373e-05 16.2499 0.419757 16.2499 0.937517V11.792L18.3971 9.64486C18.7632 9.27874 19.3567 9.27874 19.7229 9.64486C20.089 10.011 20.089 10.6045 19.7229 10.9706L16.0407 14.6527C15.8689 14.8646 15.6065 15 15.3124 15C15.071 15.0012 14.8279 14.9096 14.6436 14.7253L10.8831 10.965C10.5171 10.5989 10.5171 10.0054 10.8831 9.63924C11.2493 9.27312 11.8429 9.27312 12.209 9.63924L14.3749 11.8051V0.937517C14.3749 0.419757 14.7946 2.16373e-05 15.3124 2.16373e-05Z"
                            fill="#4E4E4E" />
                    </svg>
                </div>
                <div class="sort-box hidden" id="sort-box">
                    <label onclick='ApplyFilters(new filter("sort_by", 1))'>
                        <input type="radio" name="group"
                            <?php if(isset($sort_by) && $sort_by == 1) {?>checked<?php } ?> /> Giá thấp nhất
                    </label>
                    <label onclick='ApplyFilters(new filter("sort_by", 2))'>
                        <input type="radio" name="group"
                            <?php if(isset($sort_by) && $sort_by == 2) {?>checked<?php } ?> /> Giảm giá nhiều nhất
                    </label>
                    <label onclick='ApplyFilters(new filter("sort_by", 3))'>
                        <input type="radio" name="group"
                            <?php if(isset($sort_by) && $sort_by == 3) {?>checked<?php } ?> /> Đánh giá tốt nhất
                    </label>
                    <label onclick='ApplyFilters(new filter("sort_by", 4))'>
                        <input type="radio" name="group"
                            <?php if(isset($sort_by) && $sort_by == 4) {?>checked<?php } ?> /> Bán chạy nhất
                    </label>
                </div>

            </div>
        </div>

        <div class="container-sanpham">

            <div>
                <div class="danhmuc whitediv2">
                    <?php foreach($categories as $category) {extract($category); ?>
                    <p class="itemdanhmuc <?php if (isset($_GET['category_id'])) { if($_GET['category_id'] == $Id) { ?>selected<?php }} ?>"
                        onclick='ApplyFilters(new filter("category_id", <?=$Id?>))'>
                        <?=$Name?>
                    </p>
                    <?php } ?>
                </div>
            </div>

            <div class="box-product">
                <div class="list-products">
                    <?php $sps =new App\model\sanpham(); ?>
                    <?php if($products) {
                            $sp = $sps->showsp($products);
                            echo $sp;
                        
                        ?>
                    <?php } else { ?>
                    <p style="grid-column: 1 / 4; text-align:center; margin-top: 150px;">Không tìm thấy sản phẩm!</p>
                    <?php } ?>
                </div>
                <?php if($products) { ?>
                <div class="sotrang">
                    <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg"
                        onclick="changePage(1)">
                        <path
                            d="M0.358295 8.66637C0.371496 8.6545 0.389095 8.64975 0.402296 8.63788L8.88794 0.347321C9.36535 -0.115772 10.1398 -0.115772 10.6172 0.347321C10.6216 0.35207 10.6238 0.356819 10.626 0.361568C10.7416 0.464602 10.835 0.593641 10.8996 0.739672C10.9642 0.8857 10.9984 1.04519 11 1.20701L11 17.7905C10.9975 17.9553 10.9616 18.1175 10.8947 18.2656C10.8278 18.4137 10.7315 18.5442 10.6128 18.6478L10.6172 18.6526C10.377 18.8767 10.0701 19 9.75256 19C9.43506 19 9.12816 18.8767 8.88794 18.6526L0.358295 10.343C0.245958 10.2396 0.155749 10.111 0.0938921 9.96631C0.0320339 9.82158 0 9.66408 0 9.50469C0 9.3453 0.0320339 9.18781 0.0938921 9.04307C0.155749 8.89834 0.245958 8.76982 0.358295 8.66637Z"
                            fill="#4E4E4E" />
                    </svg>
                    <?php for($index = 1; $index <= ceil($total_products_count / 9); $index++) { ?>
                    <p <?php if($page == $index) {?>class="selected" <?php } ?> onclick="changePage(<?=$index?>)">
                        <?=$index?></p>
                    <?php } ?>
                    <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg"
                        onclick="changePage('<?=ceil($total_products_count / 9)?>')">
                        <path
                            d="M10.6417 8.66637C10.6285 8.6545 10.6109 8.64975 10.5977 8.63788L2.11206 0.347321C1.63465 -0.115772 0.860224 -0.115772 0.382811 0.347321C0.37841 0.35207 0.376211 0.356819 0.374011 0.361568C0.258409 0.464602 0.165045 0.593641 0.100444 0.739672C0.0358434 0.8857 0.00156357 1.04519 0 1.20701L0 17.7905C0.00246674 17.9553 0.0384235 18.1175 0.105331 18.2656C0.172239 18.4137 0.268465 18.5442 0.387211 18.6478L0.382811 18.6526C0.623026 18.8767 0.92993 19 1.24744 19C1.56494 19 1.87184 18.8767 2.11206 18.6526L10.6417 10.343C10.754 10.2396 10.8443 10.111 10.9061 9.96631C10.968 9.82158 11 9.66408 11 9.50469C11 9.3453 10.968 9.18781 10.9061 9.04307C10.8443 8.89834 10.754 8.76982 10.6417 8.66637Z"
                            fill="#4E4E4E" />
                    </svg>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
function changePage(page_index) {
    ApplyFilters(new filter("page", page_index));
}

document.getElementById("filter-button").addEventListener("click", function(e) {
    toggleFilterBox();
});

document.getElementById("sort-button").addEventListener("click", function(e) {
    toggleSortBox();
});

var max_price_filter = document.getElementById("max_price_filter");
max_price_filter.addEventListener("input", function(e) {
    updateMaxPriceLabel();
});

var min_price_filter = document.getElementById("min_price_filter");
min_price_filter.addEventListener("input", function(e) {
    updateMinPriceLabel();
});

function toggleFilterBox() {
    var filter_box = document.getElementById("filter-box");
    filter_box.classList.toggle("hidden");

    if (!document.getElementById("sort-box").classList.contains("hidden")) {
        toggleSortBox();
    }

    var filter_button = document.getElementById("filter-button");
    filter_button.style.backgroundColor = filter_box.classList.contains("hidden") ? "" : "rgba(0, 0, 0, 0.2)";
}

function toggleSortBox() {
    var sort_box = document.getElementById("sort-box");
    sort_box.classList.toggle("hidden");
    if (!document.getElementById("filter-box").classList.contains("hidden")) {
        toggleFilterBox();
    }

    var sort_button = document.getElementById("sort-button");
    sort_button.style.backgroundColor = sort_box.classList.contains("hidden") ? "" : "rgba(0, 0, 0, 0.2)";
}

function updateMaxPriceLabel() {
    var max_price_filter = document.getElementById("max_price_filter");
    var max_price_label = document.getElementById("max_price_label");
    max_price_label.innerText = "Max Price: " + (Number.parseInt(max_price_filter.value)).toLocaleString('vi-VN') +
        " vnđ";
}

function updateMinPriceLabel() {
    var min_price_filter = document.getElementById("min_price_filter");
    var min_price_label = document.getElementById("min_price_label");
    min_price_label.innerText = "Min Price: " + (Number.parseInt(min_price_filter.value)).toLocaleString('vi-VN') +
        " vnđ";
}

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
        if (filter.key == "category_id") {
            redirectToCategory = true;
            window.location.href = "/thucdon?category_id=" + filter.value;
        }
        params.set(filter.key, filter.value);
    });

    if (redirectToCategory) {
        return;
    }

    var filter_array = [];

    if (params.get("category_id") != null) {
        filter_array.push("category_id=" + params.get("category_id"));
    }
    if (params.get("search") != null) {
        filter_array.push("search=" + params.get("search"));
    }
    if (params.get("min_price") != null) {
        filter_array.push("min_price=" + params.get("min_price"));
    }
    if (params.get("max_price") != null) {
        filter_array.push("max_price=" + params.get("max_price"));
    }
    if (params.get("is_discount") != null) {
        filter_array.push("is_discount=" + params.get("is_discount"));
    }
    if (params.get("sort_by") != null) {
        filter_array.push("sort_by=" + params.get("sort_by"));
    }
    if (params.get("page") != null) {
        filter_array.push("page=" + params.get("page"));
    }

    var url = "/thucdon?" + filter_array.join("&");
    window.location.href = url;
}
    </script>
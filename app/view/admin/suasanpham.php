<!-- style trang -->
<style>
.toolbar {
    width: 100%;
    height: 35px;
    margin-bottom: 15px;
    text-align: right;
}

.toolbar .right>* {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
}

.toolbar .right {
    width: 100%;
    height: 100%;
}

.toolbar .right .save-button,
.toolbar .right .cancel-button {

    margin-left: 20px;
    height: 100%;
    background-color: var(--red);
    border-radius: 5px;
    color: white !important;
    width: 100px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    font-weight: 600;
}

.toolbar .right .save-button svg {
    margin-right: 10px;
}

.container {
    width: 100%;
    display: grid;
    grid-template-columns: auto 475px;
    gap: 20px;
    height: 440px;
}

.container .left {
    display: grid;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: 30px 40px 30px auto 30px 40px;
    background-color: white;
    border-radius: 10px;
    border: 1px solid var(--gray);
    padding: 10px;
    align-items: center;
    row-gap: 10px;

}

.container .left label {
    font-size: 18px;
    margin-left: 10px;
    margin-bottom: -5px;
}

.container .left :is(input, select, textarea) {
    margin: 0px 10px;
    height: 100%;
    resize: none;
    border-radius: 5px;
    outline: none !important;
    border: 1px solid var(--gray);
    padding: 10px;
}

.container .left input[type="checkbox"] {
    width: 30px;
    height: 30px;
}

.container .left div {
    text-align: center;
}

.container .left div>* {
    display: inline-block;
    vertical-align: middle;
    margin: 0px 10px;
}

.container .right {
    height: 100%;
    padding: 10px;
    background-color: white;
    border-radius: 10px;
    border: 1px solid var(--gray);
    overflow: hidden;
    display: grid;
    grid-template-rows: auto 40px;
    gap: 20px;
}

.container .right .img-box {
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 10px;
    border: 1px solid var(--gray);
    background-image: url('<?=$IMAGE_DIR?>/background-blank.jpg');
    text-align: center;
    position: relative;
}

.container .right img {
    height: 100%;
}

.container .right label {
    padding: 10px;
    background-color: var(--red);
    border-radius: 5px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    width: fit-content;
}

.container .right label>* {
    margin: 0px 5px;
}
</style>
<?php
$sps = new App\model\sanpham();
$dmsp = new App\model\danhmuc();
extract($_REQUEST);
$product = $sps->get_product_by_id($id);
$categories = $dmsp->get_categories();
?>
<main>
    <form method="post" action="/edit_info" enctype="multipart/form-data">
        <?php extract($product[0]); ?>
        <div class="toolbar">
            <div class="left">

            </div>
            <div class="right">
                <a class="cancel-button" href="/quanlysanpham">
                    Hủy
                </a>
                <button class="save-button" type="submit" name="edit_product">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5 0C16.299 0 21 4.70101 21 10.5C21 16.299 16.299 21 10.5 21C4.70101 21 0 16.299 0 10.5C0 4.70101 4.70101 0 10.5 0ZM10.5 5.25C10.1778 5.25 9.90989 5.48215 9.85432 5.78829L9.84375 5.90625V9.84375H5.90625C5.54382 9.84375 5.25 10.1376 5.25 10.5C5.25 10.8221 5.48215 11.0901 5.78829 11.1457L5.90625 11.1562H9.84375V15.0938C9.84375 15.4561 10.1376 15.75 10.5 15.75C10.8221 15.75 11.0901 15.5178 11.1457 15.2117L11.1562 15.0938V11.1562H15.0938C15.4561 11.1562 15.75 10.8624 15.75 10.5C15.75 10.1778 15.5178 9.90989 15.2117 9.85432L15.0938 9.84375H11.1562V5.90625C11.1562 5.54382 10.8624 5.25 10.5 5.25Z"
                            fill="white" />
                    </svg>
                    Lưu
                </button>
            </div>
        </div>
        <div class="container">
            <div class="left">
                <input type="hidden" name="product_id" value="<?=$Id?>">
                <label for="product-name" style="grid-column: 1 / 2; grid-row: 1 / 2;">Tên sản phẩm</label>
                <input required type="text" id="product-name" name="product_name"
                    style="grid-column: 1 / 2; grid-row: 2 / 3;" value="<?=$Name?>">
                <div style="grid-column: 3 / 4; grid-row: 2 / 3;">
                    <label for="product-is-special">Đặc biệt</label>
                    <input type="checkbox" name="is_special" id="product-is-special"
                        <?php if($IsSpecial) {?>checked<?php } ?>>

                </div>
                <label for="product-description" style="grid-column: 1 / 2; grid-row: 3 / 4;">Mô tả</label>
                <textarea required name="product_description" id="product-description"
                    style="grid-column: 1 / 4; grid-row: 4 / 5;"><?=$Description?></textarea>
                <label for="product-price" style="grid-column: 1 / 2; grid-row: 5 / 6;">Giá bán</label>
                <input required type="number" name="product_price" id="product-price" min="1000" step="100"
                    style="grid-column: 1 / 2; grid-row: 6 / 7;" value="<?=$Price?>">
                <label for="product-cost" style="grid-column: 2 / 3; grid-row: 5 / 6;">Giá nhập</label>
                <input required type="number" name="product_cost" id="product-cost" min="1000" step="100"
                    style="grid-column: 2 / 3; grid-row: 6 / 7;" value="<?=$Cost?>">
                <label for="product-discount" style="grid-column: 3 / 4; grid-row: 5 / 6;">Giảm giá</label>
                <input type="number" name="product_discount" id="product-discount" min="0" max="100" step="0.01"
                    style="grid-column: 3 / 4; grid-row: 6 / 7;">
                <label for="product-category" name="product_category" style="grid-column: 2 / 3; grid-row: 1 / 2;">Danh
                    mục</label>
                <select name="product_category" id="product-category" style="grid-column: 2 / 3; grid-row: 2 / 3;">
                    <?php foreach ($categories as $category) {?>
                    <option value="<?=$category['Id']?>" <?php if($CategoryId == $category['Id']) {?>selected<?php } ?>>
                        <?=$category['Name']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="right">
                <div class="img-box">
                    <img src="../../public/image/<?=$Image?>" alt="" id="preview" name='image_old'>
                    <input type="hidden" name="image_old" value="<?=$Image?>">
                </div>
                <label for="file-upload" style="cursor: pointer;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.71 5.70501L9 3.40501V12.995C9 13.2602 9.10536 13.5146 9.29289 13.7021C9.48043 13.8897 9.73478 13.995 10 13.995C10.2652 13.995 10.5196 13.8897 10.7071 13.7021C10.8946 13.5146 11 13.2602 11 12.995V3.40501L13.29 5.70501C13.383 5.79874 13.4936 5.87314 13.6154 5.9239C13.7373 5.97467 13.868 6.00081 14 6.00081C14.132 6.00081 14.2627 5.97467 14.3846 5.9239C14.5064 5.87314 14.617 5.79874 14.71 5.70501C14.8037 5.61205 14.8781 5.50145 14.9289 5.37959C14.9797 5.25773 15.0058 5.12703 15.0058 4.99501C15.0058 4.863 14.9797 4.7323 14.9289 4.61044C14.8781 4.48858 14.8037 4.37798 14.71 4.28501L10.71 0.285014C10.6149 0.193973 10.5028 0.122608 10.38 0.0750135C10.1365 -0.0250045 9.86346 -0.0250045 9.62 0.0750135C9.49725 0.122608 9.3851 0.193973 9.29 0.285014L5.29 4.28501C5.19676 4.37825 5.1228 4.48894 5.07234 4.61076C5.02188 4.73259 4.99591 4.86315 4.99591 4.99501C4.99591 5.12687 5.02188 5.25744 5.07234 5.37926C5.1228 5.50108 5.19676 5.61178 5.29 5.70501C5.38324 5.79825 5.49393 5.87221 5.61575 5.92267C5.73757 5.97313 5.86814 5.9991 6 5.9991C6.13186 5.9991 6.26243 5.97313 6.38425 5.92267C6.50607 5.87221 6.61676 5.79825 6.71 5.70501ZM19 9.99501C18.7348 9.99501 18.4804 10.1004 18.2929 10.2879C18.1054 10.4754 18 10.7298 18 10.995V16.995C18 17.2602 17.8946 17.5146 17.7071 17.7021C17.5196 17.8897 17.2652 17.995 17 17.995H3C2.73478 17.995 2.48043 17.8897 2.29289 17.7021C2.10536 17.5146 2 17.2602 2 16.995V10.995C2 10.7298 1.89464 10.4754 1.70711 10.2879C1.51957 10.1004 1.26522 9.99501 1 9.99501C0.734784 9.99501 0.48043 10.1004 0.292893 10.2879C0.105357 10.4754 0 10.7298 0 10.995V16.995C0 17.7907 0.316071 18.5537 0.87868 19.1163C1.44129 19.6789 2.20435 19.995 3 19.995H17C17.7956 19.995 18.5587 19.6789 19.1213 19.1163C19.6839 18.5537 20 17.7907 20 16.995V10.995C20 10.7298 19.8946 10.4754 19.7071 10.2879C19.5196 10.1004 19.2652 9.99501 19 9.99501Z"
                            fill="white" />
                    </svg>
                    <p>Tải ảnh lên</p>
                </label>
                <input id="file-upload" type="file" name="product_image" style="display: none;" accept="image/*">
            </div>
        </div>
    </form>
</main>

<script>
function readImage(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            var img = document.getElementById('preview');
            img.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}

var fileInput = document.getElementById('file-upload');
fileInput.addEventListener('change', function() {
    readImage(this);
});
</script>
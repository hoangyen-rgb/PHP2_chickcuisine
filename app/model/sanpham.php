<?php
namespace App\model;

class sanpham{
    private $Id = 0;
    private $Name = "";
    private $Image = "";
    private $Description = "";
    private $Price = 0;
    private $Cost = 0;
    private $Discount = "";
    private $Views = 0;
    private $Decribe = "";
    private $Mount = 0;
    private $Sale = 0;
    

    

    public function setSale($Sale){
        return  $this->Sale = $Sale;
    }
    public function getSale(){
        return  $this->Sale;
    }

    public function setMount($Mount){
        return  $this->Mount = $Mount;
    }
    public function getMount(){
        return  $this->Mount;
    }

    public function setDecribe($Decribe){
        return  $this->Decribe = $Decribe;
    }
    public function getDecride(){
        return  $this->Decribe;
    }
    
    public function setViews($Views){
        return  $this->Views = $Views;
    }
    public function getViews(){
        return  $this->Views;
    }
    
    public function setDiscount($Discount){
        return  $this->Discount = $Discount;
    }
    public function getDiscount(){
        return  $this->Discount;
    }

    public function setCost($Cost){
        return  $this->Cost = $Cost;
    }
    public function getCost(){
        return  $this->Cost;
    }

    public function setPrice($Price){
        return  $this->Price = $Price;
    }
    public function getPrice(){
        return  $this->Price;
    }

    public function setDescription($Description){
        return  $this->Description = $Description;
    }
    public function getDescription(){
        return  $this->Description;
    }

    public function setImage($Image){
        return  $this->Image = $Image;
    }
    public function getImage(){
        return  $this->Image;
    }

    public function setName($Name){
        return  $this->Name = $Name;
    }
    public function getName(){
        return  $this->Name;
    }

    public function setId($Id){
        return $this->Id = $Id;
    }
    public function getId(){
        return $this->Id;
    }
    
    public function getdata(){
        $xl = new xl_data();
        $sql = "select * from product";
        $result = $xl->readitem($sql);
        return $result;
    }
    public function get_product_by_id($product_id) {
        $xl = new xl_data();
        $sql = "SELECT * FROM product WHERE id = $product_id";
        $result = $xl->readitem($sql);
        return $result;
    }

    public function get_hot_products($limit){
        $xl = new xl_data();
        $sql = "SELECT product.*, AVG(comment.rating) as Rating FROM product LEFT JOIN comment ON product.Id = comment.ProductId 
        GROUP BY product.Id ORDER BY Views DESC".($limit == null ? "" : " LIMIT $limit");
        $result = $xl->readitem($sql);
        return $result;
    }

    public function get_discount_products($limit){
        $xl = new xl_data();
        $sql = "SELECT product.*, AVG(comment.rating) as Rating FROM product LEFT JOIN comment 
        ON product.Id = comment.ProductId GROUP BY product.Id ORDER BY 
        Discount DESC".($limit == null ? "" : " LIMIT $limit");
        $result = $xl->readitem($sql);
        return $result;
    }
    
    function get_similar_products_by_product_id($product_id, $limit = null, $page = null) {
        $xl = new xl_data();

        $sql = "SELECT p2.*, COALESCE(AVG(c.Rating), 0) AS Rating
                FROM product p1
                JOIN product p2 ON p1.categoryId = p2.categoryId
                LEFT JOIN comment c ON p2.Id = c.ProductId
                WHERE p1.Id = $product_id AND p2.Id != $product_id
                GROUP BY p2.Id";
    
        if ($limit !== null && is_numeric($limit)) {
            $limit = intval($limit);
            $sql .= " LIMIT $limit";
            
            if ($page !== null && is_numeric($page)) {
                $page = intval($page);
                $offset = ($page - 1) * $limit;
                $sql .= " OFFSET $offset";
            }
        }
    
        $result = $xl->readitem($sql);
        return $result;
    }
    public function showsp($sp){
        $kq = "";
        $SubName = "";
        
        foreach($sp as $product) {
            extract($product);
            
            $SubName = $Name;
            if(strlen($Name) >= 15) {
                $SubName = mb_substr($Name, 0, 12, 'UTF-8')."...";
            }
            
            
            if(strlen($Description) >= 80) {
                $Description = mb_substr($Description, 0, 77, 'UTF-8')."...";
            }
            
            $kq .= '
            <div class="product whitediv" >
            <img class="product-image" src="../../public/image/'.$Image.'" alt="'.$Name.'" onclick="location.href=\'/detail?id='.$Id.'\'">
<p class="product-name">'.$SubName.'</p>
<p class="product-rating">'.str_repeat('
    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z"
            fill="#FFB11B" />
    </svg>
    ', ceil($Rating)).'
</p>
<p class="product-description">'.$Description.'</p>
<div class="product-price">';

    if($Discount > 0) {
    $kq .= '
    <p class="original-price">'.number_format($Price, 0, '.', '.').' vnđ</p>
    <p class="discount-price">'.number_format($Price * (100 - $Discount) / 100, 0, '.', '.').' vnđ</p>';
    } else {
    $kq .= '
    <p class="discount-price">'.number_format($Price, 0, '.', '.').' vnđ</p>';
    }
    $kq .='<div class="product-buttons">
    <button class="buy-now" onclick="location.href=\'/giohang?id='.$Id.'\'" >Mua ngay</button>
        <button class="add-to-cart" onclick="addtocart(event, '.$Id.')">
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
        </button>
        <button class="share">
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16 2.67857C16 4.1579 14.7208 5.35714 13.1429 5.35714C12.2302 5.35714 11.4175 4.95599 10.8944 4.33152L5.61723 6.80522C5.68054 7.02679 5.71429 7.2597 5.71429 7.5C5.71429 7.74032 5.68053 7.97325 5.6172 8.19493L10.8944 10.6685C11.4175 10.044 12.2302 9.64286 13.1429 9.64286C14.7208 9.64286 16 10.8421 16 12.3214C16 13.8007 14.7208 15 13.1429 15C11.5649 15 10.2857 13.8007 10.2857 12.3214C10.2857 12.0811 10.3194 11.8482 10.3827 11.6266L5.10554 9.15289C4.58247 9.77743 3.76977 10.1786 2.85714 10.1786C1.27919 10.1786 0 8.97932 0 7.5C0 6.02067 1.27919 4.82143 2.85714 4.82143C3.76982 4.82143 4.58255 5.22261 5.10562 5.84715L10.3827 3.37346C10.3194 3.15185 10.2857 2.9189 10.2857 2.67857C10.2857 1.19924 11.5649 0 13.1429 0C14.7208 0 16 1.19924 16 2.67857Z"
                    fill="white" />
            </svg>
        </button>
    </div>
    <div class="product-discount-tag">';
        if ($Discount > 0){
        $kq .= ' <svg width="40" height="43" viewBox="0 0 40 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3.11058 42.6954C1.78157 43.4902 0 42.637 0 41.2057V6.51187C0 2.55976 2.75926 0.0456356 7.17194 0.0385553L32.7994 1.16327e-05C37.2177 -0.00704253 39.9921 2.50341 40 6.46053V41.2057C40 42.637 38.2184 43.4902 36.8894 42.6954L20 32.5955L3.11058 42.6954Z"
                fill="#C34439" />
        </svg>
        <p class="discount-percentage">'.$Discount.'%</p>';
        };
        $kq.='
    </div>
</div>
</div>';
}
return $kq;

}

// Admin 
public function ql_sp(){
    $xl = new xl_data();
    $sql = "SELECT * FROM product ORDER BY Id DESC";
    $result = $xl->readitem($sql);
    return $result;
}
function update_product($id, $name, $image, $description, $price, $cost, $discount, $IsSpecial, $categoryid) {
    $xl = new xl_data();

    // Xây dựng câu truy vấn SQL cơ bản
    $sql = "UPDATE product SET Name = '$name', Description = '$description', Price = '$price', Cost = '$cost', Discount = '$discount', IsSpecial = '$IsSpecial', Categoryid = '$categoryid'";

    // Kiểm tra và cập nhật trường Image nếu giá trị mới được cung cấp
    if(!empty($image)) {
        $sql .= ", Image = '$image'";
    }

    $sql .= " WHERE Id = '$id'";

    $xl->item($sql);
}

function insert_product($name, $image, $description, $price, $cost, $discount, $IsSpecial, $categoryid) {
    $xl = new xl_data();

    // Xây dựng câu truy vấn SQL cơ bản
    $sql = "INSERT INTO product (Name, Image, Description, Price, Cost, Discount, IsSpecial, Categoryid) VALUES ('$name', '$image', '$description', '$price', '$cost', '$discount', '$IsSpecial', '$categoryid')";

    $xl->item($sql);
}

function delete_product($id) {
    $xl = new xl_data();
    $sql = "DELETE FROM product WHERE Id = '$id'";
    $xl->item($sql);
}

function get_product_by_filter($category_id = null, $keyword = null, $min_price = null, $max_price = null, $is_discount = false, $limit = null, $page = null, $sort = null) {
    $xl = new xl_data();
    $condition = "";
    if ($category_id != null) {
        $condition .= " AND product.CategoryID = $category_id";
    }
    if ($min_price != null) {
        $condition .= " AND (product.Price * (100-product.Discount) /100) >= $min_price";
    }
    if ($max_price != null) {
        $condition .= " AND (product.Price * (100-product.Discount) /100) <= $max_price";
    }
    if ($is_discount) {
        $condition .= " AND product.Discount > 0";
    }
    if($keyword != null) {
        $condition .= " AND product.Name LIKE '%".$keyword."%'";
    }
    $condition = $condition == "" ? "" : substr($condition , 4);
    $filter = ($condition != "" ? " WHERE (".$condition.")" : "");
    $sql = "SELECT product.*, AVG(comment.rating) as Rating , SUM(orderdetail.Quantity) as OrderCount FROM product
    LEFT JOIN comment ON product.id = comment.productid
    LEFT JOIN orderdetail ON product.id = orderdetail.productid".
    $filter
    ." GROUP BY product.id";

    if ($sort != null) {
        switch ($sort) {
            case 1 : 
                $sql.= " ORDER BY (product.Price * (100-product.Discount) /100) ASC";
                break;
            case 2 : 
                $sql.= " ORDER BY Discount DESC";
                break;
            case 3 :
                $sql.= " ORDER BY Rating DESC";
                break;
            case 4 :
                $sql.= " ORDER BY OrderCount DESC";
                break;
        }
    }
    if ($limit != null) {
        $sql.= " LIMIT $limit";
    }
    if ($page != null) {
        $offset = ($page-1)*$limit;
        $sql.= " OFFSET $offset";
    }
    return ($xl->readitem($sql));
}
}
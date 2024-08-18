<?php
namespace App\model;

class danhmuc {
    private $Id=0;
    private $Name="";
    private $Image="";

    public function setId($Id){
        return $this ->Id = $Id;
    }
    public function getId(){
        return $this ->Id;
    }

    public function setName($Name){
        return $this ->Name = $Name;
    }
    public function getName(){
        return $this ->Name;
    }

    public function setImage($Image){
        return $this ->Image = $Image;
    }
    public function getImage(){
        return $this ->Image;
    }
    public function get_categories($limit = null) {
        $xl = new xl_data();
        $sql = "SELECT * FROM category".($limit == null ? "" : " LIMIT $limit");
        $result = $xl->readitem($sql);
        return $result;
    }
    public function get_hot_categories($limit=null){
        $xl = new xl_data();
        $sql = "SELECT category.Id, category.Name, category.Image, SUM(product.Views) as total_views FROM product JOIN category on product.CategoryId = category.Id GROUP BY category.Id ORDER BY total_views DESC".($limit == null ? "" : " LIMIT $limit");
        $result = $xl->readitem($sql);
        return $result;
    }
    public function get_product_count_by_category_id($category_id) {
        $xl = new xl_data();
        $sql = "SELECT COUNT(product.Id) FROM product WHERE CategoryId = $category_id GROUP BY product.CategoryId";
        $result = $xl->readitem($sql);

        if ($result !== false && count($result) > 0) {
            return $result[0];
        }

        return 0;
    }
    function get_category_by_product_id($product_id) {
        $xl = new xl_data();
        $sql = "SELECT category.* FROM product INNER JOIN category ON product.CategoryId = category.Id WHERE product.Id = $product_id";
        $result = $xl->readitem($sql);
        return $result;
    }
    public function show_hot_categories($hot_categories) {
    $output = '';
    foreach ($hot_categories as $category) {
        extract($category);
        $output .= '
        <a class="category" href="/thucdon?category_id=' . $Id . '">
            <img class="category-image" src="../../public/image/' . $Image . '" alt="">
            <p class="category-name">' . $Name . '</p>
            <p class="category-product-count">(<?=get_product_count_by_category_id($Id) ?> món)</p>
<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
        d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z"
        fill="white" />
</svg>
</a>';
}

return $output;
}
}

// Admin


?>
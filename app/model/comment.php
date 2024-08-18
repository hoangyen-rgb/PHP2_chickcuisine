<?php
namespace App\model;
class comment{
    private $Id=0;
    private $Content="";
    private $Rating="";
    private $Time="";
    private $UserId="";
    private $ProductId="";

    public function setId($Id){
        return  $this->Id = $Id;
    }
    public function getId(){
        return  $this->Id;
    }

    public function setContent($Content){
        return  $this->Content = $Content;
    }
    public function getContent(){
        return  $this->Content;
    }

    public function setRating($Rating){
        return  $this->$Rating = $Rating;
    }
    public function getRating(){
        return  $this->Rating;
    }

    public function setTime($Time){
        return  $this->Time = $Time;
    }
    public function getTime(){
        return  $this->Time;
    }

    public function setUserId($UserId){
        return  $this->UserId = $UserId;
    }
    public function getUserId(){
        return  $this->UserId;
    }

    public function setProductId($ProductId){
        return  $this->ProductId = $ProductId;
    }
    public function getProductId(){
        return  $this->ProductId;
    }

    function get_comment_by_product_id($product_id, $rating = null) {
        $xl = new xl_data();
        $sql = "SELECT * FROM comment join user on 
        comment.UserId = User.Id
        WHERE ProductId = $product_id";
        if($rating != null) {
            $sql .= " AND Rating = $rating";
        }
        $result = $xl->readitem($sql);
        return $result;
    }
}
 
?>
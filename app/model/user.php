<?php
namespace App\model;
class user{
    private $Id=0;
    private $Email="";
    private $Password="";
    private $Avatar="";
    private $Name="";
    private $PhoneNumber="";
    private $Point=0;
    private $Role=0;
    private $Address;

    public function setId($Id){
        return  $this->Id = $Id;
    }
    public function getId(){
        return  $this->Id;
    }

    public function setEmail($Email){
        return  $this->Email = $Email;
    }
    public function getEmail(){
        return  $this->Email;
    }

    public function setPassword($Password){
        return  $this->Password = $Password;
    }
    public function getPassword(){
        return  $this->Password;
    }

    public function setAvatar($Avatar){
        return  $this->Avatar = $Avatar;
    }
    public function getAvatar(){
        return  $this->Avatar;
    }

    public function setName($Name){
        return  $this->Name = $Name;
    }
    public function getName(){
        return  $this->Name;
    }

    public function setPhoneNumber($PhoneNumber){
        return  $this->PhoneNumber = $PhoneNumber;
    }
    public function getPhoneNumber(){
        return  $this->PhoneNumber;
    }

    public function setPoint($Point){
        return  $this->Point = $Point;
    }
    public function getPoint(){
        return  $this->Point;
    }

    public function setRole($Role){
        return  $this->Role = $Role;
    }
    public function getRole(){
        return  $this->Role;
    }
    
    public function setAddress($Address){
        return  $this->Address = $Address;
    }
    public function getAddress(){
        return  $this->Address;
    }

    public function get_users() {
        $xl = new xl_data();
        $sql = "SELECT * FROM user WHERE Role <> 0";
        $result = $xl->readitem($sql);
        return $result;
    }

    public function check_existing_phone_number($phoneNumber) {
        $xl = new xl_data();
        $sql = "SELECT PhoneNumber FROM user WHERE PhoneNumber = '$phoneNumber'";
        $result = $xl->readitem($sql);
        return !empty($result);
    }

    function get_user_id_by_email($email) {
        $xl = new xl_data();
        $sql = "SELECT Id FROM user WHERE Email = '".$email."'";
        $result = $xl->readitem($sql);
        return $result;
    }
    public function get_user_by_email($email) {
        $xl = new xl_data();
        $sql = "SELECT * FROM user WHERE Email = '".$email."'";
        $result = $xl->readitem($sql);
        return $result;
    }

    public function get_user_by_phonenumber($phonenumber) {
        $xl = new xl_data();
        $sql = "SELECT * FROM user WHERE PhoneNumber = '".$phonenumber."'";
        $result = $xl->readitem($sql);
        return $result;
    }

    public function get_user_by_id($user_id) {
        $xl = new xl_data();
        $sql = "SELECT * FROM user WHERE Id = $user_id";
        $result = $xl->readitem($sql);
        return $result;
    }
    
    public function get_latest_user_id() {
        $xl = new xl_data();
        $result = $xl->item("SELECT MAX(Id) AS max_id FROM `user`");
        return $result[0]['max_id'];
    }

    public function insert_user($email, $password, $phonenumber, $role) {
        $xl = new xl_data();
        $sql = "INSERT INTO user (Email, Password, PhoneNumber, Role, Point) 
        VALUES ('" . $email . "', '" . $password . "', '" . $phonenumber . "', '" . $role . "', 500)";
        $xl->item($sql);    
    }

 
    function update_user_name($id, $name) {
        $xl = new xl_data();
        $sql = "UPDATE user SET Name = '$name' WHERE Id = $id";
        $xl->item($sql);
    }
    
    function update_user_avatar($id, $avatar) {
        $xl = new xl_data();
        $sql = "UPDATE user SET Avatar = '$avatar' WHERE Id = $id";
        $xl->item($sql);
    }
    
    function update_user_phone_number($id, $phone_number) {
        $xl = new xl_data();
        $sql = "UPDATE user SET PhoneNumber = '$phone_number' WHERE Id = $id";
        $xl->item($sql);
    }
    
    function update_user_password($id, $password) {
        $xl = new xl_data();
        $sql = "UPDATE user SET Password = '$password' WHERE Id = $id";
        $xl->item($sql);
    }
    
}
 
?>
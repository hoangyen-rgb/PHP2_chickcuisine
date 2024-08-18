<?php

namespace App\controller;
use PDOException;
use App\model\sanpham;
use App\model\user;
use App\model\order;
// use App\model\comment;
use App\model\xl_data;
use App\model\giohang;
use App\model\danhmuc;
use App\model\thongke;





class Controller{
    public function index(){
      include "../PHP2/app/view/user/header.php";
      include "../PHP2/app/view/user/home.php";
      include "../PHP2/app/view/user/footer.php";
    }
    public function detail(){
      $sp= new sanpham();
      $sp= $sp->get_product_by_id($_GET['id']);
      include "../PHP2/app/view/user/header.php";
      include_once '../PHP2/app/view/user/detail.php';
      include "../PHP2/app/view/user/footer.php";
    }
  
    public function register() {
        
        $user = new user();
        $mail_used = false;
        $phonenumber_used = false;
        include "../PHP2/app/view/user/header.php";
        include_once '../PHP2/app/view/user/dangky.php';
        include "../PHP2/app/view/user/footer.php";
        extract($_REQUEST);
        if (isset($_POST['submit']) && ($_POST['submit']) ) {
            // echo ($email.$phonenumber.$password);
            // var_dump($user->get_user_by_email($email));
            if ($user->get_user_by_email($email)) {
                $mail_used = true;
            }
            if ($user->get_user_by_phonenumber($phonenumber)) {
                $phonenumber_used = true;
                
            }
            if($mail_used == false && $phonenumber_used == false) {
                $user->insert_user($email, password_hash($password, PASSWORD_DEFAULT), $phonenumber, 1);
                $_SESSION['LOGGED_IN_USER_ID'] = $user->get_user_id_by_email($email);
                header("location: /");
                // var_dump($_SESSION['LOGGED_IN_USER_ID']);
                exit;
            }

        } 
    }

    public function login() {
        $user = new user();
        extract($_REQUEST);
        // $users = $user->get_users();
        $wrong_pass = false; // Initialize the variable
        if (isset($email) && isset($password)) {
            $user = $user->get_user_by_email($email);
            var_dump($user);
            if ($user) {
                if (password_verify($password, $user[0]['Password'])) {
                    $_SESSION['LOGGED_IN_USER_ID'] = $user;
                    header("location: /trangchu");
                } else {
                    $wrong_pass = true;
                }
            }    
        }
        include_once '../PHP2/app/view/user/header.php';
        include_once '../PHP2/app/view/user/dangnhap.php';
        include_once '../PHP2/app/view/user/footer.php';
    }

    public function account() {
        $MESSAGE = '';
        $nd = new user();
        $dh = new order();
        $xl_data = new xl_data();
        // var_dump($_SESSION['LOGGED_IN_USER_ID'][0]['Id']);
        extract($_REQUEST);
        $Id_user = $_SESSION['LOGGED_IN_USER_ID'][0]['Id'];
        $orders = $dh->get_orders_by_user_id($Id_user);
        // var_dump($orders);
        // var_dump($order_id);
        $user = $nd->get_user_by_id($Id_user);
        
        $order_id = isset($order_id) ? $order_id : null;

        if (isset($logout)) {
            $_SESSION['LOGGED_IN_USER_ID'] = null;
            header("location: /trangchu");
        }
        extract($user);
        if (isset($update_name) && $update_name) {
            $nd->update_user_name($Id, $update_name);
        }
        if (isset($_FILES['update_avatar']) && $_FILES['update_avatar']['name']) {
            $targetFile = "./public/image/user/" . basename($_FILES["update_avatar"]["name"]);
            move_uploaded_file($_FILES["update_avatar"]["tmp_name"], $targetFile);
            $nd->update_user_avatar($Id, basename($_FILES["update_avatar"]["name"]));
        }
        if (isset($update_phone_number) && $update_phone_number) {
            // Kiểm tra số điện thoại mới có trùng với số điện thoại đã có trong cơ sở dữ liệu không
            $isPhoneNumberExists = $nd->check_existing_phone_number($update_phone_number);
            
            if ($isPhoneNumberExists == $update_phone_number) {
                // Số điện thoại đã tồn tại trong cơ sở dữ liệu, hiển thị cảnh báo
                echo "<script>alert('Số điện thoại đã tồn tại. Vui lòng chọn số điện thoại khác.');</script>";
            } else {
                // Số điện thoại không trùng, tiến hành cập nhật và hiển thị cảnh báo
                $nd->update_user_phone_number($Id, $update_phone_number);
                echo "<script>alert('Số điện thoại đã được cập nhật.');</script>";
            }
        }
        if (isset($update_password) && $update_password) {
            if (password_verify($old_password, $user['Password'])) {
                $nd->update_user_password($Id, password_hash($update_password, PASSWORD_DEFAULT));
                $MESSAGE .= "Mật khẩu đã được cập nhật.";
            } else {
                $MESSAGE .= "Mật khẩu cũ không đúng!";
            }
        }
        if (isset($update_address)) {
            $new_address = $sonha . "<!>" . $khupho . "<!>" . $xa . "<!>" . $huyen . "<!>" . $tinh . "<!>";
            $sql = "UPDATE user SET Address = ? WHERE Id = ?";
            $params = array($new_address, $_SESSION['LOGGED_IN_USER_ID'][0]['Id']);
            $xl_data->item($sql, $params);
        }
        if (isset($cancel_order_id)) {
            $order->cancel_order($cancel_order_id);
        }
        if (isset($_GET['xulydonhang'])) {
            $order_id = isset($_GET['id']) ? $_GET['id'] : null;
            $status = isset($_GET['status']) ? $_GET['status'] : null;
    
            if ($status !== null && $order_id !== null) {
                $sql = "UPDATE `order` SET Status = $status WHERE Id = $order_id";
                $xl_data->item($sql);
                header("location: /taikhoan");
                // $MESSAGE .= "Bạn đã huỷ đơn hàng mã số:$order_id thành công!";
            }
        }
        include_once '../PHP2/app/view/user/header.php';
        include_once '../PHP2/app/view/user/taikhoan.php';
        include_once '../PHP2/app/view/user/footer.php';

    }
    
    public function cart()
    {   $_SESSION['message'] = false;
        $gh = new giohang();
        $sps = new sanpham();
        $nd = new user();
        $dh = new order();
        // $user_id = $nd->get_latest_user_id();
        // var_dump($user_id);
        // Kiểm tra xem tham số 'id' có được đặt hay không
        if (isset($_GET['id'])) {
            // Đặt ID của sản phẩm
            $sps->setId($_GET['id']);
        
            // Lấy thông tin sản phẩm theo ID
            $sp_mot = $sps->get_product_by_id($sps->getId());
            
            // Kiểm tra xem sản phẩm có tồn tại hay không
            if (!empty($sp_mot)) {
                // Tạo một mảng cho sản phẩm
                $sp = [
                    'Id' => $sp_mot[0]['Id'],
                    'Name' => $sp_mot[0]['Name'],
                    'Image' => $sp_mot[0]['Image'],
                    'Price' => $sp_mot[0]['Price'],
                    'Discount' => $sp_mot[0]['Discount'],
                    'Quantity' => 1 // Đặt số lượng ban đầu là 1
                ];
        
                // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng hay không
                $vitri = $gh->kiemtra($sp['Id']);
        
                if ($vitri == -1) {
                    // Sản phẩm mới, thêm vào giỏ hàng
                    $_SESSION['cart'][] = $sp;
                    // echo 'Đã thêm sản phẩm vào giỏ hàng';
                    header("location: /giohang");
                } else {
                    // Sản phẩm đã tồn tại, tăng số lượng lên
                    $_SESSION['cart'][$vitri]['Quantity']++;
                    // echo 'Sản phẩm trùng nhau, đã tăng số lượng';
                }
            } else {
                // Xử lý trường hợp sản phẩm không tồn tại
                // (ví dụ: hiển thị thông báo lỗi)
            }
            
        }
        // xoa gio hang 
        if (isset($_REQUEST['del'])) {
            // echo "Nhận yêu cầu xóa."; // Lệnh debug
            $id_del = $_REQUEST['del'];
            $vitri = $gh->kiemtra($id_del);
            
            // echo "Vị trí sản phẩm: " . $vitri; // Lệnh debug
            
            if ($vitri !== -1) {
                if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                    // unset($_SESSION['cart']);
                    unset($_SESSION['cart'][$vitri]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']); // Đặt lại các khóa mảng
                    
                    // echo "Đã xóa sản phẩm thành công."; // Lệnh debug
                }
            }
        }
        // thanh toan
        
        if (isset($_POST['paybutton'])) {
            $user_id = null;
            $total_price = 0;
            $date = date("Y-m-d H:i:s");
            $note = $_POST['note'];
            $status = 1;
            $cart = $_SESSION['cart'];
            $recipientname = $_POST['orderer_name'];
            $recipientphonenumber = $_POST['orderer_phone_number'];
            $recipientaddress = $_POST['orderer_address'];
        
            // Assuming $nd is an instance of the xl_data class
            if (isset($_SESSION['LOGGED_IN_USER_ID'])) {
                 $user_id = $_SESSION['LOGGED_IN_USER_ID'][0]['Id'];
             } else {
                 $nd->insert_user(null, null, null, 0);
                 $user_id = $nd->get_latest_user_id();
             }
            // var_dump();
            // $id_order = $dh->insert_order($total_price, $note, $date, 1, $user_id, $recipientname, $recipientphonenumber, $recipientaddress);
            // foreach ($cart as $product_in_cart) {
            //     $product = $sps->get_product_by_id($product_in_cart['Id']);
            //     extract($product);
            //     $dh->insert_order_detail($product_in_cart['Quantity'], ($Price * (100 - $Discount) / 100), $id_order, $Id);
            // }
            
            
            // var_dump($id_order);
            $dh->insert_order($total_price, $note, $date, $status, $user_id, $recipientname, $recipientphonenumber, $recipientaddress);
            if ($user_id !== null) {
                foreach ($cart as $item) {
                    // Assuming $sps is an instance of the xl_data class
                    $product = $sps->get_product_by_id($item['Id']);
                    if ($product !== null) {
                        $Discount = $product[0]['Discount'];
                        $Price = $product[0]['Price'];
                        $Id = $product[0]['Id'];
        
                        if ($Discount == 0) {
                            $total_price += $Price * $item['Quantity'];
                        } else {
                            $total_price += ($Price * (100 - $Discount) / 100) * $item['Quantity'];
                        }
                        
                        $id_order = $dh->get_latest_order_id();
                        // Assuming $dh is an instance of the xl_data class
                        $dh->insert_order_detail($item['Quantity'], ($Price * (100 - $Discount) / 100), $id_order, $Id);
                    } else {
                        echo "Error: Unable to create order details for an invalid product.";
                    }
                }
            } else {
                echo "Error: Unable to retrieve the latest order ID.";
            }
            $gh->clear_cart_by_user_id($user_id);
            $_SESSION['message'] = true;
            $_SESSION['cart'] = null;
        }
    
    // Bao gồm các view cần thiết
    include "../PHP2/app/view/user/header.php";
    include "../PHP2/app/view/user/giohang.php";
    include "../PHP2/app/view/user/footer.php";
    }

    public function thucdon(){
        $sps = new sanpham();
        // $dh = new order();
        $dm = new danhmuc();
        // $dh = new order();
        extract($_REQUEST);
        $hot_categories = $dm->get_hot_categories(3);
        $categories = $dm->get_categories(null);
    
        $filter_by_category = isset($category_id) ? $category_id : null;
        $filter_by_keyword = isset($search) ? $search : null;
        $filter_by_min_price = isset($min_price) ? $min_price : null;
        $filter_by_max_price = isset($max_price) ? $max_price : null;
        $filter_by_discount = isset($is_discount) ? ($is_discount == "true" ? true : false) : false;
        $page = isset($page) ? $page : 1;
        $limit = 12;
        $sort = isset($sort_by) ? $sort_by : null;
        $products = $sps->get_product_by_filter($filter_by_category, $filter_by_keyword, $filter_by_min_price, $filter_by_max_price, $filter_by_discount, $limit, $page, $sort);
        $total_products = $sps->get_product_by_filter($filter_by_category, $filter_by_keyword, $filter_by_min_price, $filter_by_max_price, $filter_by_discount, null, null, $sort);
        $total_products_count = count($total_products);

        include_once '../PHP2/app/view/user/header.php';
        include_once '../PHP2/app/view/user/thucdon.php';
        include_once '../PHP2/app/view/user/footer.php';
    }

// public function goi_email()
// {
// include "../PHP2/app/view/user/goiemail.php";

// }

// Admin
}
class AdminController{

    public function dn(){
        extract($_REQUEST);
        $message = ""; // Biến lưu trữ thông báo
        $nd = new user();
        if (isset($email) && isset($password)) {
            $admin = $nd->get_user_by_email($email);
            if ($admin) {
                if (password_verify($password, $admin[0]['Password']) && $admin[0]['Role'] == 2) {
                    $_SESSION['LOGGED_IN_ADMIN_ID'] = $admin[0]['Id'];
                    header("Location: admin/thongke");
                } else {
                    echo "<script>alert('Mật khẩu sai rồi má !')</script>";
                }
            } else {
                echo "<script>alert('Ủa phải thằng cha addmin ko zợ :^ ')</script>";
                
            }
        }
        include "../PHP2/app/view/admin/dangnhap.php";

    }

    public function thong_ke(){
        $tk = new thongke();
        
        if (isset($_SESSION['LOGGED_IN_ADMIN_ID'])) {
            extract($_REQUEST);
            $time_frame = isset($time_frame) ? $time_frame : 'current';
            $interval = isset($interval) ? $interval : 'month';
            $revenue =  $tk->get_revenue($time_frame, $interval);
            // var_dump($interval);
            // var_dump($revenue);
            $total_orders = $tk->get_total_orders($time_frame, $interval);
            // var_dump($total_orders);
            $interval_name = ($interval == "day") ? "ngày" : (($interval == "week") ? "tuần" : "tháng");
            $time_frame_name = ($time_frame == "previous") ? "trước" : "hiện tại";
    
            $profit = $tk->get_profit($time_frame, $interval);
            $total_products_cost = $tk->get_total_products_cost($time_frame, $interval);
    
            $revenue_statistic = $tk->get_current_month_revenue_statistic($time_frame, $interval);
    
            $cancelled_orders_count = $tk->get_cancelled_orders_count($time_frame, $interval);
            $successful_orders_count = $tk->get_successful_orders_count($time_frame, $interval);
            // var_dump($cancelled_orders_count);
            // var_dump($successful_orders_count);
            $cancelled_orders_percentage = ($successful_orders_count[0]["COUNT(Id)"] + $cancelled_orders_count[0]["COUNT(Id)"]) != 0 ?
            $cancelled_orders_count[0]["COUNT(Id)"] / ($successful_orders_count[0]["COUNT(Id)"] + $cancelled_orders_count[0]["COUNT(Id)"]) * 100 : 0;
            $successful_orders_percentage = ($successful_orders_count[0]["COUNT(Id)"] + $cancelled_orders_count[0]["COUNT(Id)"]) != 0 ? 
            $successful_orders_count[0]["COUNT(Id)"] / ($successful_orders_count[0]["COUNT(Id)"] + $cancelled_orders_count[0]["COUNT(Id)"]) * 100 : 0;
            // // Giá trị tối đa của biểu đồ
            $max_revenue_statistic_value = 200000;
            include "../PHP2/app/view/admin/layout.php";
            include "../PHP2/app/view/admin/thongke.php";
        } else {
            header("location: /admin");
            echo "<script>alert('Đăng nhập admin mới vào được má ơi')</script>";
            exit();
        }
    }
    public function qlsp(){
        include "../PHP2/app/view/admin/layout.php";
        include "../PHP2/app/view/admin/quanlysanpham.php";
    }
    
    public function editsp(){
    include "../PHP2/app/view/admin/layout.php";
    include "../PHP2/app/view/admin/suasanpham.php";
    }
    
    public function edit_info() {
    $sp = new sanpham();
    $Id = $_POST['product_id'];
    $Name = $_POST['product_name'];
    $Image = $_POST['image_old'];
    $Description = $_POST['product_description'];
    $Price = $_POST['product_price'];
    $Cost = $_POST['product_cost'];
    $Discount = $_POST['product_discount'];
    $IsSpecial = $_POST['is_special'];
    $CategoryId = $_POST['product_category'];
    
    if (isset($_FILES['product_image'])) {
    $path = './public/image';
    $target_file = $path . '/' . $_FILES['product_image']['name'];
    
    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {
    echo '<script>
    console.log("Update thành công");
    </script>';
    } else {
    echo '<script>
    console.log("Update thất bại");
    </script>';
    }
    
    // Delete the old image file if it exists
    if (file_exists($path . '/' . $_POST['image_old'])) {
    unlink($path . '/' . $_POST['image_old']);
    }
    
    // Set the Image variable to the updated image filename
    $Image = $_FILES['product_image']['name'];
    }
    
    $sp->update_product($Id, $Name, $Image, $Description, $Price, $Cost, $Discount, $IsSpecial, $CategoryId);
    
    header("location: /quanlysanpham");
    }
    
    public function del_info() {
    $sp = new sanpham();
    $Id = $_GET['id'];
    
    try {
    $sp->delete_product($Id);
    header("Location: /quanlysanpham");
    exit();
    } catch (PDOException $e) {
    // Xử lý lỗi vi phạm ràng buộc khóa ngoại
    if ($e->getCode() === '23000') {
    // Hiển thị thông báo lỗi bằng JavaScript
    echo '<script>
    alert("Không thể xóa sản phẩm vì có các comment liên quan.");
    </script>';
    } else {
    // Đối với các ngoại lệ PDO khác, xử lý tùy theo yêu cầu
    // Hiển thị hoặc ghi nhật ký thông báo lỗi, chuyển hướng người dùng, vv.
    echo '<script>
    alert("Đã xảy ra lỗi khi xóa sản phẩm.");
    </script>';
    }
    echo '<script>
    alert("Bạn đã xoá thành công sản phẩm.");
    </script>';
    header("Location: /quanlysanpham");
    exit();
    }
    }

    public function qldm(){
        include "../PHP2/app/view/admin/layout.php";
        include "../PHP2/app/view/admin/quanlydanhmuc.php";
    }

    
    
    public function themsp(){
    include "../PHP2/app/view/admin/layout.php";
    include "../PHP2/app/view/admin/themsanpham.php";
    }
    
    public function themsp_info() {
    if (isset($_POST['add_product'])) {
    $name = $_POST['product_name'];
    $description = $_POST['product_description'];
    $price = $_POST['product_price'];
    $cost = $_POST['product_cost'];
    $discount = $_POST['product_discount'];
    $is_special = isset($_POST['is_special']) ? 1 : 0;
    $category_id = $_POST['product_category'];
    
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
    $image = $_FILES['product_image']['name'];
    $target_directory = './public/image';
    $target_file = $target_directory . '/' . basename($image);
    
    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {
    $sp = new sanpham();
    $sp->insert_product($name, $image, $description, $price, $cost, $discount, $is_special, $category_id);
    echo "Ảnh đã add vào.";
    header("Location: /quanlysanpham");
    exit();
    } else {
    echo "Không thể di chuyển tệp ảnh.";
    }
    } else {
    echo "Hình ảnh không hợp lệ.";
    }
    }
    }

    public function qldh()
    {
        $order = new order();  // Giả sử lớp order đã tồn tại
        $xl_data = new xl_data();  // Giả sử lớp xl_data đã tồn tại
        extract($_REQUEST);
        $tab = isset($tab) ? $tab : "new";
        $orders = null;
        $TotalPrice = 0;
        switch ($tab) {
            case "cancelled":
                $orders = $order->get_order_by_status(5);
                break;
            case "delivering":
                $orders = array_merge($order->get_order_by_status(3), $order->get_order_by_status(4));
                break;
            case "preparing":
                $orders = $order->get_order_by_status(2);
                break;
            default:
                $orders = $order->get_order_by_status(1);
                break;
        }
        $order_id = isset($order_id) ? $order_id : ($orders ? $orders['Id'] : null);
        $order_focus = $order_id ? $order->get_order_by_id($order_id) : null;
        if (isset($_GET['xulydonhang'])) {
            $order_id = isset($_GET['id']) ? $_GET['id'] : null;
            $status = isset($_GET['status']) ? $_GET['status'] : null;
    
            if ($status !== null && $order_id !== null) {
                $sql = "UPDATE `order` SET Status = $status WHERE Id = $order_id";
                $xl_data->item($sql);
    
                $sql = "SELECT TotalPrice, UserId FROM `order` WHERE Id = $order_id";
                $row = $xl_data->item($sql);
    
                if (!empty($row) && isset($row['TotalPrice']) && isset($row['UserId'])) {
                    $TotalPrice = $row['TotalPrice'];
                    $UserId = $row['UserId'];
    
                    $Point = ceil($TotalPrice / 1000);
                    $sql = "UPDATE user SET Point = Point + $Point WHERE Id = $UserId";
                    $xl_data->item($sql);
                }
                header("location: quanlydonhang");
            }
        }
        include "../PHP2/app/view/admin/layout.php";
        include "../PHP2/app/view/admin/quanlydonhang.php";
    }
}





?>
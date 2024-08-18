<?php
    ob_start();
    session_start();
    // khoi tao gio hang rong 
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
    require_once(__DIR__.'/public/router.php');
    require_once(__DIR__.'/app/controller/index.php');
    require_once realpath('vendor/autoload.php');

    
    use App\controller\Controller;
    use App\controller\AdminController;
    $router = new Router();
    // User
    $router->get('/',[Controller::class,'index']);
    $router->get('/trangchu', [Controller::class, 'index']);
    $router->get('/detail',[Controller::class,'detail']);
    $router->get('/dangky',[Controller::class,'register']);
    $router->post('/dangky',[Controller::class,'register']);
    $router->get('/dangnhap',[Controller::class,'login']);
    $router->post('/dangnhap',[Controller::class,'login']);
    $router->get('/taikhoan',[Controller::class,'account']);
    $router->post('/taikhoan',[Controller::class,'account']);
    $router->get('/giohang',[Controller::class,'cart']);
    $router->post('/giohang',[Controller::class,'cart']);
    $router->get('/goi_email',[Controller::class,'goiemail']);
    $router->get('/thucdon',[Controller::class,'thucdon']);
    $router->post('/thucdon',[Controller::class,'thucdon']);
    
    // Admin
    $router->get('/admin',[AdminController::class,'dn']);
    $router->post('/admin',[AdminController::class,'dn']);

    $router->get('/admin/thongke',[AdminController::class,'thong_ke']);
    // $router->post('/admin/thongke',[AdminController::class,'thong_ke']);

    $router->get('/admin/quanlysanpham',[AdminController::class,'qlsp']);
    // $router->post('/admin/quanlysanpham',[AdminController::class,'qlsp']);
    $router->get('/admin/suasanpham',[AdminController::class,'editsp']);
    $router->post('/admin/edit_info',[AdminController::class,'edit_info']);
    $router->get('/admin/del_info',[AdminController::class,'del_info']);
    $router->post('/admin/del_info',[AdminController::class,'del_info']);
    $router->get('/admin/themsanpham',[AdminController::class,'themsp']);
    $router->post('/admin/themsp_info',[AdminController::class,'themsp_info']);

    $router->get('/admin/quanlydanhmuc',[AdminController::class,'qldm']);



    $router->get('/admin/quanlydonhang',[AdminController::class,'qldh']);
    $router->post('/admin/quanlydonhang',[AdminController::class,'qldh']);
    echo $router->resolve($_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD']));
    
?>
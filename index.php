<?php
//models
require_once "models/connection.php";
require_once "models/hang_hoa.php";
require_once "models/loai.php";
require_once "models/taikhoan.php";
require_once "models/binh-luan.php";
require_once "models/thong-ke.php";




//controllers
require_once "controllers/hoidap_controller.php";
require_once "controllers/gopy_controller.php";
require_once "controllers/controller.php";
require_once "controllers/home_controller.php";
require_once "controllers/errors_controller.php";
require_once "controllers/about_controller.php";
require_once "controllers/contact_controller.php";
require_once "controllers/hang_hoa_controller.php";
require_once "controllers/loai_hang_controller.php";
require_once "controllers/tai_khoan_controller.php";
require_once "controllers/binh_luan_controller.php";
require_once "controllers/thong_ke_controller.php";
require_once "controllers/admin_home_controller.php";

session_start();
//Lấy thông tin controller từ URL
$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';

switch ($ctr) {
    case '/':
    case 'home': //
        show_hang_hoa_home();
        // show_home();
        break;
    case 'giohang': //
        show_about();
        break;
    case 'lienhe': //
        show_contact();
        break;
    case 'gopy': //
        show_gopy();
        break;
    case 'hoidap': //
        show_hoidap();
        break;
    case 'admin-members': //
        show_admin_members();
        break;
    case 'del-member': //
        delete_member();
        break;
    case 'hang-hoa': //
        show_hang_hoa();
        break;
    case 'add-hang-hoa': //
        add_hang_hoa();
        break;
    case 'save_add_hang_hoa':
        save_add_hang_hoa(); //
        break;
    case 'admin-hang-hoa': //
        show_admin_hang_hoa();
        break;
    case 'edit-hang-hoa': //
        edit_hang_hoa();
        break;
    case 'update-hang-hoa': //
        update_hang_hoa();
        break;
    case 'del-hang-hoa': //
        del_hang_hoa();
        break;
    case 'loai-hang':
        show_loai_hang();
        break;
    case 'add-loai':
        add_loai();
        break;
    case 'save-add-loai':
        save_add_loai();
        break;
    case 'show-admin-loai':
        show_admin_loai();
        break;
    case 'edit-loai':
        edit_loai();
        break;
    case 'update-loai':
        update_loai();
        break;
    case 'delete-loai':
        delete_loai();
        break;
        ///////////////////////////////
    case 'product-detail':
        show_product_detail($_GET['ma_hh']);
        break;
    case 'product':
        show_hang_hoa_product($_GET['ma_loai']);
        break;
    case 'search-result':
        show_result($_POST['search-key']);
        break;
    case 'show-dang-ky':
        add_user();
        break;
    case 'dang-ky':
        tai_khoan_add();
        break;
    case 'show-dang-nhap':
        form_login();
        break;
    case 'dang-nhap':
        login_taikhoan();
        break;
    case 'show-edit-info':
        show_edit_info();
        break;
    case 'edit-info':
        edit_info();
        break;
    case 'show-quen-mat-khau':
        show_quen_mat_khau();
        break;
    case 'quen-mat-khau':
        quen_mat_khau();
        break;
    case 'logout':
        session_unset();
        header("location: ?ctr=home");
        die;
        break;
    case 'admin-binh-luan':
        admin_binh_luan();
        break;
    case 'del-binh-luan':
        del_binh_luan();
        break;
    case 'admin-thong-ke':
        show_thong_ke();
        break;
    case 'bieu-do':
        show_thong_ke_bieudo();
        break;
    case 'login-cmt':
        //hàm             
        break;
    case 'admin-home':
        show_thong_ke_bieudo_home();       
        break;
    default:
        error_404_show();
}

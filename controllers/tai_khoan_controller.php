<?php
//Hiển thị form thêm tk
function add_user()
{
    render("taikhoan/dang-ky");
}
//Hiển thị form edit tk
function show_edit_info()
{
    render("taikhoan/edit");
}
//Hiển thị form thêm login
function form_login()
{
    render("taikhoan/dang-nhap");
}
//Hiển thị form quen password
function show_quen_mat_khau()
{
    render("taikhoan/quen-mat-khau");
}
function tai_khoan_add(){

    extract($_POST);
    //Lấy dữ liệu hình ảnh
    $image = $_FILES['hinh'];
    //Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ

        $hinh = $image['name'];
    
    //Tạo mảng data để insert dữ liệu
    $data = [
        $ma_kh,
        $mat_khau,
        $ho_ten,
        $email,
        $hinh
    ];
        //Validate
        if ($ma_kh == "") {
            $errors['ma_kh'] = "Bạn chưa nhập tên tài khoản";
        }
        if ($mat_khau == '') {
            $errors['mat_khau'] = "Vui lòng nhập mật khẩu";
        }
        if ($ho_ten == '') {
            $errors['ho_ten'] = "Yêu cầu nhập họ tên";
        }
        if ($email == '') {
            $errors['email'] = "Bạn chưa nhập email";
        }
        //Validate ảnh
        if ($image['size'] > 0) {
            $file_type = ['jpg', 'png', 'gif'];
            $file_extension = pathinfo($image['name'], PATHINFO_EXTENSION);
            if (!in_array($file_extension, $file_type)) {
                $errors['hinh'] = " Hình phải có định dạng jpg, png hoặc gif";
            }
        }
            //Nếu không có lỗi
    if (!isset($errors)) {
        //upload
        move_uploaded_file($image['tmp_name'], "public/images/" . $hinh);

        //Insert dữ liệu
        tai_khoan_insert($data);
        setcookie('message', 'Thêm dữ liệu thành công, đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!', time() + 1);
        header("location: ?ctr=show-dang-ky");
        die;
    } else {
        //Nếu có lỗi
        render(
            "taikhoan/dang-ky",
            [
                'errors' => $errors,
            ]
        );
    }
    //Insert dữ liệu
//  tai_khoan_insert($data);
//     setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
//     header("location: ?ctr=home");
//     die;

}
function login_taikhoan(){
    
    
    extract($_POST);
    $checkk = check_user($ma_kh, $mat_khau);
    if (is_array($checkk)){
        $_SESSION['user'] = $checkk;
        header('Location: index.php');
        
    }else{


        setcookie('message', 'Tài khoản không tồn tại vui lòng kiểm tra lại!', time() + 1);
        header("location: ?ctr=show-dang-nhap");
        die;
        
    }
}
function edit_info(){
    extract($_POST);
    $image = $_FILES['hinh'];
    //Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ
    if ($image['size'] > 0) {
        $hinh = $image['name'];
        //upload
        move_uploaded_file($image['tmp_name'], "public/images/" . $hinh);
    }
    $data = [      
            
            $mat_khau,
            $ho_ten,
            $email,
            $hinh , $ma_kh    
    ];
    tai_khoan_update($data);
    $_SESSION['user'] = check_user($ma_kh, $mat_khau);
    header("location: ?ctr=show-edit-info");
    die;

}
function quen_mat_khau(){
    $email= $_POST['email'];
    $check_email = check_email($email);

    if (is_array($check_email)){
        extract($check_email);
        setcookie('message', "Mật khẩu của bạn là: ".$mat_khau, time() + 1);

    }else{
        setcookie('message', "Email không khớp vui long kiểm tra lại", time() + 1);
    }
    header("location: ?ctr=show-quen-mat-khau");
    die;
}
function show_admin_members()
{
    $tai_khoan = members_all();
    render('admin/members/list', ['tai_khoan' => $tai_khoan]);
}
function delete_member()
{
    $ma_kh = $_GET['ma_kh'];
    member_delete($ma_kh);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=admin-members");
    die;
}



?>
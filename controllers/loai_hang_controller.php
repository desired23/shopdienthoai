<?php
//Hiển thị toàn bộ dữ liệu trong bảng loại hàng
function show_loai_hang()
{
    $loai = loai_all();
    render('list_loai', ['loai' => $loai]);
}
//Hiện hàng hóa trong admin
function show_admin_loai()
{
    $loai = loai_all();
    render('admin/loai_hang/list', ['loai' => $loai]);
}
//Hiển thị form thêm loại hàng
function add_loai()
{
    render("admin/loai_hang/add");
}
function save_add_loai(){
    extract($_POST);
    $ten_loaihang1 = $ten_loaihang;
    if($ten_loaihang1 == ""){
        $errors['ten_loaihang'] = "Bạn chưa nhập tên loại hàng";
    }
    if (!isset($errors)) {
        loai_hang_insert($ten_loaihang1);
        setcookie('message', 'Thêm dữ liệu thành công', time() + 1);
        header("location: ?ctr=show-admin-loai");
        die;
    }else{
        render(
            "admin/loai_hang/add",
            [
                'errors' => $errors,
                'data_old' => $ten_loaihang
            ]
        );
    }
}
//Edit hàng hóa (hiển thị form)
function edit_loai()
{
    //Lấy mã loai trên URL
    $ma_loai = $_GET['ma_loai'];

    //lấy ra bản ghi hàng hóa cần sửa
    $loai = loai_one($ma_loai);
    render(
        "admin/loai_hang/edit",
        [
            'loai' => $loai,
        ]
    );
}
//Update hàng hóa (Cập nhật vào database)
function update_loai()
{
    extract($_POST);

    //Tạo mảng data để insert dữ liệu
    $cate_data = [
        $ten_loai,
        $ma_loai
    ];
    //Insert dữ liệu
    loai_update($cate_data);
    setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
    header("location: ?ctr=show-admin-loai");
    die;
}
//Xóa hàng hóa
function delete_loai()
{
    $ma_loai = $_GET['ma_loai'];
    loai_delete($ma_loai);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=show-admin-loai");
    die;
}
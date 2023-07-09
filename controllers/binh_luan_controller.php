<?php function admin_binh_luan(){
    $cmt = binh_luan_all(0);
    render('admin/binh_luan/list', ['cmt' => $cmt]);
}
function del_binh_luan()
{
    $ma_bl = $_GET['ma_bl'];
    binh_luan_delete($ma_bl);
    setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
    header("location: ?ctr=admin-binh-luan");
    die;
}
    ?>
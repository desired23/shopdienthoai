<?php
//function lấy toàn bộ dữ liệu bảng hang_hoa
function hang_hoa_all()
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//Function insert hàng hóa
function hang_hoa_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, mo_ta) VALUES(?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

//Function update hàng hóa
function hang_hoa_update($data = [])
{
    $conn = connection();
    $sql = "Update hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?, mo_ta=? WHERE ma_hh=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

//Function delete hàng hóa
function hang_hoa_delete($ma_hh)
{
    $conn = connection();
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_hh]);
}

//function Lấy 1 bản ghi
function hang_hoa_one($ma_hh)
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_hh]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//function lấy toàn bộ dữ liệu bảng hang_hoa xuất ra home
function hang_hoa_home()
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 0,9";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function top10_hang_hoa_home()
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa ORDER BY so_luot_xem DESC LIMIT 0,10";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//function Lấy 1 bản ghi
function hang_hoa_related($ma_loai, $ma_hh)
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = $ma_loai AND ma_hh <>".$ma_hh;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//function Lấy 1 bản ghi
function hang_hoa_danh_muc($ma_loai)
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = $ma_loai ";   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//function Lấy 1 bản ghi cate-name
function get_cate_name($ma_loai)
{
    $conn = connection();
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_loai]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    extract($result);
    return $ten_loai;
}
//timkiem
function searchfunc ($key)
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa WHERE LOWER(ten_hh) like LOWER('%".$key."%') ";   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

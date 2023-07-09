<?php
//function lấy toàn bộ dữ liệu bảng loai
function loai_all()
{
    $conn = connection();
    $sql = "SELECT * FROM loai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//Function insert hàng hóa
function loai_hang_insert($ten_loai)
{
    $conn = connection();
    $sql = "INSERT INTO loai(ten_loai) VALUES('$ten_loai')";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
//Function update loại hàng
function loai_update($data = [])
{
    $conn = connection();
    $sql = "Update loai SET ten_loai=? WHERE ma_loai=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
//Function delete hàng hóa
function loai_delete($ma_loai)
{
    $conn = connection();
    $sql = "DELETE FROM loai WHERE ma_loai=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_loai]);
}
//function Lấy 1 bản ghi
function loai_one($ma_loai)
{
    $conn = connection();
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_loai]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//function lấy toàn bộ dữ liệu bảng hang_hoa xuất ra home
function loai_hang_hoa_home()
{
    $conn = connection();
    $sql = "SELECT * FROM loai ORDER BY ma_loai DESC LIMIT 0,9";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
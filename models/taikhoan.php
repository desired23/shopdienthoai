<?php
//function lấy toàn bộ dữ liệu bảng loai
function members_all()
{
    $conn = connection();
    $sql = "SELECT * FROM tai_khoan order by ma_kh desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//Function insert tk
function tai_khoan_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO tai_khoan(ma_kh, mat_khau, ho_ten, email, hinh) VALUES(?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
//function Lấy 1 bản ghi
function check_user($ma_kh, $mat_khau)
{
    $conn = connection();
    $sql = "SELECT * FROM tai_khoan WHERE ma_kh='".$ma_kh."' and mat_khau = '".$mat_khau."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//function Lấy 1 bản ghi
function check_email($email)
{
    $conn = connection();
    $sql = "SELECT * FROM tai_khoan WHERE email='".$email."' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//Function update hàng hóa
function tai_khoan_update($data = [])
{
    $conn = connection();
    $sql = "Update tai_khoan SET  mat_khau=?, ho_ten=?, email=?, hinh=? WHERE ma_kh=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function member_delete($ma_kh)
{
    $conn = connection();
    $sql = "DELETE FROM tai_khoan WHERE ma_kh=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_kh]);
}
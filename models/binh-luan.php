<?php
//Function insert hàng hóa
function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl)
{
    $conn = connection();
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES('$ma_kh', '$ma_hh', '$noi_dung', '$ngay_bl')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function binh_luan_all($idpro)
{
    $conn = connection();
    $sql = "SELECT * FROM binh_luan where 1 ";
    if($idpro>0)
    $sql.="and ma_hh=$idpro ";
    $sql.="order by ma_bl desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function binh_luan_delete($ma_bl)
{
    $conn = connection();
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_bl]);
}
function bl_moi()
{
    $conn = connection();
    $sql = "SELECT * FROM binh_luan ORDER BY ma_bl DESC LIMIT 0,9";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>
<?php
function load_all_thong_ke(){
    $conn = connection();
    $sql = "SELECT loai.ma_loai as ma_loai, loai.ten_loai as ten_loai, count(hang_hoa.ma_hh) as counthh, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as avgprice";
    $sql.=" from hang_hoa left join loai on loai.ma_loai=hang_hoa.ma_loai";
    $sql.=" group by loai.ma_loai order by loai.ma_loai desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>
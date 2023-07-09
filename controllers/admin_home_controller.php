
<?php
function show_thong_ke_bieudo_home()
{
    $hang_hoa = top10_hang_hoa_home();
    $hhmoi = hang_hoa_home()   ;
    $blmoi = bl_moi()   ;
    $thong_ke = load_all_thong_ke();
    render('admin/home', ['thong_ke' => $thong_ke, 'blmoi' => $blmoi, 'hhmoi' => $hhmoi, 'hang_hoa' => $hang_hoa]);
}
?>

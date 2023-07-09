<?php
function show_thong_ke()
{
    $thong_ke = load_all_thong_ke();
    render('admin/thong-ke/list', ['thong_ke' => $thong_ke]);
}
function show_thong_ke_bieudo()
{
    $thong_ke = load_all_thong_ke();
    render('admin/thong-ke/bieudo', ['thong_ke' => $thong_ke]);
}

?>
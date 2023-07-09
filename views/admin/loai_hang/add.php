<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/header.php"?>

<article>
    <div class="headline">
        <h2>QUẢN LÝ LOẠI HÀNG</h2>
    </div>
    <form action="?ctr=save-add-loai" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã loại hàng</label>
                    <input class="form-control" type="text" name="ma_loaihang" readonly placeholder="auto number" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên loại hàng</label>
                    <input class="form-control" type="text" name="ten_loaihang" placeholder="Tên loại hàng" value="<?= isset($data_old[0]) ? $data_old[0] : '' ?>">
                    <span style="color: red;"><?= isset($errors['ten_loaihang']) ? $errors['ten_loaihang'] : '' ?></span>
                </div>
            </div>


        </div>
        <button class="btn" type="submit" name="btn_insert">Thêm</button>
        <button class="btn"><a href="?ctr=show-admin-loai">Danh sách</a></button>
    </form>
</article>
<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/footer.php" ?>

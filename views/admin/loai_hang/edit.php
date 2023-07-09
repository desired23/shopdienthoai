<?php include_once "views/admin/layout/header.php" ?>
<article>
    <div class="headline">
        <h2>QUẢN LÝ LOẠI HÀNG</h2>
    </div>
    <form action="?ctr=update-loai" method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã loại</label>
                    <input class="form-control" type="text" name="ma_loai" readonly placeholder="auto number" value="<?= $loai['ma_loai'] ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên loại</label>
                    <input class="form-control" type="text" name="ten_loai" placeholder="Tên loại" value="<?= $loai['ten_loai'] ?>">
                </div>
            </div>
        </div>
        <button class="btn" type="submit" name="btn_update">Cập nhật</button>
        <button class="btn"><a href="?ctr=show-admin-loai">Danh sách</a></button>
    </form>
</article>

<?php include_once "views/admin/layout/footer.php" ?>
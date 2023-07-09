<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/header.php"?>


<article>
    <div class="headline">
        <h2>QUẢN LÝ LOẠI HÀNG</h2>
        <?php if (isset($_COOKIE['message'])) : ?>
            <div>
                <?= $_COOKIE['message'] ?>
            </div>
        <?php endif ?>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên loại hàng</th>
                <th>
                    <a href="?ctr=add-loai">Thêm</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loai as $lo) : ?>
                <tr>
                    <td><?= $lo['ma_loai'] ?></td>
                    <td><?= $lo['ten_loai'] ?></td>
                    <td>
                        <button class="btn btn-default"><a href="?ctr=edit-loai&ma_loai=<?= $lo['ma_loai'] ?>">Sửa</a></button>
                        <button class="btn btn-danger"><a href="?ctr=delete-loai&ma_loai=<?= $lo['ma_loai'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>

<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/footer.php" ?>

<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/header.php"?>


<article>
    <div class="headline">
        <h2>QUẢN LÝ TÀI KHOẢN</h2>
        <?php if (isset($_COOKIE['message'])) : ?>
            <div>
                <?= $_COOKIE['message'] ?>
            </div>
        <?php endif ?>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Mã bình luận</th>
                <th>Mã khách hàng</th>
                <th>Mã hàng hóa</th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cmt as $o_cmt) : ?>
                <tr>
                    <td><?= $o_cmt['ma_bl'] ?></td>
                    <td><?= $o_cmt['ma_kh'] ?></td>
                    <td><?= $o_cmt['ma_hh'] ?></td>
                    <td><?= $o_cmt['noi_dung'] ?></td>
                    <td><?= $o_cmt['ngay_bl'] ?></td>
                    <td>
                        <button class="btn btn-danger"><a href="?ctr=del-binh-luan&ma_bl=<?= $o_cmt['ma_bl'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>

<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/footer.php" ?>

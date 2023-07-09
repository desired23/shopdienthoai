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
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Tên hiển thị</th>
                <th>Email</th>
                <th>Hình</th>
                <th>Vai trò</th>
                <th>            
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tai_khoan as $tk) : ?>
                <tr>
                    <td><?= $tk['ma_kh'] ?></td>
                    <td><?= $tk['mat_khau'] ?></td>
                    <td><?= $tk['ho_ten'] ?></td>
                    <td><?= $tk['email'] ?></td>
                    <td>
                        <img src="../public/images/<?= $tk['hinh']?>" width="123" alt="">
                    </td>
                    <td><?= $tk['vai_tro'] ?></td>
                    <td>
                        <button class="btn btn-default"><a href="?ctr=edit-member&ma_kh=<?= $tk['ma_kh'] ?>">Sửa</a></button>
                        <button class="btn btn-danger"><a href="?ctr=del-member&ma_kh=<?= $tk['ma_kh'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>

<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/footer.php" ?>

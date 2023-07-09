<?php include_once "views/header.php"?>
<div style="display:flex ;justify-content: center;">
<div class="container-login1" style="width: 50%;text-align:center ;">
    <div class="header-modal">
      <h3>Chỉnh sửa thông tin</h3>
    </div>
    <div class="main-modal">

    <?php
    if (isset($_SESSION['user']) && is_array($_SESSION['user'])){
      extract($_SESSION['user']);
    }
    ?>

      <form action="index.php?ctr=edit-info" enctype="multipart/form-data" method="post">
        <div><input type="text" name="ma_kh" value="<?=$ma_kh?>" placeholder="Tên tài khoản"  readonly required></div>
        <div><input type="text" name="ho_ten" value="<?=$ho_ten?>" placeholder="Họ tên" required></div>

        <div><input type="text" name="mat_khau" value="<?=$mat_khau?>" placeholder="Mật khẩu" required></div>
        <div><input type="text" name="email" value="<?=$email?>" placeholder="Email" required></div>
        <div>
                    <!-- Giữ lại hình ảnh cũ -->
                    <input type="hidden" name="hinh" value="<?=$hinh?>">
                    <label for="">Hình</label>
                    <img src="public/images/<?= $hang_hoa['hinh'] ?>" width="100" alt="">
                    <br>
                    <input type="file" name="hinh" placeholder="">
                </div>


        <button type="submit">Cập nhật</button>
        <button type="reset">Nhập lại</button>

      </form>
      <?php if (isset($_COOKIE['message'])) : ?>
            <h3><div>
                <?= $_COOKIE['message'] ?>
            </div></h3>
        <?php endif ?>
    </div>
  </div>
</div>
<?php include_once "views/footer.php" ?>
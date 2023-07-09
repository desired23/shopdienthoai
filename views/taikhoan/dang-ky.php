<?php include_once "views/header.php"?>
<div style="display:flex ;justify-content: center;">
<div class="container-login1" style="width: 50%;text-align:center ;">
    <div class="header-modal">
      <h3>Đăng ký</h3>
    </div>
    <div class="main-modal">
      <form action="index.php?ctr=dang-ky" enctype="multipart/form-data" method="post">
        <div><input type="text" name="ma_kh" placeholder="Tên tài khoản" required></div>
        <div><input type="text" name="ho_ten" placeholder="Họ tên" required></div>

        <div><input type="text" name="mat_khau" placeholder="Mật khẩu" required></div>
        <div><input type="text" name="email" placeholder="Email" required></div>
        <div>
          <label for="">Hình</label>
          <input type="file" name="hinh" placeholder="">
          <span style="color: red;"><?= isset($errors['hinh']) ? $errors['hinh'] : '' ?></span>
        </div>


        <button type="submit">Đăng ký</button>
        <button type="reset">Nhập lại</button>

      </form>
      <?php if (isset($_COOKIE['message'])) : ?>
            <h3><div>
                <?= $_COOKIE['message'] ?>
            </div></h3>
            <button><a href="index.php?ctr=show-dang-nhap">Đăng nhập</a></button>
        <?php endif ?>
    </div>
  </div>
</div>
<?php include_once "views/footer.php" ?>
<?php include_once "views/header.php"?>
<div style="display: flex; justify-content: center;">
<div class="container-login" >
    <div class="header-modal">
      <h3>Đăng nhập</h3>
    </div>
    <div class="main-modal">
      <form action="index.php?ctr=dang-nhap" method="POST">
        <div><input type="text" name="ma_kh" placeholder="Tên tài khoản" required></div>
        <div><input type="text" name="mat_khau" placeholder="Mật khẩu" required></div>
        <button type="submit">Đăng nhập</button>
      </form>
    </div>
    <div class="footer-modal">Bạn chưa có tài khoản? <a href="index.php?ctr=show-dang-ky" id="dang-ky" type="">Đăng ký</a> </div>
  </div>

</div>
<h3 style="color: red; text-align: center;"><?php if (isset($_COOKIE['message'])) : ?>
            <div>
                <?= $_COOKIE['message'] ?>
            </div>
        <?php endif ?></h3>
<?php include_once "views/footer.php" ?>
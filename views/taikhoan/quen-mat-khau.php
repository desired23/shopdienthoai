<?php include_once "views/header.php"?>
<div style="display:flex ;justify-content: center;">
<div class="container-login1" style="width: 50%;text-align:center ;">
    <div class="header-modal">
      <h3>Quên mật khẩu</h3>
    </div>
    <div class="main-modal">
      <form action="index.php?ctr=quen-mat-khau" enctype="multipart/form-data" method="post">

        <div><input type="text" name="email" placeholder="Email" required></div>
      <button type="submit">Gửi email</button>
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
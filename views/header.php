<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dự_án_mẫu_huydqph26019</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">  
  <script src="https://kit.fontawesome.com/67127ad2ca.js" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="public/css/clients/style.css"/>
</head>

<body>
  <div class="container">
    <header class="demobox">
      <div class="header1 marb">
        <div class="logo"><a href="index.php?ctr=home">Shopdienthoai</a></div>
        <div class="searchxbutton demobox">
          <form action="index.php?ctr=search-result" method="post">
            <input type="text" name="search-key" placeholder="Bạn cần tìm gì ?" required />
            <button type="">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </div>
        <div class="loginout">
          <?php
          if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
          ?>
          <div class="optionhover"><i class="fa-regular fa-circle-user fa-circle-user1"></i></div>
           <div><div>Xin chào</div> <?=$ho_ten?></div>
           <div class="user-option">
            <li><a href="index.php?ctr=show-quen-mat-khau">Quên mật khẩu</a></li>
            <li><a href="index.php?ctr=show-edit-info">Sửa thông tin cá nhân</a></li>

<?php if($vai_tro == 1){  ?>

            <li><a href="index.php/?ctr=admin-hang-hoa">Quản trị ADMIN</a></li>
            <?php }?>
            <li><a href="index.php?ctr=logout">Đăng xuât</a></li>
           </div>
          <?php
          } else {
          ?>
            <button id="loginjs" href="#">
              <div><i class="fa-regular fa-circle-user"></i></div>
              <div class="flex-login">
              <div><a href="index.php?ctr=show-dang-nhap">Đăng nhập</a></div><div><a href="index.php?ctr=show-dang-ky">Đăng ký</a></div>
              </div>
            </button>
            

          <?php } ?>

        </div>
      </div>
      <nav class="menu">
        <ul>
          <li><a href="index.php?ctr=home">Trang chủ</a></li>
          <li><a href="index.php?ctr=giohang">Giỏ hàng</a></li>
          <li><a href="index.php?ctr=lienhe">Liên hệ</a></li>
          <li><a href="index.php?ctr=gopy">Góp ý</a></li>
          <li><a href="index.php?ctr=hoidap">Hỏi đáp</a></li>
        </ul>
      </nav>

    </header>
<?php
session_start();
$idpro = $_REQUEST['idpro'];
require_once "../../models/connection.php";
require_once "../../models/binh-luan.php";
$list_cmt = binh_luan_all($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="comment-box">
        <h3 class="cmt-box-title">
            Bình luận
        </h3>
        <div class="cmt-box-content">
            <table style="" class="tb-cmt">
                <th>Người bình luận</th>
                <th>Nội dung bình luận</th>
                <th>Ngày</th>
                <?php
                foreach ($list_cmt as $cmt) {
                    extract($cmt);
                    echo '<tr><td>' . $ma_kh . '</td>';
                    echo '<td>' . $noi_dung . '</td>';
                    echo '<td>' . $ngay_bl . '</td></tr>';
                }
                ?>
            </table>
        </div>



        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>

            <div class="comment-form">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <input type="text" name="noi_dung">
                    <button type="submit" name="send-cmt">Gửi</button>
                </form>
            </div>


    </div>
<?php
        } else {
?>

    <h5 style="color: red;">
        <a href="index.php?ctr=show-dang-nhap">
            Đăng nhập</a> để thực hiện chức năng bình luận
    </h5>
<?php } ?>




<?php
if (isset($_POST['send-cmt'])) {
    $noi_dung = $_POST['noi_dung'];
    $idpro = $_POST['idpro'];
    $ma_kh = $_SESSION['user']['ma_kh'];
    $ngay_bl = date("h:i: sa d/m/Y");
    binh_luan_insert($ma_kh, $idpro, $noi_dung, $ngay_bl);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>
</div>
</body>

</html>
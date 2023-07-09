<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/header.php"?>


<article>
    <div class="headline">
        <h2>THỐNG KÊ SẢN PHẨM THEO LOẠI</h2>
        <?php if (isset($_COOKIE['message'])) : ?>
            <div>
                <?= $_COOKIE['message'] ?>
            </div>
        <?php endif ?>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($thong_ke as $o_listtk) {
                extract($o_listtk);
                echo '
                <tr>
                <td>'.$ma_loai.'</td>
                <td>'.$ten_loai.'</td>
                <td>'.$counthh.'</td>
                <td>'.$maxprice.'</td>
                <td>'.$minprice.'</td>
                <td>'.$avgprice.'</td>

                </tr>
                ';
            }
            
            ?>
        </tbody>
    </table>
   <button> <a href="?ctr=bieu-do">Biểu đổ</a></button>
</article>

<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/footer.php" ?>

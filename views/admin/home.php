<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/header.php" ?>

<main>
<table class="table" >
    <caption>Sản phẩm mới</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Lượt xem</th>
                <th>Ngày đăng</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($hhmoi as $hh) :
                ?>
                <tr>
                    <td><?= $hh['ma_hh'] ?></td>
                    <td><?= $hh['ten_hh'] ?></td>
                    <td><?= $hh['don_gia'] ?></td>
                    <td><?= $hh['so_luot_xem'] ?></td>
                    <td><?= $hh['ngay_nhap'] ?></td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

<table class="table" >
<caption>Bình luận mới</caption>
<thead>
    <th>Mã khách hàng</th>
    <th>Mã hàng hóa</th>
    <th>Nội dung</th>
    <th>Ngày bình luận</th>

</thead>
<tbody>
            <?php foreach ($blmoi as $o_blmoi) : ?>
                <tr>
                    <td><?= $o_blmoi['ma_kh'] ?></td>
                    <td><?= $o_blmoi['ma_hh'] ?></td>
                    <td><?= $o_blmoi['noi_dung'] ?></td>
                    <td><?= $o_blmoi['ngay_bl'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
</table>

<table class="table" >
    <caption>Sản phẩm xem nhiều</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Lượt xem</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($hang_hoa as $h) :
                ?>
                <tr>
                    <td><?= $h['ma_hh'] ?></td>
                    <td><?= $h['ten_hh'] ?></td>       
                    <td><?= $h['so_luot_xem'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  <?php
  $tongdm=count($thong_ke);
  $i=1;
  foreach ($thong_ke as $tk){
    // var_dump($thong_ke);
    extract($tk);
    if ($i==$tongdm) $dauphay="" ;else $dauphay=",";
    echo "['".$tk['ten_loai']."', ".$tk['counthh']."]".$dauphay;
    $i+=1;
  }
  ?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Biểu đồ', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<h2><a href="../?ctr=home">Về giao diện người dùng</a></h2>
</main>

    


<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/footer.php" ?>
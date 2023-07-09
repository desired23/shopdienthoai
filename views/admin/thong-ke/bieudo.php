<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/header.php"?>
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
<?php include_once "/xampp/htdocs/DAM_ph26019/views/admin/layout/footer.php" ?>

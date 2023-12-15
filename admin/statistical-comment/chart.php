<h3 class="alert alert-success">BIỂU ĐỒ THỐNG KÊ</h3>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      // Define the chart to be drawn.
      var data = google.visualization.arrayToDataTable([
      ["Loại", "Số Lượng"],
      <?php
      foreach ($items as $item){
            echo "['$item[name]',      $item[quantity]],";
      }
      ?>
      ]);
      var options ={
        title: "TỶ LỆ BÌNH LUẬN",
        is3D: true,
      };
      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  </script>
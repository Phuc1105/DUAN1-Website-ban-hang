<div class="container">
<h3 class="text-dark">BIỂU ĐỒ THỐNG KÊ</h3>
<div id="columnchart" style="width: 100%; height: 650px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        // Define the chart to be drawn.
        var data = google.visualization.arrayToDataTable([
            ["Loại", "Số Lượng"],
            <?php
            foreach ($items as $item){
                echo "['$item[name]', $item[quantity]],";
            }
            ?>
        ]);

        var options = {
            title: "TỶ LỆ HÀNG HÓA",
            is3D: false, // Thay đổi thành false để chuyển sang biểu đồ cột
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
        chart.draw(data, options);
    }
</script>
</div>

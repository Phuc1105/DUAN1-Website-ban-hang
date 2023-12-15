<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <h3 class="alert alert-success">BIỂU ĐỒ THỐNG KÊ</h3>
            <div id="columnchart" style="width: 900px; height: 500px;"></div>
        </div>
        <div class="col-md-3">
            <div class="ml-3">
                <!-- Chú thích bên phải -->
                <ul class="list-group">
                    <li class="list-group-item"><button class="btn btn-danger"></button> Đánh giá</li>
                    <li class="list-group-item"><button class="btn btn-primary"></button> Bình luận</li>
                    <!-- Thêm các chú thích khác nếu cần -->
                </ul>
            </div>
        </div>
    </div>
    <a href="index.php?list" class="btn btn-primary float-lg-right">Trở lại</a>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        // Define the chart to be drawn.
        var data = google.visualization.arrayToDataTable([
            ["Loại", "Số Lượng", "Số Sao Đánh Giá"],
            <?php
            foreach ($items as $item) {
                echo "['$item[name]', $item[quantity], $item[sao]],";
            }
            ?>
        ]);

        var options = {
            title: "TỶ LỆ BÌNH LUẬN VÀ ĐÁNH GIÁ",
            is3D: false,
            legend: { position: "none" },
            series: {
                0: { axis: "Số Lượng" },
                1: { axis: "Số Sao Đánh Giá" }
            },
            axes: {
                y: {
                    "Số Lượng": { label: "Số Lượng" },
                    "Số Sao Đánh Giá": { label: "Số Sao Đánh Giá" }
                }
            }
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
        chart.draw(data, options);
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


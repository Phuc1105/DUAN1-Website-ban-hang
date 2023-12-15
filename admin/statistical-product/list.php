<div class="container">
<h3 class="text-dark">THỐNG KÊ HÀNG LOẠT HÀNG HÓA</h3>
<table class="table">
    <thead class="alert-success">
        <tr>
            <th>LOẠI HÀNG</th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ THẤP NHẤT </th>
            <th>GIÁ CAO NHẤT</th>
            <th>GIÁ TRUNG BÌNH</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($items as $item){
            extract($item);
        ?>
        <tr>
            <td><?=$name?></td>
            <td><?=$quantity?></td>
            <td><?=number_format($gia_min,2)?> đ</td>
            <td><?=number_format($gia_max,2)?> đ</td>
            <td><?=number_format($gia_avg,2)?> đ</td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
<div class="form-group">
    <a href="index.php?chart" class="btn btn-success float-lg-right form-group m-4">Xem Biểu đồ</a>
</div>
</div>

<div class="container">
<h3 class="text-dark">THỐNG KÊ BÌNH LUẬN</h3>
<table class="table">
    <thead class="alert-success">
        <tr>
            <th>SẢN PHẨM</th>
            <th>SỐ LƯỢNG</th>
            <th>LÂU NHẤT</th>
            <th>MỚI NHẤT</th>
            <th>ĐÁNH GIÁ</th>
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
            <td><?=$cu_nhat?></td>
            <td><?=$moi_nhat?></td>
            <td><?=number_format($sao,1)?></td>
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
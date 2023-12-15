<h3 class="alert alert-success">THỐNG KÊ BÌNH LUẬN</h3>
<table class="table">
    <thead class="alert-success">
        <tr>
            <th>MÃ HÓA ĐƠN</th>
            <th>SỐ LƯỢNG</th>
            <th>THỜI GIAN ĐẶT</th>
            <th>TỔNG SẢN PHẤM</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($items as $item){
            extract($item);
        ?>
        <tr>
            <td><?=$order_id?></td>
            <td><?=$quantity?></td>
            <td><?=$earliest_order_date?></td>
            <td><?=$total_amount?></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
<div class="form-group">
    <a href="index.php?chart" class="btn btn-success float-lg-right form-group m-4">Xem Biểu đồ</a>
</div>
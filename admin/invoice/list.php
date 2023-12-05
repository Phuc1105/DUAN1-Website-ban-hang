<section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?=$ADMIN_URL?>">Quản trị</a> / <a href="index.php">Hóa đơn</a> / <a href="#">Danh sách</a></h3>
        </div>
    </section>

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
    <h1 class="text text-center">Hóa đơn</h1>
    <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Mã </th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Tổng cộng</th>
                        <th scope="col">trạng thái</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 0;
                    foreach ($order as $value) {
                        $i++;
                        // Order status
                        $order_status = '<a href="" class="btn btn-small btn-danger">Chờ xác nhận</a>';
                        if($value['status'] == 2) {
                            $order_status = '<a href="" class="btn btn-small btn-warning">Đã xác nhận</a>';
                        } elseif($value['status'] == 3) {
                            $order_status = '<a href="" class="btn btn-small btn-success">Trên đường vận chuyển</a>';
                        } elseif($value['status'] == 4) {
                            $order_status = '<a href="" class="btn btn-small btn-success">Đã giao hàng</a>';
                        }
                    ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$value['user_id']?></td>
                        <td><?=$value['order_date']?></td>
                        <td class="text-dark" style="font-weight: 600;">
                            <?=number_format($value['price'])?>$
                        </td>
                        <td> 
                            <?=$order_status?>
                        </td>
                        <td>
                            <!-- <a class="btn-sm btn-success" href="index.php?manage=update-order&id=<?=$order_id?>">Xem</a> -->
                            <a class="btn-sm btn-secondary" href="index.php?btn_edit&order_id=<?= $value['order_id'] ?>">Xem</a>                          
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ORDER LIST END -->

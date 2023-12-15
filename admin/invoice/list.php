<style>
    /* Màu cho các option chờ xác nhận */
    .select-wrapper[data-value="0"] {
        background-color: #FFD700;
        /* Màu vàng */
        color: #000;
        /* Màu chữ đen */
    }

    /* Màu cho các option đã xác nhận */
    .select-wrapper[data-value="1"] {
        background-color: #15a362;
        /* Màu xanh lá cây */
        color: #000;
        /* Màu chữ đen */
    }

    /* Màu cho các option đã hủy */
    .select-wrapper[data-value="2"] {
        background-color: #0dcaf0;
        /* Màu đỏ */
        color: #FFF;
        /* Màu chữ trắng */
    }

    .select-wrapper[data-value="3"] {
        background-color: #0d6efd;
        /* Màu đỏ */
        color: #FFF;
        /* Màu chữ trắng */
    }

    .select-wrapper[data-value="4"] {
        background-color: #FF0000;
        /* Màu đỏ */
        color: #FFF;
        /* Màu chữ trắng */
    }

    .select-wrapper {
        position: relative;
        width: 120px;
        text-align: center;
        border-radius: 5px;
        display: inline-block;
    }

    .select-wrapper select {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .select-value {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <h3><a href="<?= $ADMIN_URL ?>">Quản trị</a> / <a href="index.php">Hóa đơn</a> / <a href="#">Danh sách</a></h3>
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
                    foreach ($items as $value) {
                        extract($value);
                        $i++;
                        // Order status
                        // $order_status = '<a href="" class="btn btn-small btn-danger">Chờ xác nhận</a>';
                        // if ($value['status'] == 2) {
                        //     $order_status = '<a href="" class="btn btn-small btn-warning">Đã xác nhận</a>';
                        // } elseif ($value['status'] == 3) {
                        //     $order_status = '<a href="" class="btn btn-small btn-success">Đang dao</a>';
                        // } elseif ($value['status'] == 4) {
                        //     $order_status = '<a href="" class="btn btn-small btn-success">Giao thành công</a>';
                        // }
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $value['user_id'] ?></td>
                            <td><?= $value['order_date'] ?></td>
                            <td class="text-dark" style="font-weight: 600;">
                                <?= number_format($value['price']) ?>đ
                            </td>
                          

                            <td>
                                <form action="index.php" method="post">
                                    <div class="select-wrapper" data-value="<?= $status ?>">
                                        <div class="select-value">
                                            <?php
                                            switch ($status) {
                                                case 1:
                                                    echo "Chờ xác nhận";
                                                    break;
                                                case 2:
                                                    echo "Đã xác nhận";
                                                    break;

                                                case 3:
                                                    echo "Đang giao";
                                                    break;
                                                case 4:
                                                    echo "Đã giao";
                                                    break;

                                                default:
                                                    echo "";
                                            }
                                            ?>
                                        </div>
                                        <input type="hidden" name="order_id" value="<?= $order_id ?>">
                                        <select name="status" class="custom-select p-1" class="<?= $color ?>">
                                            <option value="1" <?= ($status == 1) ? 'selected' : ''; ?>>Chờ
                                                xác
                                                nhận
                                            </option>
                                            <option value="2" <?= ($status == 2) ? 'selected' : ''; ?>>Đã
                                                xác
                                                nhận
                                            </option>
                                            <option value="3" <?= ($status == 3) ? 'selected' : ''; ?>>Đang
                                                giao</option>
                                            <option value="4" <?= ($status == 4) ? 'selected' : ''; ?>>Đã
                                                giao
                                            </option>
                                        </select>
                                    </div>

                                    <button type="submit" style="background: #2A3F54; height:1.8rem" class='btn text-white ' name="btn_xacnhan">
                                        <i class="fas fa-check"></i>
                                    </button>

                                </form>
                            </td>
                            <td>
                                <!-- <a class="btn-sm btn-success" href="index.php?manage=update-order&id=<?= $order_id ?>">Xem</a> -->
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
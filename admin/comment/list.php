<div class="container">
    <div class="page-title">
        <h4 class="pl-3 pt-5 text-dark text-uppercase">Danh sách bình luận</h4>
    </div>
    <div class="box">
        <div class="box">
            <table width="100%" class="table table-bordered text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng bình luận</th>
                        <th>Bình luận cũ nhất</th>
                        <th>Bình luận mới nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);
                    ?>
                    <tr>
                        <td><?= $name ?></td>
                        <td><?= $quantity ?></td>
                        <td><?= $old ?></td>
                        <td><?= $new ?></td>
                        <td class="text-end">
                            <a href="../comment/index.php?product_id=<?= $product_id ?>"
                                class="btn btn-outline-info btn-rounded">Xem chi tiết<i
                                    class="fas fa-info-circle ml-2"></i></i></a>
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
<div class="container">
    <div class="page-title">
        <h4 class="pl-3 pt-5 text-dark text-uppercase">Summary of comments</h4>
    </div>
    <div class="box">
        <div class="box">
            <table width="100%" class="table table-bordered text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Product</th>
                        <th>Number of comments</th>
                        <th>Oldest Comment</th>
                        <th>Latest comments</th>
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
                                class="btn btn-outline-info btn-rounded">See details<i
                                    class="fas fa-info-circle"></i></i></a>
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
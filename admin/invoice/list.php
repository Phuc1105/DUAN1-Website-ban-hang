<h1>Hello, darling</h1>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Order List</h6>
        </div>

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">#</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 0;
                    foreach ($order as $value) {
                        $i++;
                        // Order status
                        $order_status = '<a href="" class="btn btn-small btn-danger">Pending Confirmation</a>';
                        if($value['status'] == 2) {
                            $order_status = '<a href="" class="btn btn-small btn-warning">Confirmed</a>';
                        } elseif($value['status'] == 3) {
                            $order_status = '<a href="" class="btn btn-small btn-success">In Transit</a>';
                        } elseif($value['status'] == 4) {
                            $order_status = '<a href="" class="btn btn-small btn-success">Delivered</a>';
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
                            <a class="btn-sm btn-success" href="index.php?manage=update-order&id=<?=$order_id?>">View</a>
                            <a class="btn-sm btn-secondary" href="index.php?btn_edit&order_id=<?= $value['order_id'] ?>">Update</a>                          
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

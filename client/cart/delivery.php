<?php
$totalAll = 0;
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDateTime = date('Y-m-d H:i');
$orderID = date('YmdHis') . mt_rand(1000, 9999);
// Kiểm tra nếu có session 'cart'
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $index => $item) {
        // Tính tổng tiền cho từng sản phẩm với giảm giá nếu có
        $itemTotal = $item['sl'] * ($item['price'] - $item['discount']);
        $totalAll += $itemTotal + 10;
        // Cập nhật tổng tiền của sản phẩm trong session
        $_SESSION['cart'][$index]['total'] = $itemTotal;
    }
}
?>
<div class="container w-50">
    <form action="list-cart.php?btn_insert" method="POST" class="m-auto" id="invoice">
        <!-- Breadcrumb Navigation -->
        <div class="row">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-3">
                    <a href="<?= $CLIENT_URL . "/cart/list-cart.php?form_invoice" ?>" class="breadcrumb-item mt-2"><i class="fas fa-chevron-left pr-3"></i></a>
                    <span class="h4 pt-1">Orders</span>
                    <span class="ml-auto" style="color: red; font-size: 30px;"><i class="fas fa-comment"></i></span>
                    <input type="hidden" name="address" value="<?= $address ?>">
                </nav>
            </div>
        </div>
        <!-- Product Details -->
        <?php foreach ($_SESSION['cart'] as $index => $item) : ?>
            <div class="row mb-3">
                <div class="col-md-3">
                    <img src="<?= $UPLOAD_URL . '/products/' . $item['image'] ?>" alt="<?= $item['name'] ?>" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?= $item['name'] ?></h5>
                            <input type="hidden" name="name" value="<?= $item['name'] ?>">
                            <input type="hidden" name="image" value="<?= $item['image'] ?>">
                            <p class="card-text">Quantity: <?= $item['sl'] ?></p>
                            <p class="card-text text-danger">Total: <span class="thanh_tien_sp" id="thanh_tien_sp_<?= $index ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>"><?= number_format($item['total'], 0, ".") ?></span> $</p>
                            <input type="hidden" name="price" value="<?= number_format($item['total'], 0, ".") ?>">
                            <p class="card-text text-danger">Status: Still waiting for confirmation</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <!-- Seller Information -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <a class="" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                if (isset($_SESSION['user']) && $_SESSION['user']['image'] != "") { ?>
                                    <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['image'] ?>" width="30" height="30" class="mb-2 object-fit-cover rounded-circle" alt="">
                                <?php } else { ?>
                                    <i class="fa fa-user primary-color"></i>
                                <?php }  ?>
                            </a>
                            <p class="mr-3 h5 mt-1 ml-2"><?= $kh['name'] ?></p>
                        </div>
                        <div class="d-flex">
                            <p class="mr-3">Price: <?= number_format($item['price'], 0, ".") ?> $</p>
                            <p class="mr-3">Discount: <?= $item['discount'] ?> $</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Information -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="h5 text-uppercase mb-3">Shipping Information</p>
                        <div class="d-flex">
                            <p class="mr-3">Order ID:</p>
                            <span class="ml-auto" id="order_id"><?= $orderID ?></span>
                            <input type="hidden" name="order_id" value="<?= $orderID ?>">
                        </div>
                        <div class="d-flex">
                            <p class="mr-3">Order Time:</p>
                            <div class="ml-auto"><?= $currentDateTime ?></div>
                            <input type="hidden" name="order_date" value="<?= $currentDateTime ?>">
                        </div>
                        <div class="d-flex">
                            <p class="mr-3">Shipping Fee:</p>
                            <span class="ml-auto">10 $</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total and Confirm Button -->
        <div class="row">
            <div class="col-12">
                <div class="card bg-light p-3">
                    <div class="d-flex justify-content-between">
                        <p>Total Products: <?= isset($_SESSION['total_cart']) ? $_SESSION['total_cart'] : 0 ?> products</p>
                        <div class="d-flex align-items-center">
                            <i class="fab fa-cc-discover pr-3" style="color: red; font-size: 30px;"></i>
                            <h5 class="pr-1">Total Payment: </h5>
                            <h5 class="text-danger"><?= number_format($totalAll, 0, ".") ?> $</h5>
                        </div>
                    </div>
                    <a href="<?= $CLIENT_URL . "/cart/bill.php?btn_insert" ?>"><button type="submit" name="agree_order" class="btn btn-primary font-weight-bold mt-3 w-100">Confirm Order</button></a>
                </div>
            </div>
        </div>
    </form>
</div>
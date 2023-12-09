<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Trang chủ</a>
                <a class="breadcrumb-item text-dark" href="#">Giỏ hàng</a>
                <span class="breadcrumb-item active">Thanh toán</span>
            </nav>
        </div>
    </div>
</div>
<div class="">
    <form action="<?= $CLIENT_URL . '/cart/checkoutOnline.php' ?>" method="POST" class="m-auto w-100" id="invoice" enctype="multipart/form-data">
        <p class="pt-3 pl-5 text-warning h4"><i class="fas fa-map-marker-alt p-2"></i>Địa chỉ giao hàng</p>
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light mb-30">
                        <p class="breadcrumb-item text-dark font-weight-bold"><?= $name ?></p>
                        <p class="breadcrumb-item text-dark font-weight-bold">(+84)<?= substr($phone, 1) ?></p>
                        <p class="breadcrumb-item text-dark"><?= $address ?></p>
                    </nav>
                </div>
            </div>
        </div>
    </form>
</div>
<div>
    <?php
    $totalAll = 0;

    // Kiểm tra nếu có session 'cart'
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $index => $item) {
            // Tính tổng tiền cho từng sản phẩm với giảm giá nếu có
            $itemTotal = $item['sl'] * ($item['price'] - $item['discount']);
            $totalAll += $itemTotal + 10000;
            // Cập nhật tổng tiền của sản phẩm trong session
            $_SESSION['cart'][$index]['total'] = $itemTotal;
        }
    }
    ?>
    <div class="container-fluid">
        <?php if (isset($_SESSION['cart'])) : ?>
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Giảm giá</th>
                                <th>Số lượng</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <?php foreach ($_SESSION['cart'] as $index => $item) : ?>
                                <tr>
                                    <td class="align-middle"><img src="<?= $UPLOAD_URL . '/products/' . $item['image'] ?>" alt="no image" style="width: 70px;"> <?= $item['name'] ?></td>
                                    <td class="align-middle"><?= number_format($item['price'], 0, ',', ',') ?>đ </td>
                                    <td class="align-middle"><?= number_format($item['discount'], 0, ',', ',') ?>đ</td>
                                    <td class="align-middle" style="width: 100px;">
                                        <form action="<?= $CLIENT_URL . "/cart/delete-cart.php?act=update_sl&id=" . $index ?>" method="post">
                                            <input type="number" class="form-control sl" name="update_sl" onchange="this.form.submit()" value="<?= $item['sl'] ?>" min="1" max="10">
                                            <input type="hidden" class="form-control" name="product_id" value="<?= $index ?>">
                                        </form>
                                    </td>
                                    <td class="align-middle"><a onclick="return confirm('Are you sure you want to delete??');" href="<?= $CLIENT_URL . "/cart/delete-cart.php?act=delete&id=" . $index ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <form class="mb-30" action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="voucher">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Áp dụng voucher</button>
                            </div>
                        </div>
                    </form>
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông tin đặt hàng</span></h5>
                    <div class="bg-light p-30 mb-5">
                        <form action="" method="POST">
                            <div class="border-bottom pb-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h6>Giá tiền sản phẩm</h6>
                                    <h6><span class="thanh_tien_sp " id="thanh_tien_sp_<?= $index ?>" data-price="<?= number_format($item['price'], 0, ',', ',') ?>" data-discount="<?= number_format($item['discount'], 0, ',', ',') ?>"><?= number_format($item['total'], 0, ',', ',') ?></span> đ</h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-medium">Phí vận chuyển</h6>
                                    <h6 class="font-weight-medium">10,000đ</h6>
                                </div>
                            </div>
                            <div class="pt-2">
                                <div class="d-flex justify-content-between mt-2">
                                    <h5>Tổng thanh toán</h5>
                                    <h5><?= number_format($totalAll, 0, ',', ',') ?>đ</h5>
                                </div>
                                <a href="<?= $CLIENT_URL . "/cart/list-cart.php?delivery_vnpay" ?>"><button type="button" name="" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Thanh toán Vnpay</button></a>
                                <a href="<?= $CLIENT_URL . "/cart/list-cart.php?delivery" ?>"><button type="button" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Thanh toán khi nhận hàng</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="row m-1 pb-5">
                <h6 class="col-12">The shopping cart currently has no products</h6>
                <a class="btn btn-outline-dark col-12" href="<?= $ROOT_URL ?>"> On the home</a>
            </div>
            <script>
                function updateCart(inputElement, index) {
                    // Get the values needed for calculation
                    var price = parseFloat(document.querySelector('#thanh_tien_sp_' + index).getAttribute('data-price'));
                    var discount = parseFloat(document.querySelector('#thanh_tien_sp_' + index).getAttribute('data-discount'));
                    var quantity = parseInt(inputElement.value);

                    // Calculate the new total for the item with discount
                    var newTotal = quantity * (price - discount);

                    // Update the displayed total for the item
                    document.querySelector('#thanh_tien_sp_' + index).innerText = formatCurrency(newTotal);

                    // Update the total money for the entire cart
                    updateTotalMoney();
                }

                function updateTotalMoney() {
                    var totalAll = 0;
                    var totalElements = document.querySelectorAll('.thanh_tien_sp');

                    totalElements.forEach(function(element) {
                        totalAll += parseFloat(element.innerText.replace(',', '')); // Remove commas from the currency format
                    });

                    // Update the displayed total money for the entire cart
                    document.getElementById('tong_thanh_tien').innerText = formatCurrency(totalAll);
                }

                function formatCurrency(amount) {
                    // Format the currency with commas
                    return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                }
            </script>
        <?php endif; ?>
    </div>
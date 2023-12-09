<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Trang chủ</a>
                <a class="breadcrumb-item text-dark" href="#">Giỏ hàng</a>
                <span class="breadcrumb-item active">Chi tiết giỏ hàng</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<?php
$totalAll = 0;

// Kiểm tra nếu có session 'cart'
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $index => $item) {
        // Tính tổng tiền cho từng sản phẩm với giảm giá nếu có
        $itemTotal = $item['sl'] * ($item['price'] - $item['discount']);
        $totalAll += $itemTotal;
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
                            <th>Giá</th>
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
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông tin sản phẩm</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng tiền:</h5>
                            <h5><?= number_format($item['total'], 0, ',', ',') ?>đ</h5>
                        </div>
                        <a href="<?= $CLIENT_URL . "/cart/list-cart.php?form_invoice" ?>"><button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Mua hàng</button></a>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="row m-1 pb-5">
            <h6 class="col-12">Giỏ hàng hiện đang trống vui lòng thêm sản phẩm???</h6>
            <a class="btn btn-outline-dark col-12" href="<?= $ROOT_URL ?>">Về trang chủ</a>
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
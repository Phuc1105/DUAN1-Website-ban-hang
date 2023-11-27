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

<div class="container">

    <?php if (isset($_SESSION['cart'])) : ?>
        <div class="row m-1 pb-5">
            <h2 class="pt-3 pb-4">Cart</h2>

            <table class="table table-responsive-md">
                <thead class="thead text-center">
                    <tr>
                        <th>ID</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Sale</th>
                        <th style="width:6rem">Number</th>
                        <th>Into money</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody class="text-center" id="giohang">
                    <?php foreach ($_SESSION['cart'] as $index => $item) : ?>
                        <tr>
                            <td><?= $index ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><span><?= number_format($item['price'], 0, ".") ?></span> $ <input type="hidden" class="don_gia_an" name="price" value="<?= $item['price'] ?>"></td>
                            <td><span><?= number_format($item['discount'], 0, ".") ?></span> $ <input type="hidden" class="giam_gia_an" name="discount" value="<?= $item['discount'] ?>"></td>
                            <td class="pt-1 m-auto">
                                <form action="update_cart.php" method="post">
                                    <input type="number" class="form-control sl" name="update_sl" oninput="updateCart(this, <?= $index ?>)" value="<?= $item['sl'] ?>" min="1" max="10">
                                    <input type="hidden" class="form-control" name="product_id" value="<?= $index ?>">
                                </form>
                            </td>
                            <td> <span class="thanh_tien_sp" id="thanh_tien_sp_<?= $index ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>"><?= number_format($item['total'], 0, ".") ?></span> $</td>
                            <td class="pt-1 m-auto">
                                <a onclick="return confirm('Are you sure you want to delete??');" href="<?= $CLIENT_URL . "/cart/delete-cart.php?act=delete&id=" . $index ?>" class="btn btn-outline-danger"> <i class="fas fa-trash-alt "></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody> 
                <tfoot id="tongdonhang">
                    <tr class="text-center">
                        <th colspan="5">Total money: </th>
                        <td class="text-danger font-weight-bold"><span id="tong_thanh_tien" class=" "><?= number_format($totalAll, 0, ".") ?></span> $</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
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

    <?php else : ?>
        <div class="row m-1 pb-5">
            <h6 class="col-12">The shopping cart currently has no products</h6>
            <a class="btn btn-outline-dark col-12" href="<?= $ROOT_URL ?>"> On the home</a>
        </div>
    <?php endif; ?>
</div>
<div class="row">
    <form action="<?= $CLIENT_URL . '/cart/checkoutOnline.php' ?>" method="POST" class="col-6 m-auto" id="invoice"
        enctype="multipart/form-data">
        <h3 class="pt-3 pb-4">Shipment Details</h3>
        <div class="form-group form">
            <label for="">First and last name</label>
            <input type="text" name="name" id="" class="form-control rounded-pill" value="<?= $name ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <input type="hidden" name="user_id" id="" class="form-control rounded-pill" value="<?= $user_id ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Email address</label>
            <input type="text" name="email" id="" class="form-control rounded-pill" value="<?= $email ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Phone number</label>
            <input type="text" name="phone" id="" class="form-control rounded-pill" placeholder="" value="<?= $phone?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Delivery address</label>
            <input type="text" name="address" id="" class="form-control rounded-pill" placeholder="" value="<?= $address?>"
                aria-describedby="helpId">
        </div>
        <input type="hidden" name="trang_thai" value="0">
        <div class="form-group">
            <label for="">Comment</label>
            <textarea name="ghi_chu" class="form-control" id=""></textarea>
        </div>
        <div class="d-inline-flex">
            <button type="submit" name="redirect" class="btn bg-warning text-white mr-3">Thanh toán Vnpay</button>
            <a href="<?= $CLIENT_URL . "/cart/list-cart.php?delivery" ?>"><button type="button" class="btn bg-success text-white">Thanh toán khi nhận hàng</button></a>
        </div>
    </form>
</div>

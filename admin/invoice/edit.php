<style>
    .container {
        margin-top: 30px;
    }

    .card {
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
        color: white;
        border-bottom: none;
    }

    .card-body {
        background-color: #ffffff;
    }

    .card-title {
        font-size: 1.5rem;
    }

    .itemside {
        display: flex;
        width: 100%;
        margin-bottom: 20px;
    }

    .aside img {
        width: 80px;
        height: 80px;
        border: 1px solid #dee2e6;
        border-radius: 4px;
    }

    .info {
        padding-left: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .info p {
        margin: 0;
        font-size: 1rem;
    }

    .text-success {
        color: #28a745;
    }

    .text-danger {
        color: #dc3545;
    }

    .form-floating label {
        color: #007bff;
    }

    .btn-custom {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    .bg-light-custom {
        background-color: #f8f9fa;
    }
</style>
<?php

foreach ($order_details as $item) {
    extract($item);
}
foreach ($order as $orders) :

    //Trang thái đơn hàng
    $order_status = 'Chưa xác nhận';
    if ($orders['status'] == 2) {
        $order_status = 'Đã xác nhận';
    } elseif ($orders['status'] == 3) {
        $order_status = 'Đang giao';
    } elseif ($orders['status'] == 4) {
        $order_status = 'Giao thành công';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_status_order"])) {
        $status = $_POST["status"];
        $order_id = $_POST["order_id"];
        order_update_status($status, $order_id);
    }
?>

    <div class="container">
        <article class="card">
            <header class="card-header">
                <h6>
                    <a href="index.php?quanli=danh-sach-don-hang" class="link-not-hover text-light">Đơn hàng</a>
                    / Chi tiết đơn hàng
                </h6>
            </header>
            <div class="card-body mt-2">

                <div class="row">
                        <ul class="row text-decoration-none">
                            <?php
                            foreach ($order as $item) {
                            ?>
                               
                            <?php
                            }
                            ?>
                        </ul>
                  
                    <div class="col-lg-5">
                        <div class="card mb-4 " style="background-color: #ffff;">
                            <div class="card-body text-dark">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                    <p class="title"><?= $item['name_product'] ?><br></p>

                                    </div>
                                    <div class="col-sm-6">
                                    <img src="<?= $UPLOAD_URL . '/products/' . $item['img_product'] ?>" alt="Product Image" style="width: 200px; height: 200px;">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4 bg-custom" style="background-color: #ffff;">
                            <div class="card-body text-dark">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-right">Tên khách hàng</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="mb-0 text-right"><?= $item['user_id'] ?></p>
                                        <input type="hidden" name="user_id" value="<?= $item['user_id'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-right">Địa chỉ giao hàng</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="mb-0 text-right"><?= $address ?></p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-right">Thời gian</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="mb-0 text-right"><?= $item['order_date'] ?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-right">Phí vận chuyển</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="mb-0 text-right">10000đ</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-right">Thành tiền</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p style="font-size: 1.5rem;" class="mb-0 text-right text-danger fw-500">
                                            <?= $item['price'] ?>$
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a class="btn btn-primary float-lg-left ml-3" href="index.php?btn_list">Trở về</a>

            </div>

        </article>

    </div>
<?php endforeach; ?>
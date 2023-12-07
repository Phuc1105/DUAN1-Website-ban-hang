<style>
    .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px;
    }

    .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative;
    }

    .track .step.active:before {
        background: #009CFF;
    }

    .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px;
    }

    .track .step.active .icon {
        background: #009CFF;
        color: #fff;
    }

    .track .icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd;
    }

    .track .step.active .text {
        font-weight: 400;
        color: #000;
    }

    .track .text {
        display: block;
        margin-top: 7px;
    }

    /* Added color styling */
    .card-header {
        background-color: #343a40;
        color: #fff;
    }

    .breadcrumb-item a {
        color: #343a40;
    }

    .breadcrumb-item.active {
        color: #007bff;
    }

    .text-black {
        color: #000;
    }

    .bg-light {
        background-color: #f8f9fa;
    }

    .card {
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        margin-bottom: 30px;
    }

    .card-body {
        padding: 1.25rem;
    }

    .mb-0 {
        margin-bottom: 0;
    }

    .text-danger {
        color: #dc3545;
    }

    .text-primary {
        color: #007bff;
    }

    .text-dark {
        color: #343a40;
    }

    .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
    }

    .itemside .aside {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0
    }

    .img-sm {
        width: 80px;
        height: 80px;
        padding: 7px
    }

    :root {
        --primary-color: #ffc107;
    }

    .card-header {
        background-color: var(--primary-color);
        color: #fff;
    }

    .breadcrumb-item.active {
        color: var(--primary-color);
    }

    :root {
        --primary-color: #ffc107;
        --secondary-color: #4caf50;
        --accent-color: #e91e63;
        --background-color: #f8f9fa;
    }

    .card {
        border: 1px solid var(--secondary-color);
    }

    .bg-light {
        background-color: var(--background-color);
    }
</style>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Trang chủ</a>
                <a class="breadcrumb-item text-dark" href="#">Cửa hàng</a>
                <span class="breadcrumb-item">Giỏ hàng</span>
            </nav>
        </div>
    </div>
</div>
<?php
$currentDateTime = date('Y-m-d');
$futureDateTime = date('Y-m-d', strtotime($currentDateTime . ' + 5 days'));
?>
<?php
foreach ($order2 as $item) {
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



    <div class="container pt-4" style="margin-bottom: 200px;">
        <article class="card">
            <header class="card-header">Đơn hàng của tôi</header>
            <div class="card-body">
                <article class="card">
                    <div class="card-body row">
                        <div class="col text-black"> <strong>Đặt hàng:</strong><?= $item['order_date'] ?><br></div>
                        <div class="col text-black"> <strong>Dự kiến giao hàng:</strong> <?php echo $futureDateTime; ?><br></div>
                        <div class="col text-black"> <strong>Trạng thái:</strong><?= $order_status ?><br></div>
                    </div>
                </article>
                <input type="hidden" name="order_details" value="item">
                <div class="track">
                    <div class="step active">
                        <span class="icon"> <i class="fa fa-check text-black"></i> </span>
                        <span class="text">Đang chờ xác nhận</span>
                    </div>
                    <div class="step <?php if ($orders['status'] == 2 || $orders['status'] == 3 || $orders['status'] == 4) echo 'active' ?>">
                        <span class="icon"> <i class="fa fa-user text-black"></i> </span>
                        <span class="text text-black">Đã xác nhận</span>
                    </div>
                    <div class="step <?php if ($orders['status'] == 3 || $orders['status'] == 4) echo 'active' ?>">
                        <span class="icon"> <i class="fa fa-truck text-black"></i> </span>
                        <span class="text text-black">Đang giao</span>
                    </div>
                    <div class="step <?php if ($orders['status'] == 4) echo 'active' ?>">
                        <span class="icon"> <i class="fa fa-check text-black"></i> </span>
                        <span class="text text-black">Đã giao hàng</span>
                    </div>
                </div>
                <hr>
                <div class="container pt-4" style="margin-bottom: 200px;">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Nội dung hình ảnh và thông tin sản phẩm -->
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img src="<?= $UPLOAD_URL . '/products/' . $orders['img_product'] ?>" class="mr-3 img-thumbnail" alt="...">
                                    <div class="media-body">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <!-- Thông tin người đặt hàng -->
                            <div class="card mb-4 bg-light">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0">Người đặt</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0"><?= $orders['user_id'] ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0">Tên sản phẩm</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0">
                                            <p><?= $orders['name_product'] ?>x</p>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0">Số lượng sản phẩm</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0">
                                            <p><?= $orders['quantity'] ?>x</p>
                                            </p>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0">Địa chỉ giao hàng</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0"><?= $item['address'] ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0">Phí vận chuyển</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0">$10</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0">Tổng cộng</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p style="font-size: 1.5rem;" class="mb-0 text-danger fw-500"><?= $orders['price'] ?>$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>
    </div>
<?php endforeach; ?>
<style>
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
        width: 140px;
        height: 140px;
        padding: 7px
    }

    ul.row,
    ul.row-sm {
        list-style: none;
        padding: 0
    }

    .itemside .info {
        padding-left: 15px;
        padding-right: 7px
    }

    .itemside .title {
        display: block;
        margin-bottom: 5px;
        color: #212529
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }
</style>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div>
<?php

foreach ($order as $item) {
    $order_status = 'Not yet confirmed';
    if ($item['status'] == 1) {
        $order_status = 'Order confirmation';
    } elseif ($item['status'] == 2) {
        $order_status = 'Delivering';
    } elseif ($item['status'] == 3) {
        $order_status = 'Delivered successfully';
    }

?>

    <div class="container pt-4 mb-0">
        <article class="card">
            <div class="card-header" style="background-color: #f9f9f9">
                <span class="fw-500 text-black">
                    Status:
                    <span style="font-weight: 600;" class="text-danger"><?= $order_status ?></span>
                </span>
                <span class="float-right text-black">
                    Order time:
                    <span style="font-weight: 600;" class="text-danger"><?= $item['order_date'] ?></span>
                </span>
            </div>

            <div class="card-body">

                <ul class="row">
                    <li class="col-md-4">
                        <figure class="itemside mb-3">
                            <div class="aside"> <img src="<?= $UPLOAD_URL . '/products/' . $item['img_product'] ?>" alt="<?= $item['name_product'] ?>" class="img-sm">
                            </div>

                            <figcaption class="info align-self-center">
                                <p class="title"><?= $item['name_product'] ?></p>
                                <span class="text-danger">x<?= $item['quantity'] ?></span> <span style="font-size: 16px;" class="text-dark"></span>
                            </figcaption>
                        </figure>
                    </li>

                </ul>
                <hr>
                <div>
                    <div class="float-right">
                        <span class="text-dark">Into money: <?= $item['price'] ?>$</span>
                        <span style="font-weight: 600;" class="text-danger mr-3"></span>
                        <a href="<?= $CLIENT_URL ?>/cart/bill.php?btn_details=<?= $item['order_id'] ?>" class="btn btn-custom">
                            <button type="submit" class="btn bg-warning">Chi tiết đơn hàng</button>
                        </a>
                       
                    </div>
                </div>
            </div>

        </article>
    </div>

<?php } ?>



<div style="margin-bottom: 200px;"></div>
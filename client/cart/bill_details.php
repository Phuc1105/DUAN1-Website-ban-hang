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
</style>

<?php
$currentDateTime = date('Y-m-d');
$futureDateTime = date('Y-m-d', strtotime($currentDateTime . ' + 5 days'));
?>
<?php foreach ($order_details as $value) :;
    $order_status = 'Not yet confirmed';
    if ($value['status'] == 1) {
        $order_status = 'Order confirmation';
    } elseif ($value['status'] == 2) {
        $order_status = 'Delivering';
    } elseif ($value['status'] == 3) {
        $order_status = 'Delivered successfully';
    }
?>
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <div class="container pt-4" style="margin-bottom: 200px;">
        <article class="card">
            <header class="card-header">My Order</header>
            <div class="card-body">
                <article class="card">
                    <div class="card-body row">
                        <div class="col text-black"> <strong>Order Placed:</strong><?= $value['order_date'] ?><br></div>
                        <div class="col text-black"> <strong>Estimated Delivery:</strong> <?php echo $futureDateTime; ?><br></div>
                        <div class="col text-black"> <strong>Status:</strong><?= $order_status ?><br></div>

                    </div>
                </article>
                <div class="track">
                    <div class="step active"> <span class="icon"> <i class="fa fa-check text-black"></i> </span> <span class="text">Waiting for Confirmation</span> </div>
                    <div class="step <?php if ($value['status'] == 2 || $value['status'] == 3 || $value['status'] == 4) echo 'active' ?>">
                        <span class="icon"> <i class="fa fa-user text-black"></i> </span>
                        <span class="text text-black">Confirmed</span>
                    </div>
                    <div class="step  <?php if ($value['status'] == 3 || $value['status'] == 4) echo 'active' ?>">
                        <span class="icon"> <i class="fa fa-truck text-black"></i> </span> <span class="text text-black"> On the Way </span>
                    </div>
                    <div class="step <?php if ($value['status'] == 4) echo 'active' ?>">
                        <span class="icon"> <i class="fa fa-check text-black"></i> </span> <span class="text text-black"> Delivered</span>
                    </div>
                </div>
                <hr>
                <?php foreach ($order as $details) : ?>
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <div class="aside"><img src="<?= $UPLOAD_URL . '/products/' . $details['img_product'] ?>" class="img-sm border"></div>
                                <figcaption class="info align-self-center">
                                    <p class="title"></p>
                                    <span class="text-primary"></span> <span style="font-size: 16px;" class="text-dark"><?= $details['quantity']?>x</span>
                                </figcaption>
                            </figure>
                        </li>

                    </ul>
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0 text-right">Full Name</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0 text-right"><?= $name ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0 text-right">Shipping Address</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0 text-right"><?= $value['address'] ?></p>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0 text-right">Shipping Fee</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="mb-0 text-right">10$</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-0 text-right">Total Amount</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p style="font-size: 1.5rem;" class="mb-0 text-right text-danger fw-500"><?= $details['price'] ?>$</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
    <?php endforeach; ?>
    </div>
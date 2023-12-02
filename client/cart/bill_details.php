<style>
    .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px
    }

    .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative
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
        top: 18px
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
        margin-top: 7px
    }
</style>
<?php
$currentDateTime = date('Y-m-d');
$futureDateTime = date('Y-m-d', strtotime($currentDateTime . ' + 5 days'));
?>
<div class="container pt-4" style="margin-bottom: 200px;">
    <article class="card">
        <header class="card-header text-black"> Đơn đặt hàng của tôi</header>
        <div class="card-body">
            <article class="card">
                <div class="card-body row">
                    <div class="col text-black"> <strong>Thời gian đặt hàng:</strong> <br></div>
                    <div class="col text-black"> <strong>Thời gian giao ước tính:</strong> <br></div>
                    <div class="col text-black"> <strong>Trạng thái:</strong> <br></div>

                </div>
            </article>
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check text-black"></i> </span> <span class="text">Chờ xác nhận</span> </div>
                <div class="step">
                    <span class="icon"> <i class="fa fa-user text-black"></i> </span>
                    <span class="text text-black">Đã xác nhận</span>
                </div>
                <div class="step">
                    <span class="icon"> <i class="fa fa-truck text-black"></i> </span> <span class="text text-black"> Trên đường giao </span>
                </div>
                <div class="step">
                    <span class="icon"> <i class="fa fa-check text-black"></i> </span> <span class="text text-black"> Giao thành công</span>
                </div>
            </div>
            <hr>
            <ul class="row">

                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title"></p>
                            <span class="text-primary"></span> <span style="font-size: 16px;" class="text-dark">x</span>
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
                                    <p class="mb-0 text-right">Họ và tên</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Địa chỉ giao hàng</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Tổng tiền hàng</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">₫</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Phí vận chuyển</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">Miễn phí</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Ghi chú</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Thành tiền</p>
                                </div>
                                <div class="col-sm-8">
                                    <p style="font-size: 1.5rem;" class="mb-0 text-right text-danger fw-500">₫</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </article>


</div>
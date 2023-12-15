<section>
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="<?= $ROOT_URL ?>">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="<?= $CLIENT_URL ?>/account/update_account.php">Hồ sơ</a>
                    <span class="breadcrumb-item active">Thay đổi hồ sơ</span>
                </nav>
            </div>
        </div>
    </div>
    <div class="container py-5">

        <form action="<?= $CLIENT_URL . '/account/update_account.php' ?>" method="POST" enctype="multipart/form-data" id="update_acount">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?= $UPLOAD_URL . '/users/' . $image ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"><?= $user_id ?></h5>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="<?= $CLIENT_URL ?>/account/update_account.php?btn_update" class="text-dark">
                                    <button type="button" class="btn btn-primary mr-3">Sửa hồ sơ</button>
                                </a>
                                <a href="<?= $CLIENT_URL ?>/cart/bill.php?btn_list" class="text-dark">
                                    <button type="button" class="btn btn-outline-primary ms-1">Đơn hàng</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <a href="" class="text-dark">
                                        <p class="mb-0">Hồ sơ</p>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <a href="<?= $CLIENT_URL ?>/cart/bill.php?btn_list" class="text-dark">
                                        <p class="mb-0">Đơn hàng</p>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <a href="<?= $CLIENT_URL . '/account/quen_mk.php' ?>" class="text-dark">
                                        <p class="mb-0">Thay đổi mật khẩu</p>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <a href="<?= $CLIENT_URL . '/account/login.php?btn_logout' ?>" class="text-dark">
                                        <p class="mb-0">Đăng xuất</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2>Thay đổi hồ sơ</h2>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Họ và tên*</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="<?= $name ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email*</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" value="<?= $email ?>" readonly>
                                </div>
                            </div>
                           
                                <div class="col-sm-9">
                                    <input type="hidden" name="user_id" class="form-control" value="<?= $user_id ?>" readonly>
                                </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mật khẩu*</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" value="<?= $password ?>">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">

                                    <p class="mb-0">Điện thoại di động*</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" value="<?= $phone ?>" >

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Giới tính*</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="gender" class="form-control" value="<?= $gender ?>">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Địa chỉ*</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control" value="<?= $address ?>">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Hình ảnh</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" name="up_hinh">
                                </div>
                            </div>
                            <hr>
                            
                            <button type="submit" name="btn_confirm" class="btn btn-primary mr-3">Xác nhận chỉnh sửa</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

</section>
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hồ sơ người dùng</li>
                    </ol>
                </nav>
            </div>
        </div>

        <form action="<?= $CLIENT_URL . '/account/update_account.php' ?>" method="POST" enctype="multipart/form-data" id="update_acount">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= $UPLOAD_URL . '/users/' . $image ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $user_id ?></h5>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="submit" name="btn_update" class="btn btn-primary mr-3">Sửa hồ sơ</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Đơn hàng</button>
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
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Họ và tên</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $name ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $email ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mật khẩu</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $password ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Điện thoại di động</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $phone ?></p>
                            </div>
                        </div> 
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Giới tính</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $gender ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Địa chỉ</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $address ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

</section>
<!-- Topbar Start -->

<style>
    /* Thêm các kiểu CSS bạn muốn ở đây */

    .dropdown-menu {
        display: none;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    a.text-body {
        color: white;
        /* Set the default text color to white */
        text-decoration: none;
        /* Remove underline */
        transition: color 0.3s;
        /* Add a smooth color transition effect */
    }

    /* Change text color to gray on hover */
    a.text-body:hover {
        color: gray;
    }
</style>

<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="">Về Chúng Tôi</a>
                <a class="text-body mr-3" href="">Liên Hệ</a>
                <a class="text-body mr-3" href="">Giúp Đỡ</a>
                <a class="text-body mr-3" href="">Câu Hỏi Thường Gặp</a>
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-right pt-3">
            <!-- User -->
            <div class="dropdown widget-header icontext d-flex float-right mr-4">
                <a>
                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user']['image'] != "") { ?>
                        <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['image'] ?>" width="50" height="50" class="mb-2 object-fit-cover" alt="User Image">
                    <?php } ?>
                </a>
                <div class="text">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $_SESSION['user']['name'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <?php if ($_SESSION['user']['role'] == 1) { ?>
                                    <a class="dropdown-item" href="<?= $ADMIN_URL . "/trang-chinh/" ?>">Quản lý Admin</a>
                                <?php } ?>
                                <a class="dropdown-item" href="<?= $CLIENT_URL . '/sell/sell.php' ?>">Bán hàng</a>
                                <a class="dropdown-item" href="<?= $CLIENT_URL . '/account/update_account.php' ?>">Thông tin hồ sơ</a>


                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="<?= $CLIENT_URL . '/account/login.php' ?>" class="text-body mr-4">Đăng nhập</a>
                        <a href="<?= $CLIENT_URL . '/account/register.php' ?>" class="text-body mb-4">Đăng ký</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="d-inline-flex align-items-center d-block d-lg-none">
        <a href="" class="btn px-0 ml-2">
            <i class="fas fa-heart text-dark"></i>
            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
        </a>
        <a href="" class="btn px-0 ml-2">
            <i class="fas fa-shopping-cart text-dark"></i>
            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
        </a>
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="<?= $ROOT_URL ?>" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="<?= $CLIENT_URL ?>/product/list.php?find_product" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control border-1 small rounded-pill" placeholder="Tìm kiếm..." name="keyword" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary rounded-pill" type="submit" name="search">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Dịch Vụ Khách Hàng</p>
            <h5 class="m-0">+012 345 6789</h5>
        </div>
    </div>
</div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Danh mục</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <?php
                    foreach ($list_category as $categories) : ?>
                        <li class="list-group-item">
                            <a class="d-block text-dark" href="<?= $CLIENT_URL . "/product/list.php?category_id=" . $categories['category_id'] ?>"><?= $categories['name'] ?></a>
                        </li>
                    <?php endforeach ?>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="<?= $ROOT_URL ?>" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php" class="nav-item nav-link active">Trang chủ</a>
                        <!-- <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php?detail" class="nav-item nav-link">Shop Detail</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Đơn hàng<i class="fa fa-angle-down mt-1 ml-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <!-- <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php?cart" class="dropdown-item">Shopping Cart</a> -->
                                <a href="<?= $CLIENT_URL ?>/cart/bill.php?btn_list" class="dropdown-item">Đơn mua</a>
                            </div>
                        </div>
                        <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php?contact" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="<?= $CLIENT_URL . "/cart/list-cart.php" ?>" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">
                                <?php
                                if (isset($_SESSION['total_cart'])) {
                                    echo $_SESSION['total_cart'];
                                } else {
                                    echo 0;
                                }
                                ?></span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</script>
<!-- Topbar Start -->

<style>
    /* Thêm các kiểu CSS bạn muốn ở đây */

    .dropdown-menu {
        display: none;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="">About</a>
                <a class="text-body mr-3" href="">Contact</a>
                <a class="text-body mr-3" href="">Help</a>
                <a class="text-body mr-3" href="">FAQs</a>
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-right pt-3">
            <!-- User -->
            <div class="dropdown widget-header icontext d-flex float-right mr-4">
                <a href="#" class="icon icon-sm rounded-circle border" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user']['image'] != "") { ?>
                        <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['image'] ?>" width="50" height="50" class="mb-2 object-fit-cover" alt="User Image">
                    <?php } else { ?>
                        <i class="fa fa-user primary-color"></i>
                    <?php }  ?>
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
                                <a class="dropdown-item" href="<?= $CLIENT_URL . '/account/update_account.php' ?>">Cập nhật tài khoản</a>
                                <a class="dropdown-item" href="<?= $CLIENT_URL . '/account/change_password.php' ?>">Thay đổi mật khẩu</a>
                                <a class="dropdown-item" href="<?= $CLIENT_URL . '/account/login.php?btn_logout' ?>">Đăng xuất</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="<?= $CLIENT_URL . '/account/login.php' ?>" class="btn btn-primary">Đăng nhập</a>
                        <a href="<?= $CLIENT_URL . '/account/register.php' ?>" class="btn btn-success">Đăng ký</a>
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
            <form action="">
                <div class="input-group">
                    <form class="pb-3" action="<?= $CLIENT_URL ?>/product/list.php" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="kyww" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn bg-warning" type="submit" name="search"><i class="fa fa-search text-white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Customer Service</p>
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
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
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
                        <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php" class="nav-item nav-link active">Home</a>
                        <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php?product" class="nav-item nav-link">Shop</a>
                        <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php?detail" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php?cart" class="dropdown-item">Shopping Cart</a>
                                <a href="<?= $CLIENT_URL ?>/cart/bill.php?btn_list" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="<?= $CLIENT_URL ?>/trang-chinh/index.php?contact" class="nav-item nav-link">Contact</a>
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
                                function clearCart2()
                                {
                                    // Kiểm tra xem phiên đã bắt đầu chưa
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }

                                    // Xóa giỏ hàng bằng cách unset biến $_SESSION['cart']
                                    unset($_SESSION['cart']);
                                }
                                ?></span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var dropdownToggle = document.querySelector('.dropdown-toggle');
                        var dropdownMenu = document.querySelector('.dropdown-menu');

                        dropdownToggle.addEventListener('click', function() {
                            if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                                dropdownMenu.style.display = 'block';
                            } else {
                                dropdownMenu.style.display = 'none';
                            }
                        });

                        dropdownToggle.addEventListener('mouseenter', function() {
                            dropdownMenu.style.display = 'block';
                        });

                        dropdownToggle.addEventListener('mouseleave', function() {
                            dropdownMenu.style.display = 'none';
                        });
                    });
                </script>

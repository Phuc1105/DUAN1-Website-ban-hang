<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #sidebar {
            background-color: #333;
            color: #fff;
        }

        #sidebar a {
            color: #fff;
        }

        #sidebar a:hover {
            color: #ff6600;
        }

        #sidebar .fas {
            color: #ff6600;
        }

        .sidebar-header {
            background-color: #222;
        }

        #categories li a {
            color: #ff6600;
        }

        #categories.show {
            background-color: #444;
        }

        #products li a {
            color: #ff6600;
        }

        #products.show {
            background-color: #444;
        }

        #accounts li a {
            color: #ff6600;
        }

        #accounts.show {
            background-color: #444;
        }

        .sidebar-header a img {
            margin-left: 50px;
            width: 60px;
            height: 70px;
            margin-top: -15px;
        }
    </style>
</head>

<body>

    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="<?= $SITE_URL ?>/trang-chinh/">
                <img src="<?= $CONTENT_URL ?>/images/logo_admin.png" alt="logo" class="img-fluid logo">
            </a>
        </div>
        <ul class="list-unstyled components text-secondary">
            <li>
                <a href="<?= $SITE_URL ?>/trang-chinh/"><i class="fas fa-store"></i>Xem trang web</a>
            </li>
            <li>
                <a href="<?= $ADMIN_URL ?>/trang-chinh/"><i class="fas fa-home"></i>Trang chủ</a>
            </li>
            <!-- Danh mục -->
            <li>
                <a href="#categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Danh mục
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="categories">
                    <li>
                        <a href="<?= $ADMIN_URL ?>/loai-hang/">
                            <i class="fas fa-plus"></i>Loại hàng</a>
                    </li>
                    <li>
                        <a href="<?= $ADMIN_URL ?>/loai-hang/index.php?btn_list">
                            <i class="fas fa-list-ul"></i>Danh sách loại hàng</a>
                    </li>
                </ul>
            </li>
            <!-- Sản phẩm -->
            <li>
                <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-table"></i>Sản phẩm
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="products">
                    <li>
                        <a href="<?= $ADMIN_URL ?>/hang-hoa/"><i class="fas fa-plus"></i>Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a href="<?= $ADMIN_URL ?>/hang-hoa/index.php?btn_list">
                            <i class="fas fa-list-ul"></i>Danh sách sản phẩm</a>
                    </li>
                </ul>
            </li>
            <!-- Khách hàng -->
            <li>
                <a href="#accounts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                    <i class="fas fa-user-friends"></i>Khách hàng
                    <i class="fas fa-angle-right float-xl-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="accounts">
                    <li>
                        <a href="<?= $ADMIN_URL ?>/khach-hang/"><i class="fas fa-plus"></i>Thêm khách hàng</a>
                    </li>
                    <li>
                        <a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list">
                            <i class="fas fa-list-ul"></i>Danh sách khách hàng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?= $ADMIN_URL ?>/binh-luan/"> <i class="fas fa-comments"></i>Bình luận</a>
            </li>
            <li>
                <a href="<?= $ADMIN_URL ?>/thong-ke/"><i class="fas fa-chart-line"></i></i>Thống kê hàng hóa</a>
            </li>
        </ul>
    </nav>
</body>

</html>
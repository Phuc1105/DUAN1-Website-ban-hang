<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-result text-dark" href="<?= $ROOT_URL ?>/">Home</a>
                <a class="breadcrumb-result text-dark" href="<?= $CLIENT_URL ?>/product/list.php">/Shop</a>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-4">
        <!-- Size End -->
        <?php require '../layout/category_list.php';  ?>
    </div>
    <!-- Shop Sidebar End -->


    <!-- Shop Product Start -->
    <?php
    if (!empty($results)) {
    ?>
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">

                <div class="col-12 pb-1">

                    <div class="d-flex align-results-center justify-content-between mb-4">
                        <div>
                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                            <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="ml-5">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sắp Xếp</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-result" href="<?= $CLIENT_URL ?>/product/list.php?date_old&keyword=<?= $keyword ?>">Sản Phẩm Cũ Nhất</a>
                                    <a class="dropdown-result" href="<?= $CLIENT_URL ?>/product/list.php?view_product&keyword=<?= $keyword ?>">Phổ Biến</a><br>
                                    <a class="dropdown-result" href="#">Đánh giá tốt nhất</a>
                                </div>
                            </div>
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Hiển Thị</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-result" href="#">10</a>
                                    <a class="dropdown-result" href="#">20</a>
                                    <a class="dropdown-result" href="#">30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- //sản phẩm -->
                <div class="row px-xl-5">
                    <?php
                    foreach ($results as $result) :
                        extract($result);
                        if ($price > 0) {
                            $percent_discount = number_format($discount / $price * 100);
                        } else {
                            $percent_discount = 0;
                        }
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <a href="<?= $CLIENT_URL . '/product/details.php?product_id=' . $product_id ?>">
                                <div class="product-result bg-light mb-4">
                                    <div class="product-badge bg-warning text-white text-bold" style="font-size: 18px; font-weight: bold; width: 50px;">
                                        <?= $discount == 0 ? 'New' : '-' . $percent_discount . '%' ?>
                                    </div>
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="<?= $UPLOAD_URL . '/products/' . $image ?>" alt="Img product">
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate text-center" href=""><?= $name ?></a>
                                        <div class="d-flex align-results-center justify-content-center mt-2">
                                            <h5 class="d-block text-center"><?= number_format($price - $discount, 0, ',', ',') ?>đ </h5>
                                            <del>
                                                <p class="fz-20 d-block ml-3 mb-2">
                                                    <?= number_format($price, 0, ',', ',') ?>đ
                                                </p>
                                            </del>
                                        </div>
                                        

                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;
                } else {
                    ?>
                    <h1 class="text text-center">Không tìm thấy sản phẩm hay danh mục như trên</h1>
                <?php
                } ?>
                <div class="row mt-5 justify-content-center text-center" style="margin: 0 auto;">
                    <ul class="pagination">
                        <?php
                        // Kiểm tra xem $_SESSION['total_page'] có tồn tại không
                        if (isset($_SESSION['total_page'])) {
                            for ($i = 1; $i <= $_SESSION['total_page']; $i++) {
                        ?>
                                <li class="page-result <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                        <?php
                            }
                        } else {
                            // Nếu không tồn tại, thực hiện một xử lý khác hoặc thông báo lỗi
                            echo "Không tìm thấy tổng số trang.";
                        }
                        ?>
                    </ul>
                </div>

        
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
</div>
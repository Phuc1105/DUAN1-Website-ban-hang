<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="<?= $ROOT_URL ?>/">Home</a>
                <a class="breadcrumb-item text-dark" href="<?= $CLIENT_URL ?>/product/list.php">Shop</a>
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
            <!-- Price Start -->
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by price</span></h5>
            <div class="bg-light p-4 mb-30">
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="price-all">
                        <label class="custom-control-label" for="price-all">All Price</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-1">
                        <label class="custom-control-label" for="price-1">$0 - $100</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-2">
                        <label class="custom-control-label" for="price-2">$100 - $200</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-3">
                        <label class="custom-control-label" for="price-3">$200 - $300</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-4">
                        <label class="custom-control-label" for="price-4">$300 - $400</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-5">
                        <label class="custom-control-label" for="price-5">$400 - $500</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Price End -->

            <!-- Color Start -->
            <!-- <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by color</span></h5>
            <div class="bg-light p-4 mb-30">
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="color-all">
                        <label class="custom-control-label" for="price-all">All Color</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-1">
                        <label class="custom-control-label" for="color-1">Black</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-2">
                        <label class="custom-control-label" for="color-2">White</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-3">
                        <label class="custom-control-label" for="color-3">Red</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-4">
                        <label class="custom-control-label" for="color-4">Blue</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="color-5">
                        <label class="custom-control-label" for="color-5">Green</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div> -->
            <!-- Color End -->

            <!-- Size Start -->
            <!-- <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by size</span></h5>
            <div class="bg-light p-4 mb-30">
                <form action="">
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="size-all">
                        <label class="custom-control-label" for="size-all">All Size</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-1">
                        <label class="custom-control-label" for="size-1">XS</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-2">
                        <label class="custom-control-label" for="size-2">S</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-3">
                        <label class="custom-control-label" for="size-3">M</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-4">
                        <label class="custom-control-label" for="size-4">L</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="size-5">
                        <label class="custom-control-label" for="size-5">XL</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div> -->
            <!-- Size End -->
            <?php require '../layout/category_list.php';  ?>
        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                            <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                        </div>
                        <?php require "../layout/search.php" ?>
                        <div class="ml-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?= $CLIENT_URL ?>/product/list.php?date_old">Latest</a>
                                    <a class="dropdown-item" href="<?= $CLIENT_URL ?>/product/list.php?view_product">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- //sản phẩm -->
                <div class="row px-xl-5">
                    <?php
                    foreach ($items as $item) :
                        extract($item);
                        if ($price > 0) {
                            $percent_discount = number_format($discount / $price * 100);
                        } else {
                            $percent_discount = 0;
                        }
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <a href="<?= $CLIENT_URL . '/product/details.php?product_id=' . $product_id ?>">
                                <div class="product-item bg-light mb-4">
                                    <div class="product-badge bg-warning text-white text-bold" style="font-size: 18px; font-weight: bold; width: 50px;">
                                        <?= $discount == 0 ? 'New' : '-' . $percent_discount . '%' ?>
                                    </div>
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="<?= $UPLOAD_URL . '/products/' . $image ?>" alt="Img product">
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate text-center" href=""><?= $name ?></a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5 class="d-block text-center"><?= $price - $discount?>$ </h5>
                                            <del>
                                                <p class=" fz-20 d-block ml-3 mb-2">
                                                    <?= $price ?>$</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-1">
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                            <small>(99)</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="row mt-5 justify-content-center text-center" style="margin: 0 auto;">
                        <ul class="pagination">
                            <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                                <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>

                            <?php } ?>

                        </ul>
                    </div>
                    <!-- <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
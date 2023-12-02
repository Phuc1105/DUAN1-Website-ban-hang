<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Popular Products</span></h2>
    <div class="row px-xl-5">
        <?php
        foreach ($popular_products as $item) :
            extract($item);
            if ($price > 0) {
                $percent_discount = ($discount / $price * 100);
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
                            <h5 class="d-block text-center"><?= $price - $discount ?>$ </h5>
                            <del>
                                <p class=" fz-20 d-block ml-3 mb-2">
                                    <?= $price ?>$</p>
                            </del>
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
    </div>
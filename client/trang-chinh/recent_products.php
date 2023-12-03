<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="<?= $CONTENT_URL ?>/img/carousel-2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="<?= $CONTENT_URL ?>/img/slider-6.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Products</span></h2>
    <div class="row px-xl-5">
        <?php
        foreach ($new_products as $item) :
            extract($item);
            if ($price > 0) {
                $percent_discount = number_format($discount / $price * 100);
            } else {
                $percent_discount = 0;
            }
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-badge bg-warning text-white text-bold" style="font-size: 18px; font-weight: bold; width: 50px;">
                        <?= $discount == 0 ? 'New' : '-' . $percent_discount . '%' ?>
                    </div>
                    <a href="<?= $CLIENT_URL . '/product/details.php?product_id=' . $product_id ?>">
                    <div class="product-img position-relative overflow-hidden">
                       
                        <img class="img-fluid" src="<?= $UPLOAD_URL . '/products/' . $image ?>" alt="Img product">
                        
                        <!-- <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="<?= $CLIENT_URL . "/cart/add-cart.php?id=" . $item['product_id'] ?>"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    </a>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate text-center" href="<?= $CLIENT_URL . '/product/details.php?product_id=' . $product_id ?>"><?= $name ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5 class="d-block text-center"><?= number_format($price - $discount, 0, ',') ?>$ </h5>
                            <del>
                                <p class=" fz-20 d-block ml-3 mb-2">
                                    <?= number_format($price, 0, ',') ?>$</p>
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
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Products End -->
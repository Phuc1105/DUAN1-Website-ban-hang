    <div class="container-fluid">
        <div class="px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="<?= $ROOT_URL ?>/">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="<?= $CLIENT_URL ?>/product/list.php">Sản phẩm</a>
                    <span class="breadcrumb-item active">Chi tiết sản phẩm</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?= $UPLOAD_URL . '/products/' . $image ?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?= $name ?></h3>
                    <div class="d-flex mb-2" style="font-size: 19px;">
                        <?php
                        $totalRating = 0;
                        $totalReviews = count($comment_list);
                        foreach ($comment_list as $comment) {
                            $totalRating += $comment['rating'];
                        }
                        $averageRating2 = $totalReviews > 0 ? $totalRating / $totalReviews : 0;
                        $averageRating = count($comment_list) > 0 ? $totalRating / count($comment_list) : 0;

                        echo '<div class="text-primary pr-2">';
                        for ($i = 1; $i <= 5; $i++) {
                            $class = ($averageRating >= $i) ? 'fas fa-star' : (($averageRating + 0.5 >= $i) ? 'fas fa-star-half-alt' : 'far fa-star');
                            echo '<small class="' . $class . '"></small>';
                        }
                        echo '</div>';
                        ?>
                        <p class="pr-2"><?= number_format($averageRating, 1) ?> |</p>
                        <p class="pr-2"><?= $totalReviews ?> Đánh giá</p> |
                        <p class="pl-2"><?= $view ?> Lượt xem</p>
                    </div>
                    <?php
                    if ($price > 0) {
                        $percent_discount = number_format($discount / $price * 100);
                    } else {
                        $percent_discount = 0;
                    } ?>

                    <div class="mb-1">
                        <div class="d-flex">
                            <h5 class="d-block text-center"><?= number_format($price - $discount, 0, ',', ',') ?>đ </h5>
                            <del>
                                <p class="fz-20 d-block ml-3 mb-2">
                                    <?= number_format($price, 0, ',', ',') ?>đ
                                </p>
                            </del>
                        </div>
                    </div>
                    <div>
                        <p><?= $describes ?></p>
                    </div>
                    <div class="d-flex align-items-center mb-4 pt-2">

                        <div class="input-group quantity mr-3" style="width: 130px;">

                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <a href="<?= $CLIENT_URL . "/cart/add-cart.php?id=" . $product_id ?>"><button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Thêm vào giỏ hàng</button></a>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Chia sẻ:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="" onclick="shareProduct()">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <script>
                                function shareProduct() {
                                    var productName = '<?= $name; ?>';
                                    var productURL = 'http://wd18305-nhom6.demowebcantho.online/client/product/details.php?product_id=<?php echo $product_id; ?>';
                                    var productImageURL = 'http://wd18305-nhom6.demowebcantho.online/upload/products/<?php echo $image; ?>';
                                    var facebookShareURL = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(productURL) + '&quote=' + encodeURIComponent(productName);
                                    window.open(facebookShareURL, 'Chia sẻ sản phẩm', 'width=600,height=400');
                                }
                            </script>
                            <!-- // chia sẻ tai win  -->
                            <a class="text-dark px-2" href="#" onclick="shareOnTwitter()">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <script>
                                function shareOnTwitter() {
                                    var productName = '<?php echo $name; ?>';
                                    var productURL = 'http://wd18305-nhom6.demowebcantho.online/client/product/details.php?product_id=<?php echo $product_id; ?>';
                                    var twitterShareURL = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(productURL) + '&text=' + encodeURIComponent(productName);
                                    window.open(twitterShareURL, 'Chia sẻ sản phẩm trên Twitter', 'width=600,height=400');
                                }
                            </script>

                            <!-- chia sẻ pin tơ rệt  -->
                            <a class="text-dark px-2" href="#" onclick="shareOnPinterest()">
                                <i class="fab fa-pinterest"></i>
                            </a>

                            <script>
                                function shareOnPinterest() {
                                    var productName = '<?php echo $name; ?>';
                                    var productURL = 'http://wd18305-nhom6.demowebcantho.online/client/product/details.php?product_id=<?php echo $product_id; ?>';
                                    var productImageURL = 'http://wd18305-nhom6.demowebcantho.online/upload/products/<?php echo $image; ?>';

                                    // Chia sẻ trên Pinterest
                                    var pinterestShareURL = 'https://www.pinterest.com/pin/create/button/?url=' + encodeURIComponent(productURL) + '&media=' + encodeURIComponent(productImageURL) + '&description=' + encodeURIComponent(productName);
                                    window.open(pinterestShareURL, 'Chia sẻ sản phẩm trên Pinterest', 'width=600,height=400');
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Mô tả</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Đánh giá</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Mô tả sản phẩm</h4>
                            <p><?= $describes ?></p>

                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <?php require "../product/comment.php"; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Detail End -->
    <?php require "../product/product_also_like.php"; ?>
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="<?= $ROOT_URL ?>/">Home</a>
                    <a class="breadcrumb-item text-dark" href="<?= $CLIENT_URL ?>/product/list.php">Shop</a>
                    <span class="breadcrumb-item active">Shop Details</span>
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
                    <div class="d-flex" style="font-size: 19px;">
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
                        <p><?= $totalReviews ?> Reviews</p>
                    </div>
                    <?php
                    if ($price > 0) {
                        $percent_discount = number_format($discount / $price * 100);
                    } else {
                        $percent_discount = 0;
                    } ?>

                    <div class="">
                        <div class="d-flex">
                            <h5 class="d-block text-center"><?= number_format($price - $discount, 0, ',', ',') ?>$ </h5>
                            <del>
                                <p class="fz-20 d-block ml-3 mb-2">
                                    <?= number_format($price, 0, ',', ',') ?>$
                                </p>
                            </del>
                        </div>
                    </div>
                    <p class="mb-4"><?= $describes ?></p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
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
                        <a href="<?= $CLIENT_URL . "/cart/add-cart.php?id=" . $product_id ?>"><button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                                Cart</button></a>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
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
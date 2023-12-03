<style>

</style>
<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>

    <div id="categoryCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner ">
            <?php foreach ($list_category as $index => $categories) : ?>
                <?php if ($index % 8 === 0) : ?>
                    <div class="carousel-item<?= $index === 0 ? ' active' : '' ?>">
                        <div class="row">
                        <?php endif; ?>

                        <div class="col-lg-3 col-md-2 col-sm-4 pb-1 ">
                            <a class="text-decoration-none " href="#">
                                <div class="cat-item d-flex align-items-center mb-4 ">
                                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                        <a class="d-block text-dark" href="<?= $CLIENT_URL . "/product/list.php?category_id=" . $categories['category_id'] ?>">
                                            <img class="img-fluid" src="<?= $UPLOAD_URL . '/categories/' . $categories['image'] ?>" alt="Img product">
                                        </a>
                                    </div>
                                    <div class="flex-fill pl-3">
                                        <h6><?= $categories['name'] ?></h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php if (($index + 1) % 8 === 0 || $index === count($list_category) - 1) : ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach ?>
        </div>
        <a class="carousel-control-prev pr-5 mb-4" href="#categoryCarousel" role="button" data-slide="prev" style="margin-left: -110px;">
            <span class="carousel-control-prev-icon bg-dark rounded" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next mb-4" href="#categoryCarousel" role="button" data-slide="next" style="margin-right: -120px;">
            <span class="carousel-control-next-icon bg-dark rounded" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Categories End -->
</div>
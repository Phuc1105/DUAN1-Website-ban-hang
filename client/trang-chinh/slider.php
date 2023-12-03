<!-- Carousel Start -->
<style>
    /* CSS */
    .carousel-control-prev,
    .carousel-control-next {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    #header-carousel:hover .carousel-control-prev,
    #header-carousel:hover .carousel-control-next {
        opacity: 1;
    }

    .carousel-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<div class="container-fluid mb-3">
    <div class="row ml-5 pl-5">
        <div class="col-lg-7 pl-5">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators rounded">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner rounded">
                    <!-- Carousel Items -->
                    <!-- Slide 1 -->
                    <div class="carousel-item position-relative active" style="height: 348px;">
                        <img class="img-fluid"  src="<?= $CONTENT_URL ?>/img/slider-1.jpg">

                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item position-relative" style="height: 348px;">
                        <img class="position-absolute w-100 h-100" src="<?= $CONTENT_URL ?>/img/carousel-2.jpg" style="object-fit: cover;">

                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item position-relative" style="height: 348px;">
                        <img class="position-absolute w-100 h-100" src="<?= $CONTENT_URL ?>/img/slider-2.jpg" style="object-fit: cover;">

                    </div>
                </div>
                <!-- Navigation Controls -->
                <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="product-offer mb-2" style="height: 170px;">
                <img class="img-fluid rounded" src="<?= $CONTENT_URL ?>/img/slider-3.jpg" alt="">
            </div>
            <div class="product-offer " style="height: 170px;">
                <img class="img-fluid rounded" src="<?= $CONTENT_URL ?>/img/slider.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
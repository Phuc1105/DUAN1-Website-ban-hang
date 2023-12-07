<h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Product portfolio</span></h5>


    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">

        <ul class="list-group category_block">

            <?php foreach ($price_desc as $desc) : ?>
                <li class="list-group-item">
                   <a class="d-block text-dark" href="<?= $CLIENT_URL . "/product/list.php?product_id=" . $desc['product_id'] ?>"><?= $products['price'] ?></a>
                </li>
            <?php endforeach ?>

        </ul>
    </div>
    
<h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Danh mục</span></h5>


    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">

        <ul class="list-group category_block">

            <?php foreach ($list_category as $categories) : ?>
                <li class="list-group-item">
                   <a class="d-block text-dark" href="<?= $CLIENT_URL . "/product/list.php?category_id=" . $categories['category_id'] ?>"><?= $categories['name'] ?></a>
                </li>
            <?php endforeach ?>

        </ul>
    </div>

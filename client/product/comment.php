<style>
    .rating {
        display: inline-flex;
        margin-top: -10px;
        flex-direction: row-reverse;
    }

    .rating>input {
        display: none;
    }

    .review_rating {
        font-size: 20px;
        color: #f4ca16;
        cursor: pointer;
    }

    .rating>label {
        position: relative;
        width: 28px;
        font-size: 35px;
        color: gold;
        cursor: pointer;
    }

    .rating>label::before {
        content: '\2605';
        position: absolute;
        opacity: 0;
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important;
    }

    .rating>input:checked~label:before {
        opacity: 1;
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4;
    }
</style>
<div class="col-12" id="reviews">
    <div class="card border-light mb-3">
        <div class="text-dark text-uppercase">
            <h3> Product review</h3>
        </div>
        <div class="card-body">
            <?php

            foreach ($comment_list as $comment) : ?>
                <div class="review">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    <meta itemprop="datePucommentished" content="01-01-2016"><?= $comment['comment_date'] ?>

                    <?php for ($i = 1; $i <= $comment['rating']; $i++) {
                        echo '<span class="review_rating fa fa-star"></span>';
                    } ?>

                    by <b><?= $comment['name'] ?></b>
                    <img width="40" height="40" class="rounded-circle object-fit-cover" src="<?= $UPLOAD_URL . "/users/" . $comment['image'] ?>" />
                    <p class="commentockquote">
                    <p class="mb-0"><?= $comment['content'] ?></p>
                    </p>
                    <hr>
                </div>
            <?php endforeach ?>
            <nav aria-label="..." class="text-center">
                <ul class="pagination justify-content-center">
                    <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?product_id=<?= $product_id ?>&page=<?= $i ?>"><?= $i ?></a>
                        </li>

                    <?php } ?>

                </ul>
            </nav>

        </div>
        <?php

        if (!isset($_SESSION['user'])) {
            echo '<h5 class="text-center"><i class="text-danger">Log in to comment on this product!!!!!!</i></h5>';
        } else {

        ?>
            <div class="comment-box">
                <h4>Comment</h4>
                <form action="" method="POST">
                    <div class="rating">
                        <input type="radio" name="rating" value="5" id="5" checked>
                        <label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4">
                        <label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3">
                        <label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2">
                        <label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1">
                        <label for="1">☆</label>
                    </div>
                    <div class="comment-area">
                        <textarea class="form-control" name="content" placeholder="comment....." rows="4"></textarea>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-warning px-5">Comment

                        </button>
                    </div>
                </form>
            </div>
        <?php
        } ?>
    </div>
</div>
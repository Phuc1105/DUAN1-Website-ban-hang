<<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <h3><a href="<?= $ADMIN_URL ?>">Quản trị</a> / <a href="index.php">Sản phẩm</a> / <a href="#">Sửa</a></h3>
    </div>
    </section>
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title text-center">
                Sửa sản phẩm
            </h1>
        </div>
    </section>
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="index.php" method="POST" enctype="multipart/form-data" id="btn_update">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="category_id" class="form-label">Loại:</label>
                                <select name="category_id" class="form-control" id="category_id" req>
                                    <option value="" disabled>Please select product type</option>
                                    <?php
                                    $categories = category_select_all();
                                    foreach ($categories as $categories) {
                                        extract($categories);
                                        if ($categories['category_id'] == $product_info['category_id']) {
                                    ?>
                                            <option value="<?= $categories['category_id'] ?>" selected><?= $categories['name'] ?></option>
                                        <?php

                                        } else {
                                        ?>
                                            <option value="<?= $categories['category_id'] ?>"><?= $categories['name'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="name" class="form-label">Tên sản phẩm:</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?= $product_info['name'] ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="product_id" class="form-label">Mã loại:</label>
                                <input type="text" name="product_id" id="product_id" readonly class="form-control" value="<?= $product_info['product_id'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="price" class="form-label">Giá(đ)</label>
                                <input type="number" name="price" id="price" class="form-control" value="<?= $product_info['price'] ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="discount" class="form-label">Giảm(%)</label>
                                <input type="text" name="discount" id="discount" class="form-control" value="<?= $product_info['discount'] ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="quantity" class="form-label">Số lượng</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product_info['quantity'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label>Đặc biệt hay bình thường?</label>
                                <?php
                                if ($product_info['outstanding'] == 1) {
                                ?>
                                    <div class="form-control">
                                        <label class="radio-inline  mr-3">
                                            <input type="radio" value="1" name="outstanding" checked>Đặc biệt
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="" name="outstanding">Bình thường
                                        </label>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="form-control">
                                        <label class="radio-inline  mr-3">
                                            <input type="radio" value="1" name="outstanding">Đặc biệt
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="" name="outstanding" checked>Bình thường
                                        </label>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Chọn trạng thái</label>
                                <?php
                                if ($product_info['status'] == 1) {
                                ?>
                                    <div class="form-control">
                                        <label class="radio-inline mr-3">
                                            <input type="radio" value="1" name="status" checked>Kích hoạt
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="" name="status">
                                            Ẩn
                                        </label>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="form-control">
                                        <label class="radio-inline mr-3">
                                            <input type="radio" value="1" name="status">Kích hoạt
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="" name="status" checked>
                                            Ẩn
                                        </label>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="describes" class="form-label">Mô tả</label>
                                <textarea id="txtarea" spellcheck="false" name="describes" class="form-control form-control-lg mb-3" id="textareaExample" rows="3"><?= $product_info['describes'] ?>
                            </textarea>
                            </div>
                        </div>
                        <div class="mb-3 float-lg-right mb-3">
                            <a href="index.php?btn_list"><input type="button" class="btn btn-primary" value="Trở về"></a>
                            <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-success mr-3 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
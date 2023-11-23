<div class="row">
    <h3 class="m-3 text-dark text-uppercase">ADD NEW PRODUCTS</h3>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="index.php" method="POST" enctype="multipart/form-data" id="add_product">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="category_id" class="form-label">Product type</label>
                            <select name="category_id" class="form-control" id="category_id" req>
                                <option value="" disabled selected>Please select product type</option>
                                <?php
                                $categories = category_select_all();
                                foreach ($categories as $categories) {
                                    extract($categories);
                                ?>
                                    <option value="<?= $categories['category_id'] ?>"><?= $categories['name'] ?></option>
                                <?php

                                }
                                ?>

                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Product's name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="product_id" class="form-label">Product ID</label>
                            <input type="text" name="product_id" id="product_id" readonly class="form-control" value="auto number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="img" class="form-label">Product images</label>
                            <input type="file" name="img" id="img" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="price" class="form-label">Unit Price ($)</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="purchase_count" class="form-label">Purchase count</label>
                            <input type="text" name="purchase_count" id="purchase_count" readonly class="form-control" value="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>Featured or New Products?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="1" name="dac_biet">Featured Products
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="dac_biet" checked>New Products
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <?php $today = date_format(date_create(), 'Y-m-d'); ?>
                            <label for="input_date" class="form-label">Input date</label>
                            <input type="date" name="input_date" id="input_date" class="form-control" value="<?= $today ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="view" class="form-label">Number of views</label>
                            <input type="text" name="view" id="view" readonly class="form-control" value="0">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="describes" class="form-label">Product Description</label>
                            <textarea id="txtarea" spellcheck="false" name="describes" class="form-control form-control-lg mb-3" id="textareaExample" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="reset" value="Retype" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_insert" value="Add New Product" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Product List"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
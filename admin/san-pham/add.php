<style>
       .err-form{
        color: red;
        margin-top: 1%;
    }
</style>
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
                            <div class="err-form"><?=$tb_category_id?></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Product's name</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?= isset($_REQUEST['name']) ? $_REQUEST['name'] : '' ?>">
                            <div class="err-form"><?=$tb_name?></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="<?= isset($_REQUEST['quantity']) ? $_REQUEST['quantity'] : '' ?>">
                            <div class="err-form"><?=$tb_quantity?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="price" class="form-label">Unit Price ($)</label>
                            <input type="number" name="price" id="price" class="form-control" value="<?= isset($_REQUEST['price']) ? $_REQUEST['price'] : '' ?>">
                            <div class="err-form"><?=$tb_price?></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="discount" class="form-label">Discount</label>
                            <input type="number" name="discount" id="discount" class="form-control" value="" value="<?= isset($_REQUEST['discount']) ? $_REQUEST['discount'] : '' ?>">
                            <div class="err-form"><?=$tb_discount?></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Featured or New Products?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="1" name="outstanding">Featured Products
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="outstanding" checked>New Products
</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="describes" class="form-label">Product Description</label>
                            <textarea id="txtarea" spellcheck="false" name="describes" class="form-control form-control-lg mb-3" id="textareaExample" rows="3" value="<?= isset($_REQUEST['describes']) ? $_REQUEST['describes'] : '' ?>"></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="btn_insert" value="Add New Product" class="btn btn-success mr-3">
                        <input type="reset" value="Retype" class="btn btn-danger mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-primary" value="Product List"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
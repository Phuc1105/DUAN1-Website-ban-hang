<style>
</style>
<h1 class="text text-center">Thông tin sản phẩm</h1>
<div class="row row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="<?= $CLIENT_URL ?>/sell/sell.php" method="POST" enctype="multipart/form-data" id="add_product">
                    <div class="row">
                        <div class="form-group col-sm-4 d-block">
                            <label for="category_id" class="form-label">Loại sản phẩm</label>
                            <select name="category_id" class="form-control" id="category_id">
                                <option value="" disabled selected>Xin chọn loại sản phẩm..</option>
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
                            <label for="name" class="form-label">Tên sản phẩm:</label>
                            <input type="text" name="name" id="name" class="form-control" value="">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="quantity" class="form-label">Số lượng:</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="price" class="form-label">Giá(đ):</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="discount" class="form-label">Giảm(%):</label>
                            <input type="number" name="discount" id="discount" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Sản phẩm mới hay là đặc biệt?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="1" name="outstanding">Đặc biệt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="" name="outstanding" checked>Mới
                                </label>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-4">
                            <label for="image" class="form-label">Ảnh:</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="describes" class="form-label">Mô tả sản phẩm</label>
                            <textarea id="txtarea" spellcheck="false" name="describes" class="form-control form-control-lg mb-3" id="textareaExample" rows="3" value="<?= isset($_REQUEST['describes']) ? $_REQUEST['describes'] : '' ?>"></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="btn_insert_product" class="btn btn-primary mr-3"> Thêm </button>
                        <input type="reset" value="Xóa" class="btn btn-danger mr-3">
                        <a href="sell.php?btn_list_product" class="btn btn-success">Danh sách</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
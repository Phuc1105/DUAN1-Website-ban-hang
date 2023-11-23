<style>
    .thongbao{
        color: red;
        margin-top: 1%;
        margin-left: 0.2%;
    }
</style>
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <h3><a href="<?= $ADMIN_URL ?>">Admin</a> / <a href="index.php">Loại</a> / <a href="#">Sửa loại</a></h3>
    </div>
</section>
<section class="is-hero-bar">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Sửa loại sản phẩm</h1>
                    <?php


                    ?>
                    <form class="form-horizontal" action="index.php?btn_update" method="post">
                        <div class="form-group row">
                            <label for="category_id" class="col-sm-3 text-end control-label col -form-label">Mã loại:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="category_id" placeholder="" name="category_id" value="<?= $category_id ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên Loại:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Nhập tên loại sản phẩm..." name="name" value="<?= $name ?>">
                                <div class="thongbao"><?= $thongbao_name ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label ">Trang thái:</label>
                            <div class="col-sm-9">
                                <select class="col-sm-12 text-end control-label col-form-label form-control" name="status" id="">
                                    <?php
                                    if ($status == 1) {
                                    ?>
                                        <option value="" disabled>Vui lòng chọn trạng thái sản phẩm...</option>
                                        <option value="1" selected>Kích hoạt</option>
                                        <option value="">Chưa kích hoạt</option>
                                    <?php
                                    }else{
                                        ?>
                                        <option value="" disabled>Vui lòng chọn trạng thái sản phẩm...</option>
                                        <option value="1">Kích hoạt</option>
                                        <option value="" selected>Chưa kích hoạt</option>
                                        <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>

                        <div class="float-lg-right" style="display: flex;">
                            <input type="submit" class="btn btn-success" value="Cập nhật">

                    </form>

                    <?php


                    ?>
                </div>
            </div>
        </div>

    </div>
<style>
    .thongbao{
        color: red;
        margin-top: 1%;
        margin-left: 0.2%;
    }
</style>
<div id="app">
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?= $ADMIN_URL ?>">Admin</a> / <a href="index.php">Loại</a> / <a href="#">Thêm Loại</a></h3>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title text-center">
                Thêm loại
            </h1>
        </div>
    </section>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?btn_insert" method="POST">
                    <div class="card-body">
                        <h4 class="card-title">Thêm loại sản phẩm</h4>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên Loại:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Nhập tên loại sản phẩm..." name="name">
                                <div class="thongbao"><?= $thongbao_name ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label ">Trang thái:</label>
                            <div class="col-sm-9">
                                <select class="col-sm-12 text-end control-label col-form-label form-control" name="status" id="">
                                    <option value="" selected disabled>Vui lòng chọn trạng thái sản phẩm...</option>
                                    <option value="1">Kích hoạt</option>
                                    <option value="">Chưa kích hoạt</option>
                                </select>
                                <div class="thongbao"><?= $thongbao_status ?></div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body" style="display: flex;">
                    <button type="submit" class="btn btn-success" name="them">Thêm</button>
                </div>
            </div>
            </form>
            <a href="index.php?btn_list"><button type="submit" class="btn btn-primary " name="them" style="position: absolute;margin-left: 8%;margin-top: -4.44%;">Danh sách</button></a>
        </div>

    </div>

</div>
</div>
<br>
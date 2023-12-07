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
                <h3><a href="<?= $ADMIN_URL ?>">Quản trị</a> / <a href="index.php">Danh mục</a> / <a href="#">Thêm</a></h3>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title text-center">
            Thêm danh mục
            </h1>
        </div>
    </section>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?btn_insert" method="POST" enctype="multipart/form-data" id="add_loai">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Nhập tên danh mục..." name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Ảnh danh mục:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" placeholder="Nhập ảnh danh mục..." name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 text-end control-label col-form-label ">Trạng thái:</label>
                            <div class="col-sm-9">
                                <select class="col-sm-12 text-end control-label col-form-label form-control" name="status" id="status">
                                    <option value="" selected disabled>Vui lòng chọn trạng thái...</option>
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="mb-3">
                        <input type="submit" name="" value="Thêm" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                </div>
            </form>
           
        </div>

    </div>

</div>
</div>
<br>
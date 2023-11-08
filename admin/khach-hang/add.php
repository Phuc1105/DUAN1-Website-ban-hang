<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="pl-3 text-dark text-uppercase"><h3>Thêm mới khách hàng</h3></div>
            <div class="card-body">
                <form action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="ma_kh" class="form-label">Mã khách hàng</label>
                            <input type="text" name="ma_kh" id="ma_kh" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="ho_ten" class="form-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="mat_khau" class="form-label">Mật khẩu</label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="mat_khau" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" name="mat_khau2" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="hinh" class="form-label">Ảnh</label>
                            <input type="file" name="hinh" id="hinh" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Kích hoạt?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="0" name="kich_hoat">Chưa kích
                                    hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="kich_hoat" checked>Kích hoạt
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Vai trò</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="0" name="vai_tro">Khách hàng
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="vai_tro" checked>Nhân viên
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-success mr-3" >
                        <a href="index.php?btn_list"><input type="button" class="btn btn-primary " value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
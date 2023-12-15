<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title">Đổi mật khẩu</h4>

        <form action="#" method="post">
            <div class="form-group first">
                <label for="username"></label>
                <input type="hidden" class="form-control" id="username" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" name="email">

            </div>
            <div class="form-group last mb-3">
                <label for="text">Mật Khẩu Mới</label>
                <input name="mat_khau1" type="password" class="form-control" id="mat_khau1">

            </div>
            <div class="form-group last mb-4">
                <label for="name">Xác Nhận Mật Khẩu</label>
                <input name="mat_khau2" type="password" class="form-control" id="mat_khau2">

            </div>
            <i class="alert"><?= (isset($thongbao) && (strlen($thongbao) > 0)) ? $thongbao : "" ?></i>
            <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Chấp nhận điều
                        khoản
                    </span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                </label>

            </div>

            <input s name="btn_forgot_pass" type="submit" value="Gửi" class="btn btn-primary btn-block">
        </form>
    </div>
</div>

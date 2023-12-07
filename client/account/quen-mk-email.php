<style>

</style>




<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Nhập địa chỉ email của bạn</h4>
        <form action="" method="post">

            <input type="hidden" name="ma_kh">
            <div class="form-group last mb-4">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <i class=" text-danger">
                <?= (isset($thongbao) && (strlen($thongbao) > 0)) ? $thongbao : "" ?>
            </i>

            <div class="d-flex mb-5 align-items-center">
                <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" name="ghi_nho" checked>
                    <div class="custom-control-label"> Chấp nhận điều khoản</div>
                </label>
            </div>

            <input name="btn_forgot_Email" type="submit" value="Gửi" class="btn btn-primary btn-block">

            <!-- <div class="form-group">
                                <a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php" class="btn btn-primary btn-block">Đăng
                                    ký</a>
                                <a href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" class="btn btn-primary btn-block">Đăng Nhập</a>
                            </div> -->
        </form>
    </div>
</div>


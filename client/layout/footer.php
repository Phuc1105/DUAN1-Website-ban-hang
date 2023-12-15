<!-- Footer Start -->
<style>
        .success-message {
            display: none;
            color: green;
        }
    </style>
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Liên Hệ</h5>
            <p class="mb-4">Chào mừng bạn đến với cửa hàng của chúng tôi. Hãy liên hệ nếu bạn có bất kỳ câu hỏi nào.</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Đường trần chiên, Cái răng, Cần Thơ</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>nhom6wd18305@gamil.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+0347219261</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Mua Sắm Nhanh</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="<?=$ROOT_URL?>"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                        <a class="text-secondary mb-2" href="<?=$CLIENT_URL?>/cart/list-cart.php"><i class="fa fa-angle-right mr-2"></i>Giỏ hàng</a>
                        <a class="text-secondary" href="<?=$CLIENT_URL?>/trang-chinh/index.php?contact"><i class="fa fa-angle-right mr-2"></i>Liên hệ chúng tôi</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Tài Khoản Của Tôi</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="<?= $CLIENT_URL . '/account/update_account.php' ?>"><i class="fa fa-angle-right mr-2"></i>Hồ sơ</a>
                        <a class="text-secondary mb-2" href="<?= $CLIENT_URL ?>/cart/bill.php?btn_list"><i class="fa fa-angle-right mr-2"></i>Đơn hàng</a>
                       
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Bản Tin</h5>
                    <p>Hiện tại cửa hàng chưa có bảng tin</p>
                    <form action="../layout/lienHe.php" method="post" target="_self" id="subscribeForm">
                        <div class="input-group">
                            <input type="text" name="email" class="form-control" placeholder="Địa chỉ Email của bạn">
                            <input type="hidden" name="id">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Đăng Ký</button>
                            </div>
                        </div>
                    </form>
                    <p id="successMessage" class="success-message text-secondary text-uppercase mt-4 mb-3" >Cảm ơn bạn đã quan tâm ! chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</p>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Theo Dõi Chúng Tôi</h6>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="#"></a>. Bản quyền đã đăng ký. Thiết kế bởi
                <a class="text-primary" href="https://htmlcodex.com">Nhóm 6-WD18305</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="<?= $CONTENT_URL ?>/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger intent="WELCOME" chat-title="Chat" agent-id="838613ff-173d-4a7c-9875-22a0c9dccb35" language-code="vi"></df-messenger>

<!-- // mail  -->
<script>
        document.getElementById('subscribeForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Tạm thời ẩn form và hiển thị thông báo
            document.getElementById('subscribeForm').style.display = 'none';
            document.getElementById('successMessage').style.display = 'block';

            // Gửi dữ liệu form đến server
            var formData = new FormData(this);
            fetch('../layout/lienHe.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error(error));
        });
    </script>

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Trang Chủ</a>
                <span class="breadcrumb-item active">Liên Hệ</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Start -->

<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Liên Hệ Chúng Tôi</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form action="../conten/mail/contactcontact.php" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Họ và Tên" required="required" data-validation-required-message="Vui lòng nhập họ và tên của bạn" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Email của Bạn" required="required" data-validation-required-message="Vui lòng nhập địa chỉ email của bạn" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Chủ Đề" required="required" data-validation-required-message="Vui lòng nhập chủ đề" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="8" id="message" placeholder="Nội Dung" required="required" data-validation-required-message="Vui lòng nhập nội dung tin nhắn của bạn"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Gửi Tin Nhắn</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="bg-light p-30 mb-30">
                <iframe style="width: 100%; height: 250px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.239844908949!2d105.75768561083873!3d9.997036473043934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a089c73e36acbb%3A0xf8c05eaefb6d3c8b!2zTmjDoCB0cuG7jSBNaW5oIENow6J1IDE!5e0!3m2!1svi!2s!4v1701881132700!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="bg-light p-30 mb-3">
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Đường trần chiên, Cái Răng, Cần Thơ</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>phuc123@gmail.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>(+84)12 345 67890</p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

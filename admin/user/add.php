<style>
    .err-form {
        color: red;
        margin-top: 1%;
    }

    .password-container {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        top: 50%;
        right: 20px;
        top: 50px;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <h3><a href="<?= $ADMIN_URL ?>">Quản trị</a> / <a href="index.php">Người dùng</a> / <a href="#">Thêm người dùng</a></h3>
    </div>
</section>
<h1 class="title text-center">
    Thêm người dung mới
</h1>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="index.php?btn_insert" method="POST" enctype="multipart/form-data" id="admin_add_kh">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="user_id" class="form-label">Tài khoản:</label>
                            <input type="text" name="user_id" id="user_id" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Tên:</label>
                            <input type="text" name="name" id="name" class="form-control">

                        </div>
                        <div class="form-group col-sm-4">
                            <label for="password" class="form-label">Mật khẩu:</label>
                            <input type="password" name="password" id="password" class="form-control" >
                            <span class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></span>

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" >
                            
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="text" name="phone" id="phone" class="form-control" >
     
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control" value="" multiple>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>Vai trò:</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="1" name="role">Quản trị
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="" name="role" checked>Người dùng
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="1" name="status" checked>Kích hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="" name="status">Ẩn
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Giới tính</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">   
                                    <input type="radio" value="Nam" name="gender" checked>Nam
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="Nữ" name="gender">Nữ
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-4">
                            <label for="image" class="form-label">Ảnh</label>
                            <input type="file" name="image" id="image" class="form-control" value="" multiple>
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
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var toggleBtn = document.querySelector('.toggle-password');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleBtn.textContent = '';
        } else {
            passwordInput.type = 'password';
            toggleBtn.textContent = '';
        }
    }
</script>
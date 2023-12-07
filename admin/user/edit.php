
<style>
    .err-form{
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
</style><section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?=$ADMIN_URL?>">Quản trị</a> / <a href="index.php">Người dùng</a> / <a href="#">Sửa</a></h3>
        </div>
    </section>
    <h1 class="title text-center">
            Sửa người dùng
            </h1>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="admin_edit_kh">
                    <div class="row">
                        <div class="form-group col-sm-4">
                        <label for="user_id" class="form-label">Tài khoản:</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" value="<?=$user_id?>" readonly>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Tên:</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?=$name?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="password" class="form-label">Mật khẩu:</label>
                            <input type="password" name="password" id="password" class="form-control" value="<?=$password?>"    >
                            <span class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?=$email?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="text" name="phone" id="phone"  class="form-control" value="<?=$phone?>">
                        </div>                        
                        <div class="form-group col-sm-4">
                            <label>Gender</label>   
                                <div class="form-control">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="Nam" name="gender" <?php if($gender=="Male"){echo"checked";}?>>Nam
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="Nữ" name="gender" <?php if($gender!="Male"){echo"checked";}?>>Nữ
                                </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-4">
                            <label>Vai trò</label>   
                                <div class="form-control">
                                    <?php
                                    ?>
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="1" name="role"<?php if($role==1){echo"checked";}?>>Quản trị
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="" name="role"<?php if($role!=1){echo"checked";}?>>Người dùng
                                    </label>
                                </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status</label>   
                                <div class="form-control">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="1" name="status"<?php if($status==1){echo"checked";}?>>Kích hoạt
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="" name="status" <?php if($status!=1){echo"checked";}?>>Ẩn
                                    </label>
                                </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="image" class="form-label">Ảnh</label>
                            <input type="file" name="image" id="image"  class="form-control" value="" multiple>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-success mr-3">
                        <a href="index.php?btn_list"><button class="btn btn-primary">Trở về</button></a>
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
<!-- ============================ COMPONENT LOGIN   ================================= -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<style>
     .toggle-password {
            position: absolute;
            right: 10px;
            top: 75%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            user-select: none;
            
        }

        .form-group {
            position: relative;
}
</style>
<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4" >Đăng nhập</h4>

        <form action="<?= $CLIENT_URL ?>/account/login.php" method="POST" id="form_login">
            <div class="form-group">
                <label for="email" class="form-label">Tên tài khoản</label>
                <input name="user_id" class="form-control" placeholder="Username" type="text" value="<?=$user_id?>">
            </div> <!-- form-group// -->
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input name="password" class="form-control" id="password" placeholder="Password" type="password"
                    value="<?=$password?>">
                <span class="toggle-password">
                    <i class="fa-regular fa-eye"></i>
                </span>
                <i class="text-danger text-center"><?= $MESSAGE ?></i>
            </div> <!-- form-group// -->

            <div class="form-group">
                <a href="<?= $CLIENT_URL ?>/account/quen_mk.php" >Quên mật khẩu?</a>

                <label class="float-left custom-control custom-checkbox mr-5"> <input type="checkbox"
                        class="custom-control-input" name="ghi_nho" checked>
                    <div class="custom-control-label">Ghi nhớ tài khoản</div>
                </label>
            </div> 

            <div class="form-group">
                <button type="submit" name="btn_login" class="btn btn-primary btn-block"> Đăng nhập </button>
            </div> <!-- form-group// -->
        </form>

    </div> <!-- card-body.// -->
</div> <!-- card .// -->
<script>
    const $password = document.querySelector("#password");
    const $toggler = document.querySelector(".fa-eye");

    const showHidePassword = () => {
        if($password.type == 'password'){
            $password.setAttribute('type', 'text');
        }else{
            $password.setAttribute('type', 'password');
        }
        $toggler.classList.toggle('fa-eye');
        $toggler.classList.toggle('fa-eye-slash');
    };

    $toggler.addEventListener(
        'click',
        showHidePassword,
    )
</script>
<p class="text-center mt-4">Bạn chưa có tài khoản?<a href="<?= $CLIENT_URL ?>/account/register.php">Đăng ký</a></p>
<br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->
<!-- ============================ COMPONENT LOGIN   ================================= -->
<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4" >Login</h4>

        <form action="<?= $CLIENT_URL ?>/account/login.php" method="POST" id="form_login">
            <div class="form-group">
                <label for="email" class="form-label">User name</label>
                <input name="user_id" class="form-control" placeholder="Username" type="text" value="<?=$user_id?>">
            </div> <!-- form-group// -->
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input name="password" class="form-control" placeholder="Password" type="password"
                    value="<?=$password?>">
                <i class="text-danger text-center"><?= $MESSAGE ?></i>
            </div> <!-- form-group// -->

            <div class="form-group">
                <a href="<?= $CLIENT_URL ?>/account/change_password.php" class="float-right">Change password?</a>

                <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                        class="custom-control-input" name="ghi_nho" checked>
                    <div class="custom-control-label"> Remember account</div>
                </label>
            </div> 

            <div class="form-group">
                <button type="submit" name="btn_login" class="btn btn-primary btn-block"> Login </button>
            </div> <!-- form-group// -->
        </form>

    </div> <!-- card-body.// -->
</div> <!-- card .// -->

<p class="text-center mt-4">Don't already have an account?<a href="<?= $CLIENT_URL ?>/account/register.php">Register</a></p>
<br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->
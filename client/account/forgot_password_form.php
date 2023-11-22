<!-- ============================ COMPONENT LOGIN   ================================= -->
<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Forgot login password</h4>

        <form action="<?= $CLIENT_URL ?>/account/forgot_password.php" method="POST" id="forgot_password_from">

            <div class="form-group">
                <label for="username" class="form-label">User name</label>
                <input name="user_id" class="form-control" id="username" placeholder="Username" type="text">
            </div> <!-- form-group// -->

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input name="email" class="form-control" id="email" placeholder="Username" type="text">
            </div> <!-- form-group// -->

            <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>


            <div class="form-group">
                <button type="submit" name="btn_forgot_pass" class="btn btn-primary btn-block"> Retrieve password </button>
            </div> <!-- form-group// -->
        </form>

    </div> <!-- card-body.// -->
</div> <!-- card .// -->

<p class="text-center mt-4">Don't have an account yet?<a href="<?= $CLIENT ?>/account/register.php">Register</a></p>
<br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->
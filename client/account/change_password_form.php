<!-- ============================ COMPONENT LOGIN   ================================= -->
<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Change Password</h4>
        <form action="<?= $CLIENT_URL ?>/account/change_password.php" method="POST" id="form_doi_mk">

            <div class="form-group">
                <label for="email" class="form-label">User name</label>
                <input name="user_id" class="form-control" placeholder="Username" readonly type="text"
                    value="<?= $_SESSION['user']['user_id'] ?>">
            </div> <!-- form-group// -->

            <div class="form-group">
                <label for="password" class="form-label">Current password</label>
                <input name="password" class="form-control" placeholder="password" type="password">
            </div> <!-- form-group// -->

            <div class="form-group">
                <label for="password2" class="form-label">New password</label>
                <input name="password2" class="form-control" placeholder="password" type="password" id="password2">
            </div> <!-- form-group// -->

            <div class="form-group">
                <label for="password3" class="form-label">Confirm New Password</label>
                <input name="password3" class="form-control" placeholder="password" type="password">
            </div> <!-- form-group// -->

            <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>

            <div class="form-group">
                <button type="submit" name="btn_change" class="btn btn-primary btn-block"> Change Password </button>
            </div> <!-- form-group// -->
        </form>

    </div> <!-- card-body.// -->
</div> <!-- card .// -->

<p class="text-center mt-4">Have an account?<a href="<?= $CLIENT_URL ?>/account/register.php">Register</a></p>

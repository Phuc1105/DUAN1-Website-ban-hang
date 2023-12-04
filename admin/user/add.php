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
</style>
<section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?=$ADMIN_URL?>">Admin</a> / <a href="index.php">User</a> / <a href="#">Add user</a></h3>
        </div>
    </section>
    <h1 class="title text-center">
            ADD NEW USER
            </h1>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="index.php?btn_insert" method="POST" enctype="multipart/form-data" id="add_user">
                    <div class="row">
                        <div class="form-group col-sm-4">
                        <label for="user_id" class="form-label">User id</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" value="<?= isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '' ?>">
                            <div class="err-form"><?=$tb_user_id?></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?= isset($_REQUEST['name']) ? $_REQUEST['name'] : '' ?>">
                            <div class="err-form"><?=$tb_name?></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="<?= isset($_REQUEST['password']) ? $_REQUEST['password'] : '' ?>">
                            <span class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></span>
                            <div class="err-form"><?=$tb_password?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : '' ?>">
                            <div class="err-form"><?=$tb_email?></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone"  class="form-control" value="<?= isset($_REQUEST['phone']) ? $_REQUEST['phone'] : '' ?>">
                            <div class="err-form"><?=$tb_phone?></div>
                        </div>                        
                        <div class="form-group col-sm-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address"  class="form-control" value="<?= isset($_REQUEST['address']) ? $_REQUEST['address'] : '' ?>">
                            <div class="err-form"><?=$tb_address?></div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-4">
                            <label>Role</label>   
                                <div class="form-control">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="1" name="role">Administration
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="" name="role" checked>User
                                    </label>
                                </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status</label>   
                                <div class="form-control">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="1" name="status" checked>Activated
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="" name="status">Not activated
                                    </label>
                                </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Gender</label>   
                                <div class="form-control">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="Male" name="gender" checked>Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="Female" name="gender">Female
                                </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-4">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image"  class="form-control" value="" multiple>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="" value="Add New Product" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Product List"></a>
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
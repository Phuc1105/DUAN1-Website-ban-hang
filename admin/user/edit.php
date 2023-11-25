<section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?=$ADMIN_URL?>">Admin</a> / <a href="index.php">User</a> / <a href="#">Edit user</a></h3>
        </div>
    </section>
    <h1 class="title text-center">
            EDIT NEW USER
            </h1>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="edit_user">
                    <div class="row">
                        <div class="form-group col-sm-4">
                        <label for="user_id" class="form-label">User id</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" value="<?=$user_id?>" readonly>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?=$name?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="<?=$password?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?=$email?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone"  class="form-control" value="<?=$phone?>">
                        </div>                        
                        <div class="form-group col-sm-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address"  class="form-control" value="<?=$address?>">
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-4">
                            <label>Role</label>   
                                <div class="form-control">
                                    <?php
                                    ?>
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="1" name="role"<?php if($role==1){echo"checked";}?>>Administration
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="" name="role"<?php if($role!=1){echo"checked";}?>>User
                                    </label>
                                </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status</label>   
                                <div class="form-control">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="1" name="status"<?php if($status==1){echo"checked";}?>>Activated
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="" name="status" <?php if($status!=1){echo"checked";}?>>Not activated
                                    </label>
                                </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Gender</label>   
                                <div class="form-control">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" value="Male" name="gender" <?php if($gender=="Male"){echo"checked";}?>>Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="Female" name="gender" <?php if($gender!="Male"){echo"checked";}?>>Female
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
                        <input type="submit" name="btn_update" value="Update" class="btn btn-success mr-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
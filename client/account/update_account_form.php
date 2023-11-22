<div class="container">
    <h5 class="pt-5 pb-5 text-center" style="font-family: 'Dancing Script', cursive; font-size: 60px ;">Update account</h5>
    <div class="row m-1 pb-5">
        <div class="col-lg-6 col-md p-6">
            <img src="<?= $UPLOAD_URL . '/users/' . $image ?>" class="img-fluid rounded-circle" alt="">
        </div>


        <div class="col-lg-6 col-md">
            <form action="<?= $CLIENT_URL . '/account/update_account.php' ?>" method="POST" enctype="multipart/form-data" id="update_acount">

                <div class="form-group ">
                    <label for="">User name</label>
                    <input type="text" name="user_id" id="" class="form-control" value="<?= $user_id ?>" readonly aria-describedby="helpId">
                </div>
                <div class="form-group form">
                    <label for="">First and last name</label>
                    <input type="text" name="name" id="" class="form-control" value="<?= $name ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="text" name="email" id="" class="form-control" value="<?= $email ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Avatar user</label>
                    <input type="file" name="up_image" id="" class="form-control" aria-describedby="helpId">
                </div>
                <div class="form-group pl-2">

                    <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>

                </div>

                <input name="role" value="<?= $role ?>" type="hidden">
                <input name="status" value="<?= $status ?>" type="hidden">
                <input name="password" value="<?= $password ?>" type="hidden">
                <input name="image" value="<?= $image ?>" type="hidden">
                <div class="form-group">
                    <button type="submit" name="btn_update" class="btn btn-warning pt-2 pb-2">Update</button>
                </div>
            </form>
        </div>


    </div>
</div>
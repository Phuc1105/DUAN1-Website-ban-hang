 <!-- ============================ COMPONENT REGISTER ================================= -->
 <div class="card mb-4 mx-auto mt-3" style="max-width: 500px;">
     <article class="card-body">
  
             <h4 class="card-title">Register an account</h4>
 

         <!-- FORM -->
         <form action="<?= $CLIENT_URL ?>/account/register.php" method="post" enctype="multipart/form-data"
             id="form_dang_ki">
             <div class="form-row">
                 <div class="col form-group">
                     <label>Full name</label>
                     <input type="text" class="form-control" placeholder="Full Name" name="name">
                 </div> <!-- form-group end.// -->
             </div> <!-- form-row end.// -->
             <div class="form-row">
                 <div class="col form-group">
                     <label>Username</label>
                     <input type="text" class="form-control" placeholder="Username" name="user_id">
                 </div> <!-- form-group end.// -->
             </div> <!-- form-row end.// -->
             <div class="form-group">
                 <label>Email</label>
                 <input type="email" class="form-control" placeholder="Enter your email address..." name="email">
             </div> <!-- form-group end.// -->
             <div class="form-row">
                 <div class="col form-group">
                     <label>Profile picture</label>
                     <input type="file" class="form-control" name="img">
                 </div> <!-- form-group end.// -->
             </div> <!-- form-row end.// -->
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label>Create Password</label>
                     <input class="form-control" type="password" name="password" id="password">
                 </div> <!-- form-group end.// -->
                 <div class="form-group col-md-6">
                     <label>Confirm Password</label>
                     <input class="form-control" type="password" name="password2">
                 </div> <!-- form-group end.// -->
             </div>
             <i class="text-danger"><?= $MESSAGE ?></i>
             <div class="form-group">
                 <button type="submit" name="btn_register" class="btn btn-primary btn-block"> Sign up </button>
             </div> <!-- form-group// -->
             <input type="hidden" name="status" value="1">
             <input type="hidden" name="role" value="0">

             <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>

         </form>
         <hr>
         <p class="text-center">Already have an account?<a href="<?= $CLIENT_URL ?>/account/login.php">Login</a></p>
     </article> <!-- card-body end .// -->
 </div> <!-- card.// -->
 <!-- ============================ COMPONENT REGISTER END .// ================================= -->
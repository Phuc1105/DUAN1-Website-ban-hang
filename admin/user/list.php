<style>
    th{
        text-align: center;
    }
    td{
        text-align:center;
    }
</style>
<section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?=$ADMIN_URL?>">Quản trị</a> / <a href="index.php">Người dùng</a> / <a href="#">Danh sách</a></h3>
        </div>
    </section>

<section class="is-hero-bar">
        <div class="">
          
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <h1 class="text-center">Danh sách người dùng</h1>
                  <div class="table-responsive">
                    <table id="" class="table table-striped table-bordered tableStyle">
                      <thead>
                        <tr>
                          <th>Tài khoản</th>
                          <th>Ảnh</th>
                          <th>Tên</th>
                          <th>Giới tính</th>
                          <th>Vai trò</th> 
                          <th>Trạng thái</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                  </div>
                  <?php
                  // xóa   
                  $items = user_select_all();
                  foreach ($items as $user) {
                    
                  ?>  
                    <tr>
                      <td class="align-middle"><?= $user['user_id']?></td>
                      <td class="align-middle" style="width: 120px;">
                        <img src="../../upload/users/<?= $user['image']?>" alt="" width="100px">
                      </td>
                      <td class="align-middle"><?= $user['name']?></td>
                      
                      <td class="align-middle"><?= $user['gender']?></td>
                      <?php
                      if($user['role']==1){
                        $role = "Quản trị";
                      }else{
                        $role = "Người dùng";
                      }
                      ?>  
                      <td class="align-middle"><?=$role?></td>
                      <?php
                      if($user['status'] == 1){
                        $status =  "Kích hoạt";
                      }else{
                        $status = "Ẩn";
                      }
                      ?>
                      <td class="align-middle status"><?= $status ?></td>
                      <td class="align-middle">
                        <?php
                        if($user['status'] == 1){
                          ?>
                           <a href="index.php?btn_update_status_hide&user_id=<?=$user['user_id']?>"><button class="btn btn-secondary">Ẩn</button></a>
                          <?php
                        }else{
                          ?>
                          <a href="index.php?btn_update_status_display&user_id=<?=$user['user_id']?>"><button class="btn btn-success">Kích hoạt</button></a>
                          <?php
                        }
                        ?>
                        <a href="index.php?btn_edit&user_id=<?=$user['user_id']?>"><button class="btn btn-primary">Sửa</button></a> 
                        <a href="index.php?btn_delete&user_id=<?=$user['user_id']?>"><button class="btn btn-danger">Xóa</button></a> 
                      </td>
                    </tr>
                    <?php
                  }
        ?>  
                    </tbody>
                    </table>
                    <a href="index.php?btn_add"><button class="btn btn-success">Thêm</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
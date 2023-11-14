<section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?=$ADMIN_URL?>">Admin</a> / <a href="index.php">Loại</a> / <a href="#">Thêm Loại</a></h3>
        </div>
    </section>
<section class="is-hero-bar">
        <div class="">
          
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <h1 class="text-center">Danh sách loại</h1>
                  <div class="table-responsive">
                    <table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên Loại</th>
                          <th>Trạng thái</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                  </div>
                  <?php
                  // xóa   
                  $items = catagogy_select_all();
                  foreach ($items as $catagogy) {
                    
                  ?>  
                    <tr>
                      <td><?= $catagogy['catagogy_id']?></td>
                      <td><?= $catagogy['name']?></td>
                      <?php
                      if($catagogy['status']==1){
                        $status =  "Kích hoạt";
                      }else{
                        $status = "Chưa kích hoạt";
                       
                      }
                      ?>
                      <td><?= $status ?></td>
                      <td>
                        
                        <a href="index.php?btn_delete&catagogy_id=<?=$catagogy['catagogy_id']?>"><button class="btn btn-danger">Xóa</button></a>

                        <a href="index.php?btn_edit&catagogy_id=<?=$catagogy['catagogy_id']?>"><button class="btn btn-primary">Sửa</button></a>
                        
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
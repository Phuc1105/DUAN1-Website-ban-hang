<section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?=$ADMIN_URL?>">Admin</a> / <a href="index.php">categories</a> / <a href="#">List Type</a></h3>
        </div>
    </section>
<section class="is-hero-bar">
        <div class="">
          
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <h1 class="text-center">Category list</h1>
                  <div class="table-responsive">
                    <table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                  </div>
                  <?php
                  // xóa   
                  $items = category_select_all();
                  foreach ($items as $category) {
                    
                  ?>  
                    <tr>
                      <td><?= $category['category_id']?></td>
                      <td><?= $category['name']?></td>
                      <?php
                      if($category['status']==1){
                        $status =  "Activated";
                      }else{
                        $status = "Not activated";
                       
                      }
                      ?>
                      <td><?= $status ?></td>
                      <td>
                      <?php
                        if($category['status'] == 1){
                          ?>
                           <a href="index.php?btn_update_status_hide&category_id=<?=$category['category_id']?>"><button class="btn btn-secondary">Hide</button></a>
                          <?php
                        }else{
                          ?>
                          <a href="index.php?btn_update_status_display&category_id=<?=$category['category_id']?>"><button class="btn btn-success">Display</button></a>
                          <?php
                        }
                        ?>
                        <a href="index.php?btn_delete&category_id=<?=$category['category_id']?>"><button class="btn btn-danger">Delete</button></a>

                        <a href="index.php?btn_edit&category_id=<?=$category['category_id']?>"><button class="btn btn-primary">Edit type</button></a>
                        
                      </td>
                    </tr>
                    <?php
                  }
        ?>  
      
                    </tbody>
                    </table>
                    <a href="index.php?btn_add"><button class="btn btn-success">More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
                          <th>Category</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th>Discount</th>
                          <th>User</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                  </div>
                  <?php
                  // xóa   
                  $items = product_select_all();
                  foreach ($items as $product) {
                 
                  ?>  
                    <tr>
                      <td><?= $product['product_id']?></td>
                      <td><?= $product['name']?></td>
                      <td>
                        <?php
                        $categories = category_select_all();
                        foreach($categories as $categories){
                            extract($categories);
                            if($categories['category_id'] == $product['category_id']){
                                ?>
                                <?=$categories['name'];?>
                            <?php
                            }
                        }
                        ?>
                      </td>
                      <?php
                      if($product['status']==1){
                        $status =  "Activated";
                      }else{
                        $status = "Not activated";
                       
                      }
                      ?>
                      <td><?= $status ?></td>
                      <td><?= $product['price']?>$</td>
                      <td><?= $product['discount']?>%</td>
                      <td><?=$product['user_id']?></td>
                      <td>
                        
                        <a href="index.php?btn_delete&product_id=<?=$product['product_id']?>"><button class="btn btn-danger">Delete</button></a>

                        <a href="index.php?btn_edit&product_id=<?=$product['product_id']?>"><button class="btn btn-primary">Edit type</button></a>
                        
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
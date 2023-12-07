<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <h3><a href="<?= $ADMIN_URL ?>">Quản trị</a> / <a href="index.php">Sản phẩm</a> / <a href="#">Danh sách</a></h3>
  </div>
</section>
<section class="is-hero-bar">
  <div class="">

    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h1 class="text-center">Danh sách</h1>
            <div class="table-responsive">
              <table id="" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên</th>
                    <th>Loại</th>
                    <th>Trạng thái</th>
                    <th>Giá</th>
                    <th>Giảm</th>
                    <th>Người dùng</th>
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
                <td><?= $product['product_id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td>
                  <?php
                  $categories = category_select_all();
                  foreach ($categories as $categories) {
                    extract($categories);
                    if ($categories['category_id'] == $product['category_id']) {
                  ?>
                      <?= $categories['name']; ?>
                  <?php
                    }
                  }
                  ?>
                </td>

                <?php
                if ($product['status'] == 1) {
                  $status =  "Kích hoạt";
                } else {
                  $status = "Ẩn";
                }
                ?>


                

                <td><?= $status ?></td>
                <td><?= $product['price'] ?>đ</td>
                <td><?= $product['discount'] ?>đ</td>
                <td><?= $product['user_id'] ?></td>
          
                <td>
                      <?php
                        if($product['status'] == 1){
                          ?>
                           <a href="index.php?btn_update_status_hide&product_id=<?=$product['product_id']?>"><button class="btn btn-secondary">Ẩn</button></a>
                          <?php
                        }else{
                          ?>
                          <a href="index.php?btn_update_status_display&product_id=<?=$product['product_id']?>"><button class="btn btn-success">Kích hoạt</button></a>
                          <?php
                        }
                        ?>
                        
                  
                  <a href="index.php?btn_delete&product_id=<?= $product['product_id'] ?>"><button class="btn btn-danger">Xóa</button></a>

                  <a href="index.php?btn_edit&product_id=<?= $product['product_id'] ?>"><button class="btn btn-primary">Sửa</button></a>

                </td>
              </tr>
            <?php
            }
            ?>

            </tbody>
            </table>
            <!-- <a href="index.php?btn_add"><button class="btn btn-success">More</button></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

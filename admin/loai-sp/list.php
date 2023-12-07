<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <h3><a href="<?= $ADMIN_URL ?>">Quản trị</a> / <a href="index.php">Danh mục</a> / <a href="#">Danh sách</a></h3>
  </div>
</section>
<section class="is-hero-bar">
 
        <div class="card">
          <div class="card-body">
            <h1 class="text-center">Danh sách danh mục</h1>
            <div class="table-responsive">
              <table id="" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Mã danh mục</th>
                    <th>tên</th>
                    <th>Trạng thái</th>
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
                <td><?= $category['category_id'] ?></td>
                <td><?= $category['name'] ?></td>
                <?php
                if ($category['status'] == 1) {
                  $status =  "Kích hoạt";
                } else {
                  $status = "Ẩn";
                }
                ?>
                <td><?= $status ?></td>
                <td>
                  <?php
                  if ($category['status'] == 1) {
                  ?>
                    <a href="index.php?btn_update_status_hide&category_id=<?= $category['category_id'] ?>"><button class="btn btn-secondary">Ẩn</button></a>
                  <?php
                  } else {
                  ?>
                    <a href="index.php?btn_update_status_display&category_id=<?= $category['category_id'] ?>"><button class="btn btn-success">Kích hoạt</button></a>
                  <?php
                  }
                  ?>
                  <a href="index.php?btn_delete&category_id=<?= $category['category_id'] ?>"><button class="btn btn-danger">Xóa</button></a>

                  <a href="index.php?btn_edit&category_id=<?= $category['category_id'] ?>"><button class="btn btn-primary">Sửa</button></a>

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
     
</section>
<h1 class="text text-center">Danh sách sản phẩm của tôi</h1>
<section class="is-hero-bar">
  <div class="">

    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>MÃ hàng</th>
                    <th>Hình</th>
                    <th>Tên</th>
                    <th>Loại</th>
                    <th>Đặc biệt</th>
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
            $user = $_SESSION['user'];
            $user_id = $user['user_id'];
            $items = product_select_all();
            foreach ($items as $product) {

              if ($product['user_id'] == $user_id) {

            ?>
                <tr>
                  <td><?= $product['product_id'] ?></td>
                  <td><img src="../../upload/products/<?= $product['image'] ?>" alt="" width="100px"></td>
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
                    $status =  "Activated";
                  } else {
                    $status = "Not activated";
                  }
                  ?>


                  <?php
                  if ($product['outstanding'] == 1) {
                    $outstanding =  "Special product";
                  } else {
                    $outstanding = "Normal";
                  }
                  ?>
                  <td><?= $outstanding ?></td>
                  <td><?= $status ?></td>
                  <td><?= $product['price'] ?>$</td>
                  <td><?= $product['discount'] ?>%</td>
                  <td><?= $product['user_id'] ?></td>
                  <td>

                    <a href="sell.php?btn_delete&product_id=<?= $product['product_id'] ?>"><button class="btn btn-danger">Xóa</button></a>

                    <a href="sell.php?btn_edit_product&product_id=<?= $product['product_id'] ?>"><button class="btn btn-primary">Sửa</button></a>

                  </td>
                </tr>
                
            <?php
              }
            }
            ?>
            </tbody>
            </table>
            <a href="sell.php?btn_sell"><button class="btn btn-success">Thêm</button></a>
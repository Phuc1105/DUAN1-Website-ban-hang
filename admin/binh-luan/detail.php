<div class="container">
    <div class="page-title">

        <h4 class="mt-5 font-weight-bold ">Chi tiết bình luận</h4>
    </div>
    <div class="box">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">

                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button> <i class="ml-5"></i>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="bg-warning">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Người bình luận</th>
                            <th>User</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);

                        ?>
                            <tr>
                                <td><input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>"></td>
                                <td><?= $rating ?> sao</td>
                                <td><?= $noi_dung ?></td>
                                <td><?= $ngay_bl ?></td>
                                <td><?= $ma_kh ?></td>  
                                <td class="text-end">
                                    <a href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>&ma_hh=<?= $ma_hh ?>" class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                <div class="mt-3" width="100%">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                            <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                <a class="page-link" href="?ma_hh=<?= $ma_hh ?>&page=<?= $i ?>"><?= $i ?></a>
                            </li>

                        <?php } ?>

                    </ul>
                </div>
                <a class="btn btn-primary" href="index.php">Quay lại</a>
            </form>
        </div>
    </div>
</div>
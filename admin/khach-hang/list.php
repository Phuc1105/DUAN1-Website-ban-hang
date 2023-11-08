<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách khách hàng</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="bg-warning text-white">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Mã KH</th>
                            <th>Họ và tên</th>
                            <th>Địa chỉ email</th>
                            <th>Ảnh</th>
                            <th>Vai trò</th>
                            <th>Kích hoạt</th>
                            <th><a href="index.php" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suakh = "index.php?btn_edit&ma_kh=" . $ma_kh;
                            $xoakh = "index.php?btn_delete&ma_kh=" . $ma_kh;
                            $img_path = $UPLOAD_URL . '/users/' . $hinh;
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='50' width='50' class='rounded-circle object-fit-cover'>";
                            } else {
                                $img = "No images";
                            }

                        ?>
                        <tr>
                            <td><input type="checkbox" name="ma_kh[]" value="<?= $ma_kh ?>"></td>
                            <td><?= $ma_kh ?></td>
                            <td><?= $ho_ten ?></td>
                            <td><?= $email ?></td>
                            <td><?= $img ?></td>
                            <td><?= ($vai_tro == 1) ? "Nhân viên" : "Khách hàng"; ?></td>
                            <td><?= ($kich_hoat == 1) ? "Đã kích hoạt" : "Chưa kích hoạt"; ?></td>
                            <td class="text-end">
                                <a href="<?= $suakh ?>" class="btn btn-outline-info btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoakh ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
</div>
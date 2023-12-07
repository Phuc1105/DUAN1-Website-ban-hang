<form action="<?= $CLIENT_URL ?>/product/list.php" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control border-1 small rounded-pill" placeholder="Tìm kiếm..." name="keyword" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary rounded-pill" type="submit" name="search">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>
<style>
.input-group {
    width: 300px; 
    border: gray;
}

.form-control {
    border: none; 
}

.btn-primary {
    background-color: #007bff; /* Màu nền của nút tìm kiếm */
    border-color: #007bff; /* Màu đường viền của nút tìm kiếm */
}

.btn-primary:hover {
    background-color: #0056b3; /* Màu nền của nút khi hover */
    border-color: #0056b3; /* Màu đường viền của nút khi hover */
}

</style>
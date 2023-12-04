<style>
    #image-grid {
        display: flex;
        flex-wrap: nowrap; 
    }

    #image-grid img {
        width: 120px;
        height: 120px;
        object-fit: cover; 
        border: 1px solid #ccc;
        margin-right: 10px;
    }
</style>
<h1 class="text text-center">Thêm ảnh</h1>

<div class="row row justify-content-center">
    <div class="col-lg-10">
        <div class="card mx-auto">
            <div class="card-body">
            <form action="<?= $CLIENT_URL ?>/sell/sell.php" method="POST"  enctype="multipart/form-data" id="add_product">
                <div>
                    <input type="file" id="file-uploader" name="image_url" accept=".jpg, .jpeg, .png" multiple>
                    <?php
                    ?>
                    <div id="image-grid" style="width: 150px; height: 120px;">
                    </div>
                </div>  
                <div class="mb-3">
                        <button type="submit" name="btn_insert_image" class="btn btn-primary mt-4 float-lg-right"> Tiếp theo </button>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
const fileUploader = document.getElementById('file-uploader');
fileUploader.setAttribute('multiple', true);
fileUploader.setAttribute('name', 'image_url[]');
const reader = new FileReader();
const imageGrid = document.getElementById('image-grid');

fileUploader.addEventListener('change', (event) => {
  const files = event.target.files;
  const file = files[0];
  
  const img = document.createElement('img');
  imageGrid.appendChild(img);
  img.src = URL.createObjectURL(file);
  img.name = 'images';
  img.alt = file.name;
});

</script>
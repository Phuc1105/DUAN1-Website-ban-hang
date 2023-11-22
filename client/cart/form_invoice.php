<div class="row m-1 pb-5">

    <form action="<?= $CLIENT_URL . '/cart/checkoutOnline.php' ?>" method="POST" class="col-6 m-auto" id="invoice"
        enctype="multipart/form-data">
        <h3 class="pt-3 pb-4">Shipment Details</h3>
        <div class="form-group form">
            <label for="">First and last name</label>
            <input type="text" name="name" id="" class="form-control rounded-pill" value="<?= $name ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <input type="hidden" name="user_id" id="" class="form-control rounded-pill" value="<?= $user_id ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Email address</label>
            <input type="text" name="email" id="" class="form-control rounded-pill" value="<?= $email ?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Phone number</label>
            <input type="text" name="phone" id="" class="form-control rounded-pill" placeholder="" value="<?= $phone?>"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Delivery address</label>
            <input type="text" name="address" id="" class="form-control rounded-pill" placeholder="" value="<?= $address?>"
                aria-describedby="helpId">
        </div>
        <input type="hidden" name="trang_thai" value="0">
        <div class="form-group">
            <label for="">Comment</label>
            <textarea name="ghi_chu" class="form-control" id=""></textarea>
        </div>
        <div class="d-flex ">
            <button type="submit" name="redirect" class="btn bg-warning text-white">Thanh toán Vnpay</button>
            <!-- <a href="checkoutOnline.php" name class="btn bg-warning text-white">Thanh toán Vnpay</a> -->
        </div>
    </form>

</div>
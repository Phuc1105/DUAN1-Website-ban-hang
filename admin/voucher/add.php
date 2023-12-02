<style>
    .thongbao{
        color: red;
        margin-top: 1%;
        margin-left: 0.2%;
    }
</style>
<div id="app">
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <h3><a href="<?= $ADMIN_URL ?>">Admin</a> / <a href="index.php">Voucher</a> / <a href="#">Add voucher</a></h3>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title text-center">
            ADD VOUCHER
            </h1>
        </div>
    </section>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="index.php?btn_insert" method="POST">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter product type name..." name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Reduce:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="reduce" placeholder="Enter voucher reduce..." name="reduce">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Quantity:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="quantity" placeholder="Enter voucher quantity..." name="quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Start date:</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="start_date" placeholder="Enter voucher start date..." name="start_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">End date:</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="end_date" placeholder="Enter voucher end date..." name="end_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label ">Status:</label>
                            <div class="col-sm-9">
                                <select class="col-sm-12 text-end control-label col-form-label form-control" name="status" id="">
                                    <option value="" selected disabled>Please select product status...</option>
                                    <option value="1">Activated</option>
                                    <option value="">Not activated</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 text-end control-label col-form-label">Describes:</label>
                            <div class="col-sm-9">
                            <textarea id="txtarea" spellcheck="false" name="discribe" id="discribe" class="form-control mb-3" id="textareaExample" rows="3" placeholder="Enter voucher descrisbes..."><?= isset($_REQUEST['describe']) ? $_REQUEST['describe'] : '' ?></textarea>
                            </div>
                        </div>
                    
                    </div>
            </div>
            <div class="border-top">
                <div class="card-body" style="display: flex;">
                    <button type="submit" class="btn btn-success" name="them">More</button>
                </div>
            </div>
            </form>
            <a href="index.php?btn_list"><button type="submit" class="btn btn-primary" name="them" style="position: absolute;margin-left: 8%;margin-top: -3.97%;">List vouchers</button></a>
        </div>

    </div>

</div>
</div>
<br>
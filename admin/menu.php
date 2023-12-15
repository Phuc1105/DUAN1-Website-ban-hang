 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $ADMIN_URL ?>/trang-chinh/">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">ADMIN</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?= $ADMIN_URL ?>/trang-chinh/">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Bảng thống kê</span></a>
     </li>
     <li class="nav-item active">
         <a class="nav-link" href="<?= $CLIENT_URL ?>/trang-chinh/">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Đi đến website</span></a>
     </li>

<!-- MENU QUẢN LÝ TÀI KHOẢN Ở ĐÂY -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
        Quản lý tài khoản
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Tài khoản</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/user/">Thêm</a>
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/user/index.php?btn_list">Danh sách</a>
             </div>
         </div>
     </li>

<!-- MENU QUẢN LÝ LOẠI SẢN PHẨM  -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
    Quản lý danh mục
     </div>
     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Danh mục</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?=$ADMIN_URL?>/loai-sp/">Thêm</a>
                 <a class="collapse-item" href="<?=$ADMIN_URL?>/loai-sp/index.php?btn_list">Danh sách</a>
             </div>
         </div>
     </li>
<!-- MENU QUẢN LÝ SẢN PHẨM  -->
     <!-- Divider --> 
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Quản lý sản phẩm
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Sản phẩm</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/san-pham/index.php?btn_list">Danh sách</a>
             </div>
         </div>
     </li>

<!-- MENU QUẢN LÝ HÓA ĐƠN    -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Quản lý hóa đơn  
    </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Invoice" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Hóa đơn</span>
         </a>
         <div id="Invoice" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="../invoice/index.php?btn_list">Danh sách</a>
             </div>
         </div>
     </li>

<!-- MENU QUẢN LÝ GIẢM GIÁ    -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <!-- <div class="sidebar-heading">
     Voucher product   
    </div> -->

     <!-- Nav Item - Pages Collapse Menu -->
     <!-- <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Discount" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Voucher</span>
         </a>
         <div id="Discount" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/voucher/">Add New Voucher</a>
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/voucher/index.php?btn_list">Voucher List</a>
             </div>
         </div>
     </li> -->

<!-- MENU QUẢN LÝ Bình luận  -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">  
     Quản lý bình luận và dánh giá
     </div>

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= $ADMIN_URL ?>/comment/index.php">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Danh sách bình luận</span></a>
     </li>

     <!-- Heading -->
     <div class="sidebar-heading">
        Thống kê
     </div>
     <!-- Nav Item - Tables -->
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Statistics" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Thống kê</span>
         </a>
         <div id="Statistics" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="../statistical-product">Thống kê sản phẩm</a>
                 <!-- <a class="collapse-item" href="../statistical-order">Thống kê hóa đơn</a> -->
                 <a class="collapse-item" href="../statistical-comment">Thống kê bình luận</a>
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $ADMIN_URL ?>/trang-chinh/">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">3TL</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?= $ADMIN_URL ?>/trang-chinh/">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>
     <li class="nav-item active">
         <a class="nav-link" href="<?= $CLIENT_URL ?>/trang-chinh/">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Web home page</span></a>
     </li>

<!-- MENU QUẢN LÝ TÀI KHOẢN Ở ĐÂY -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Account Management
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Account</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="buttons.html">Add Account</a>
                 <a class="collapse-item" href="cards.html">List of Customer Accounts</a>
             </div>
         </div>
     </li>

<!-- MENU QUẢN LÝ LOẠI SẢN PHẨM  -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Management Product Types
     </div>
     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Product Type</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/loai-sp/">Add New Product Type</a>
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/loai-sp/index.php?btn_list">List of Product Type</a>
             </div>
         </div>
     </li>
<!-- MENU QUẢN LÝ SẢN PHẨM  -->
     <!-- Divider --> 
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Product Management
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Product</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/san-pham/">Add New Product</a>
                 <a class="collapse-item" href="<?= $ADMIN_URL ?>/san-pham/index.php?btn_list">Product List</a>
             </div>
         </div>
     </li>

<!-- MENU QUẢN LÝ HÓA ĐƠN    -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Invoice Management     
    </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Invoice" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Invoice</span>
         </a>
         <div id="Invoice" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="login.html">Add New Invoice</a>
                 <a class="collapse-item" href="register.html">Invoice List</a>
             </div>
         </div>
     </li>

<!-- MENU QUẢN LÝ GIẢM GIÁ    -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Discount Management     
    </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Discount" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Discount</span>
         </a>
         <div id="Discount" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="login.html">Add New Discount</a>
                 <a class="collapse-item" href="register.html">Discount List</a>
             </div>
         </div>
     </li>

<!-- MENU QUẢN LÝ Bình luận  -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Comment Management
     </div>

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>List of Comments</span></a>
     </li>

<!-- MENU QUẢN LÝ THÔNG TIN  -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Information Management
     </div>
     <!-- Nav Item - Tables -->
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Information" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Information</span>
         </a>
         <div id="Information" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="login.html">Product Information</a>
                 <a class="collapse-item" href="register.html">User Information</a>
                 <a class="collapse-item" href="register.html">Comment Information</a>
                 <a class="collapse-item" href="register.html">Order Information</a>
                 <a class="collapse-item" href="register.html">Discount Information</a>
             </div>
         </div>
     </li>


<!-- MENU QUẢN LÝ THỐNG KÊ  -->
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
     Managing Statistics
     </div>
     <!-- Nav Item - Tables -->
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Statistics" aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Statistics</span>
         </a>
         <div id="Statistics" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="login.html">Product Statistics</a>
                 <a class="collapse-item" href="register.html">Order Statistics</a>
                 <a class="collapse-item" href="register.html">Comment Statistics</a>
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
<!DOCTYPE html>
<html lang="en">
<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>

    <title><?= $this->fetch('title') ?></title>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-2.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'home'])?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Sunday Everyday</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'home']) ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer"
               aria-expanded="true" aria-controls="collapseCustomer">
                <i class="fas fa-user fa-cog"></i>
                <span>Customers</span>
            </a>
            <div id="collapseCustomer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Customer functions:</h6>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Customers', 'action'=>'index']) ?>">List Customers</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Customers', 'action'=>'add']) ?>">Add New Customer</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder"
               aria-expanded="true" aria-controls="collapseOrder">
                <i class="fas fa-user fa-cog"></i>
                <span>Orders</span>
            </a>
            <div id="collapseOrder" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Order functions:</h6>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Orders', 'action'=>'index']) ?>">List Customer Orders</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Orders', 'action'=>'add']) ?>">Add New Customer Order</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Enquiries', 'action'=>'add']) ?>">Restocking Product</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Enquiries', 'action'=>'index']) ?>">Show All Restocking</a>

                </div>
            </div>
        </li>

        <!-- Nav Item - Product Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
               aria-expanded="true" aria-controls="collapseProduct">
                <i class="fas fa-prescription-bottle"></i>
                <span>Products</span>
            </a>
            <div id="collapseProduct" class="collapse" aria-labelledby="headingProduct"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Product Functions:</h6>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Products', 'action'=>'index']) ?>">List Products</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Products', 'action'=>'add']) ?>">Add New Product</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'ProductImages', 'action'=>'add']) ?>">Add New Product Image</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Staff Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStaff"
               aria-expanded="true" aria-controls="collapseStaff">
                <i class="fas fa-user-friends"></i>
                <span>Staffs</span>
            </a>
            <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Staff Functions:</h6>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Staffs', 'action'=>'index']) ?>">List Staffs</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Staffs', 'action'=>'add']) ?>">Add New Staff</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Supplier Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupplier"
               aria-expanded="true" aria-controls="collapseSupplier">
                <i class="fas fa-user-tie"></i>
                <span>Suppliers</span>
            </a>
            <div id="collapseSupplier" class="collapse" aria-labelledby="headingSupplier"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Supplier Functions:</h6>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Suppliers', 'action'=>'index']) ?>">List Suppliers</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Suppliers', 'action'=>'add']) ?>">Add New Supplier</a>
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

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->Identity->get('username')?></span>
                            <?=$this->Html->image('undraw_profile.svg',['class'=>'img-profile rounded-circle']);?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <!--
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <?= $this->Html->link(__('Logout'), ['controller' => 'Staffs', 'action' => 'logout'],['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>

<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>

<!-- Custom scripts for all pages-->
<?= $this->Html->script('sb-admin-2.min') ?>
<?= $this->fetch('script') ?>

</body>

</html>

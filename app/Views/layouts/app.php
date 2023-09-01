<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project Arca | Rata-Rata Penghasilan</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="<?=base_url()?>/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?=base_url()?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?=base_url()?>/dist/css/adminlte.min.css">
<style>
    .dark-mode .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .dark-mode .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #0bb885;
    }

    a {
        color: #0bb885;
    }

    a.product-title {
        color: white;
        /* color: #ff814a; */
    }

    .dark-mode a:not(.btn):hover {
        color: #0bb885;
    }

    .products-list .product-title {
        font-weight: 100;
    }

    .badge-info {
        background-color: #0bb885;
    }

    .bg-info {
        background-color: #0bb885 !important;
    }

    .dark-mode .card-primary:not(.card-outline)>.card-header {
        background-color: #0bb885;
    }

    .dark-mode .page-item.active .page-link {
        background-color: #0bb885;
        border-color: #0bb885;
    }

    .dark-mode .page-item .page-link {
        color: #0bb885;
    }
</style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?=base_url()?>img/arca-logo.png" alt="Project Arca Logo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <span class="m-topbar__userpic">
                <img alt="" class="m--img-rounded" style="width: 32px;" src="<?=base_url()?>/dist/img/no-avatar.png">
            </span>
            <span style="padding: 0px 12px;">
                Hello, <?= session()->get('username') ?>!
            </span>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?=base_url('/')?>" class="brand-link">
    <img src="<?=base_url()?>img/arca-logo.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Project Arca</span>
    </a>

    <div class="sidebar">

    <nav class="mt-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-calendar"></i>
                <p>
                    Rata Penghasilan
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('logoutprocess') ?>" class="nav-link">
                <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                <p>
                    Logout
                </p>
                </a>
            </li>
        </ul>
    </nav>
    </div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="m-0">Rata-rata Penghasilan</h1>
        </div><!-- /.col -->
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item active">Home</li>
            <li class="breadcrumb-item"><a href="<?= site_url('average-income') ?>">Rata Penghasilan</a></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <?= $this->renderSection('content') ?>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2023.</strong>
    All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?=base_url()?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url()?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=base_url()?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url()?>/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url()?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url()?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url()?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>/dist/js/demo.js"></script>
<?= $this->renderSection('script') ?>
</body>
</html>

<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Tienda Ana</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fontawesome.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/ionicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/linearicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/open-iconic.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/pe-icon-7-stroke.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/feather.css'); ?>">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-material.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/shreerang-material.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/uikit.css'); ?>">

    <!-- Libs -->
    <link rel="stylesheet" href="<?= base_url('assets/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/libs/flot/flot.css'); ?>">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="<?= base_url('assets/images/logo.png');?>" alt="Inventory App" class="img-fluid">
                    </span>
                    <a href="<?=site_url();?>" class="app-brand-text demo sidenav-text font-weight-normal ml-2">IA</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="<?=site_url();?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Principal</div>
                            <div class="pl-1 ml-auto">
                                <div class="badge badge-danger">Inicio</div>
                            </div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">General</li>
                    <li class="sidenav-item">
                        <a href="<?= site_url('Products/index');?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-type"></i>
                            <div>Productos</div>
                        </a>
                    </li>

                    <!-- UI elements -->
                    <li class="sidenav-item">
                        <a href="<?= site_url('Products/ingresos');?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-box"></i>
                            <div>Ingresos</div>
                        </a>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Reportes</li>
                    <li class="sidenav-item">
                        <a href="<?= site_url('Reports/dia');?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-clipboard"></i>
                            <div>Reporte Diario</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="<?= site_url('Reports/semana');?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-grid"></i>
                            <div>Reporte Semanal</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="<?= site_url('Reports/mes');?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-grid"></i>
                            <div>Reporte Mensual</div>
                        </a>
                    </li>
                    <!--  Icons -->
                    <?php if($this->session->userdata('rol')=='Administrador'):?>
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-item">
                        <a href="<?= site_url('Users/index');?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-users"></i>
                            <div>Usuarios</div>
                        </a>
                    </li>
                    <?php endif;?>
                    
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="<?=base_url('assets/images/logo-dark.png');?>" alt="Inventory App" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">IA</span>
                    </a>

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="assets/img/avatars/1.png" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?=$this->session->userdata('name');?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; Perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="<?=base_url('Home/LogOff');?>" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">
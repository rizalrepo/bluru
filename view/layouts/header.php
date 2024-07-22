<?php
if (!isset($_SESSION['login'])) {
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    header('Location: ' . base_url() . '/view/auth/login');
    exit;
}
?>
<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url() ?>/assets/" data-template="horizontal-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sistem Informasi Manajemen Pelayanan Dan Anggaran Desa Bluru</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />

    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/@form-validation/form-validation.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/select2/select2.css" />

    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/datatables/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/datatables/responsive.bootstrap5.css">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/custom/style.min.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url() ?>/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url() ?>/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-xxl">
                    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                        <a href="#" class="app-brand-link">
                            <span class="app-brand-logo demo">
                                <img src="<?= base_url() ?>/assets/img/logo.png" alt="Logo" width="32px">
                            </span>
                            <span class="app-brand-text demo menu-text fw-bold">Desa Bluru</span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                            <i class="ti ti-x ti-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="ti ti-md"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- / Style Switcher-->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?= base_url() ?>/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?= base_url() ?>/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block"><?= $_SESSION['nm_user'] ?></span>
                                                    <small class="text-muted"><?= $_SESSION['username'] ?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url() ?>/view/auth/edit-password">
                                            <i class="ti ti-key me-2 ti-sm"></i>
                                            <span class="align-middle">Edit Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item confirm-logout" href="<?= base_url() ?>/view/auth/logout">
                                            <i class=" ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                        <input type="text" class="form-control search-input border-0" placeholder="Search..." aria-label="Search..." />
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->
                    <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                        <div class="container-xxl d-flex h-100">
                            <ul class="menu-inner">
                                <?php if ($_SESSION['level'] == 1) { ?>
                                    <li class="menu-item <?= isActive($page, 'dashboard') ?>">
                                        <a href="<?= base_url() ?>/view/admin" class="menu-link">
                                            <i class="menu-icon tf-icons ti ti-dashboard"></i>
                                            <div>Dashboard</div>
                                        </a>
                                    </li>
                                    <li class="menu-item <?= isActive($page, ['user', 'jenis_fasilitas', 'jenis_kegiatan', 'dana']) ?>">
                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ti ti-server"></i>
                                            <div>Data Master</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item <?= isActive($page, 'user') ?>">
                                                <a href="<?= base_url() ?>/view/admin/user" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-users"></i>
                                                    <div>Data Pengguna</div>
                                                </a>
                                            </li>
                                            <li class="menu-item <?= isActive($page, 'jenis_fasilitas') ?>">
                                                <a href="<?= base_url() ?>/view/admin/jenis-fasilitas" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                                                    <div>Data Jenis Fasilitas</div>
                                                </a>
                                            </li>
                                            <li class="menu-item <?= isActive($page, 'jenis_kegiatan') ?>">
                                                <a href="<?= base_url() ?>/view/admin/jenis-kegiatan" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-category"></i>
                                                    <div>Data Jenis Kegiatan</div>
                                                </a>
                                            </li>
                                            <li class="menu-item <?= isActive($page, 'dana') ?>">
                                                <a href="<?= base_url() ?>/view/admin/dana" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-wallet"></i>
                                                    <div>Data Sumber Dana</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item <?= isActive($page, ['penduduk']) ?>">
                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ti ti-chart-histogram"></i>
                                            <div>Data Manajemen</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item <?= isActive($page, 'penduduk') ?>">
                                                <a href="<?= base_url() ?>/view/admin/penduduk" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-id-badge-2"></i>
                                                    <div>Data Penduduk</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <li class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ti ti-report"></i>
                                            <div>Laporan</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#lapSample" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-report"></i>
                                                    <div>Sample Laporan</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> -->
                                <?php } ?>
                            </ul>
                        </div>
                    </aside>
                    <!-- / Menu -->
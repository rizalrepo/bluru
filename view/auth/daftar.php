<?php
require '../../app/config.php';
$page = 'penduduk';

$jk = [
    ''  => '-- pilih --',
    'Laki-laki' => 'Laki-laki',
    'Perempuan' => 'Perempuan'
];

$gol = [
    ''  => '-- pilih --',
    'A' => 'A',
    'B' => 'B',
    'AB' => 'AB',
    'O' => 'O',
];

$status = [
    ''  => '-- pilih --',
    'Belum Kawin' => 'Belum Kawin',
    'Kawin' => 'Kawin',
    'Cerai Hidup' => 'Cerai Hidup',
    'Cerai Mati' => 'Cerai Mati',
];

$wn = [
    ''  => '-- pilih --',
    'WNI' => 'WNI',
    'WNA' => 'WNA'
];

$post_data = get_form_data();
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

                            <li>
                                <a href="login" class="btn btn-sm btn-primary px-2 px-sm-4 px-lg-2 px-xl-4 waves-effect waves-light ms-3"><span class="tf-icons ti ti-login me-md-1"></span><span class="d-none d-md-block">Login</span></a>
                            </li>
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

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <div class="justify-content-between d-flex align-items-center">
                                <h5 class="card-header">
                                    <i class="menu-icon tf-icons ti ti-id-badge-2 me-2"></i>Pendaftaran Akun Penduduk
                                </h5>
                                <div class="pe-4">
                                    <span class="btn btn-sm btn-facebook waves-effect" id="regisInstructions" data-bs-toggle="popover" data-bs-placement="top">
                                        <i class="ti ti-info-circle me-2"></i>Informasi Pendaftaran Akun
                                    </span>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card-body pt-6">
                                <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') { ?>
                                    <div id="notif-failed" class="alert alert-primary" role="alert">
                                        <i class="ti ti-alert-triangle me-2"></i>
                                        <span>
                                            <b><?= $_SESSION['pesan'] ?></b>
                                        </span>
                                    </div>
                                <?php $_SESSION['pesan'] = '';
                                } ?>
                                <form class="needs-validation" method="POST" novalidate enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nm_penduduk" class="form-control" value="<?= isset($_POST['nm_penduduk']) ? htmlspecialchars($_POST['nm_penduduk']) : form_value('nm_penduduk') ?>" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="nik_penduduk" class="form-control" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?= isset($_POST['nik_penduduk']) ? htmlspecialchars($_POST['nik_penduduk']) : form_value('nik_penduduk') ?>" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tmpt_lahir_penduduk" class="form-control" value="<?= isset($_POST['tmpt_lahir_penduduk']) ? htmlspecialchars($_POST['tmpt_lahir_penduduk']) : form_value('tmpt_lahir_penduduk') ?>" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tgl_lahir_penduduk" class="form-control" value="<?= isset($_POST['tgl_lahir_penduduk']) ? htmlspecialchars($_POST['tgl_lahir_penduduk']) : form_value('tgl_lahir_penduduk') ?>" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <?= form_dropdown('jk_penduduk', $jk, isset($_POST['jk_penduduk']) ? $_POST['jk_penduduk'] : form_value('jk_penduduk'), 'class="form-select select2" required') ?>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Golongan Darah</label>
                                        <div class="col-sm-10">
                                            <?= form_dropdown('gol_darah_penduduk', $gol, isset($_POST['gol_darah_penduduk']) ? $_POST['gol_darah_penduduk'] : form_value('gol_darah_penduduk'), 'class="form-select select2" required') ?>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat_penduduk" class="form-control" required><?= isset($_POST['alamat_penduduk']) ? htmlspecialchars($_POST['alamat_penduduk']) : form_value('alamat_penduduk') ?></textarea>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Agama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="agama_penduduk" class="form-control" value="<?= isset($_POST['agama_penduduk']) ? htmlspecialchars($_POST['agama_penduduk']) : form_value('agama_penduduk') ?>" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                                        <div class="col-sm-10">
                                            <?= form_dropdown('status_penduduk', $status, isset($_POST['status_penduduk']) ? $_POST['status_penduduk'] : form_value('status_penduduk'), 'class="form-select select2" required') ?>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pekerjaan_penduduk" class="form-control" value="<?= isset($_POST['pekerjaan_penduduk']) ? htmlspecialchars($_POST['pekerjaan_penduduk']) : form_value('pekerjaan_penduduk') ?>" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                        <div class="col-sm-10">
                                            <?= form_dropdown('wn_penduduk', $wn, isset($_POST['wn_penduduk']) ? $_POST['wn_penduduk'] : form_value('wn_penduduk'), 'class="form-select select2" required') ?>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Scan KTP</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="file_ktp" class="form-control" accept="image/*" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                            <small class="text-white fw-bold badge bg-primary">Hanya file gambar yang diizinkan (JPG, JPEG, PNG, GIF). Maksimum 2MB.</small>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">No. HP</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="hp_penduduk" class="form-control" value="<?= isset($_POST['hp_penduduk']) ? htmlspecialchars($_POST['hp_penduduk']) : form_value('hp_penduduk') ?>" required>
                                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9 text-end">
                                                <button type="reset" class="btn btn-danger me-1"><i class="ti ti-refresh me-2"></i>Reset</button>
                                                <button type="submit" name="submit" class="btn btn-success"><i class="ti ti-device-floppy me-2"></i>Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div class="footer-container d-flex align-items-center justify-content-center py-2 flex-md-row flex-column">
                                <div>
                                    ©
                                    Sistem Informasi Manajemen Pelayanan Dan Anggaran Desa Bluru
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="<?= base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->
    <script src="<?= base_url() ?>/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/@form-validation/auto-focus.js"></script>
    <script src="<?= base_url() ?>/assets/js/form-validation.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/select2/select2.js"></script>
    <script src="<?= base_url() ?>/assets/js/forms-selects.js"></script>

    <script src="<?= base_url() ?>/assets/vendor/libs/datatables/dataTables.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/datatables/dataTables.bootstrap5.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/datatables/dataTables.responsive.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/datatables/responsive.bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <script src="<?= base_url() ?>/assets/custom/script.min.js"></script>

    <script src="<?= base_url() ?>/assets/js/ui-popover.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var popoverContent = 'JIka muncul pesan <b><i>NIK sudah terdaftar dalam sistem</i></b> berarti Akun sudah terdaftar dan silahkan Login menggunakan NIK sebagai Username dan Password dengan benar';

            var popoverTitle = '<i class="ti ti-info-circle me-1"></i>Informasi Pendaftaran';

            var popover = new bootstrap.Popover(document.getElementById('regisInstructions'), {
                html: true,
                content: popoverContent,
                title: popoverTitle,
                template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
            });
        });
    </script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $nm_penduduk = $_POST['nm_penduduk'];
    $nik_penduduk = $_POST['nik_penduduk'];
    $tmpt_lahir_penduduk = $_POST['tmpt_lahir_penduduk'];
    $tgl_lahir_penduduk = $_POST['tgl_lahir_penduduk'];
    $jk_penduduk = $_POST['jk_penduduk'];
    $gol_darah_penduduk = $_POST['gol_darah_penduduk'];
    $alamat_penduduk = $_POST['alamat_penduduk'];
    $agama_penduduk = $_POST['agama_penduduk'];
    $status_penduduk = $_POST['status_penduduk'];
    $pekerjaan_penduduk = $_POST['pekerjaan_penduduk'];
    $wn_penduduk = $_POST['wn_penduduk'];
    $hp_penduduk = $_POST['hp_penduduk'];
    $created_at = date('Y-m-d H:i:s');

    $check_nik = $con->query("SELECT * FROM penduduk WHERE nik_penduduk = '$nik_penduduk'");
    if ($check_nik->num_rows > 0) {
        echo "
        <script type='text/javascript'>
            Swal.fire({
                text: 'NIK sudah terdaftar dalam sistem.',
                icon: 'error',
                timer: 3000,
                showConfirmButton: false
            }); 
        </script>";
        return;
    }

    $f_ktp = "";
    if (!empty($_FILES['file_ktp']['name'])) {
        // UPLOAD FILE 
        $file      = $_FILES['file_ktp']['name'];
        $x_file    = explode('.', $file);
        $ext_file  = end($x_file);
        $file_ktp = rand(1000000, 9999999) . '.' . $ext_file;
        $size_file = $_FILES['file_ktp']['size'];
        $tmp_file  = $_FILES['file_ktp']['tmp_name'];
        $dir_file  = '../../storage/ktp/';
        $allow_ext        = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'gif', 'GIF');
        $allow_size       = 2097152; // 2 MB

        if (in_array($ext_file, $allow_ext) === true) {
            if ($size_file <= $allow_size) {
                move_uploaded_file($tmp_file, $dir_file . $file_ktp);
                $f_ktp .= "Upload Success";
            } else {
                echo "
                <script type='text/javascript'>
                    Swal.fire({
                        text:  'Ukuran File Terlalu Besar, Maksimal 2 Mb',
                        icon: 'error',
                        timer: 3000,
                        showConfirmButton: false
                    }); 
                </script>";
                return;
            }
        } else {
            echo "
            <script type='text/javascript'>
                Swal.fire({
                    text:  'Format File Tidak Didukung. File Harus Berupa Gambar',
                    icon: 'error',
                    timer: 3000,
                    showConfirmButton: false
                }); 
            </script>";
            return;
        }
    } else {
        echo "
        <script type='text/javascript'>
            Swal.fire({
                text:  'File KTP harus diupload',
                icon: 'error',
                timer: 3000,
                showConfirmButton: false
            }); 
        </script>";
        return;
    }

    if (!empty($f_ktp)) {
        $tambah = $con->query("INSERT INTO penduduk VALUES (
            default,
            '$nm_penduduk', 
            '$nik_penduduk',
            '$tmpt_lahir_penduduk',
            '$tgl_lahir_penduduk',
            '$jk_penduduk',
            '$gol_darah_penduduk',
            '$alamat_penduduk',
            '$agama_penduduk',
            '$status_penduduk',
            '$pekerjaan_penduduk',
            '$wn_penduduk',
            '$file_ktp',
            '$hp_penduduk',
            '$created_at'
        )");

        if ($tambah) {
            $pw = md5($nik_penduduk);
            $id_penduduk = $con->insert_id;

            $con->query("INSERT INTO user (id_penduduk, nm_user, username, password, level) VALUES (
                '$id_penduduk',
                '$nm_penduduk',
                '$nik_penduduk',
                '$pw',
                2
            )");
            echo "
            <script type='text/javascript'>
                Swal.fire({
                    title: 'Daftar Berhasil',
                    text: 'Silahkan Login menggunakan NIK anda untuk username dan passwordnya !',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = 'login';
                });
            </script>";
            exit;
        } else {
            $_SESSION['pesan'] = "Data anda gagal disimpan. Ulangi sekali lagi";
        }
    }
}
?>
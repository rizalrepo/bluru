<?php require '../../app/config.php'; ?>

<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url() ?>/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Sistem</title>

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
    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/pages/page-auth.css" />

    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/sweetalert2/sweetalert2.css" />

    <!-- Helpers -->
    <script src="<?= base_url() ?>/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url() ?>/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>/assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-8 p-0">
                <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">

                    <img src="<?= base_url() ?>/assets/img/login.png" width="280px" />

                    <h1 class="ms-3 me-1">
                        <span class="display-5">SISTEM INFORMASI</span>
                        <br>
                        Manajemen Pelayanan Dan Anggaran Desa Bluru
                        <br>
                        <span class="fs-6">Pelayanan Publik yang tersedia :
                            <ul>
                                <li>Pengaduan</li>
                                <li>Permohonan Surat Online</li>
                            </ul>
                        </span>
                    </h1>


                    <img src="<?= base_url() ?>/assets/img/illustrations/bg-shape-image-light.png" alt="auth-login-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png" />
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-4 align-items-center p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <h3 class="mb-2 text-center">
                        <img src="<?= base_url() ?>/assets/img/logo.png" alt="Logo" width="180px">
                    </h3>

                    <form class="mb-3" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" autofocus />
                        </div>
                        <div class="mb-4 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100" type="submit" name="sign">
                            <span class="d-inline-flex align-items-center justify-content-center">
                                Sign in <i class="ti ti-login ms-2"></i>
                            </span>
                        </button>
                        <p class="text-center mt-3 mb-0">
                            <span>Belum Punya Akun?</span>
                            <a href="daftar">
                                <span>Daftar Sekarang</span>
                            </a>
                        </p>
                        <div class="text-center">
                            <span class="btn btn-sm btn-facebook waves-effect mt-3" id="loginInstructions" data-bs-toggle="popover" data-bs-placement="top">
                                <i class="ti ti-info-circle me-1"></i>Informasi Login
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>

    <!-- / Content -->

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

    <!-- Vendors JS -->
    <script src="<?= base_url() ?>/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url() ?>/assets/js/pages-auth.js"></script>

    <script src="<?= base_url() ?>/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

    <script src="<?= base_url() ?>/assets/js/ui-popover.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var popoverContent = '<ul>' +
                '<li>Untuk pertama kali login, silahkan gunakan NIK untuk Username dan Password, kemudian silahkan ubah password untuk keamanan Akun anda.</li>' +
                '<li class="mt-2 mb-0">Silahkan gunakan NIK untuk Username lalu untuk Password isikan sesuai password yang sudah diubah untuk Login.</li>' +
                '</ul>';

            var popoverTitle = '<i class="ti ti-info-circle me-1"></i>Petunjuk Login';

            var popover = new bootstrap.Popover(document.getElementById('loginInstructions'), {
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
if (isset($_POST['sign'])) {
    $user = $con->real_escape_string($_POST['username']);
    $pass = $con->real_escape_string($_POST['password']);

    $pass = md5($pass);
    $query = $con->query("SELECT * FROM user WHERE username = '$user' AND password='$pass'");
    $data = $query->fetch_array();
    $username = $data['username'];
    $password = $data['password'];
    $id = $data['id_user'];
    $level = $data['level'];
    $usr = $data['nm_user'];

    if ($user == $username && $pass == $password) {

        $_SESSION["login"] = true;
        $_SESSION['id_user'] = $id;
        $_SESSION['level'] = $level;
        $_SESSION['nm_user'] = $usr;
        $_SESSION['username'] = $username;

        if ($level == 1) {
            $url = '../admin/';
        }

        echo "
        <script type='text/javascript'>
            setTimeout(function () {    
                Swal.fire({
                    title: 'Login Berhasil',
                    text:  'Kamu Login Sebagai $usr',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });     
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('$url');
            } ,2000);   
        </script>";
    } else {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {    
                Swal.fire({
                    title: 'Login Gagal',
                    text:  'Username atau Password Tidak Ditemukan',
                    icon: 'error',
                    timer: 2000,
                    showConfirmButton: false
                });     
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('login');
            } ,2000);   
        </script>";
    }
}

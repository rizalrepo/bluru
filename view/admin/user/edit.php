<?php
require '../../../app/config.php';
$page = 'user';
include_once '../../layouts/header.php';

$id = $_GET['id'];
$row = $con->query("SELECT * FROM user WHERE id_user = '$id'")->fetch_array();
$level = [
    '' => '-- Pilih --',
    '1' => 'Admin',
    '2' => 'Penduduk',
    '3' => 'Kepala Desa',
];
?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="justify-content-between d-flex align-items-center">
            <h5 class="card-header">
                <i class="menu-icon tf-icons ti ti-users me-2"></i>Edit Data Pengguna
            </h5>
            <div class="pe-4">
                <a href="index" class="btn btn-sm btn-secondary"><i class="ti ti-circle-arrow-left me-2"></i>Kembali</a>
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
                    <label class="col-sm-2 col-form-label">Nama Pengguna</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_user" class="form-control" value="<?= $row['nm_user'] ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3 form-password-toggle">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <div class="form-password-toggle">
                            <div class="input-group input-group-merge">
                                <input type="password" class="form-control" name="password">
                                <span class="input-group-text rounded-end cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <small class="text-danger fst-italic">*Kosongkan Password Jika Tidak Diubah</small>
                    </div>
                </div>
                <?php if ($row['level'] != 2) { ?>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Level Pengguna</label>
                        <div class="col-sm-10">
                            <?= form_dropdown('level', $level, $row['level'], 'class="form-select select2" required') ?>
                            <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                        </div>
                    </div>
                <?php } ?>
                <div class="pt-2">
                    <div class="row justify-content-end">
                        <div class="col-sm-9 text-end">
                            <button type="reset" class="btn btn-danger me-1"><i class="ti ti-refresh me-2"></i>Reset</button>
                            <button type="submit" name="submit" class="btn btn-success"><i class="ti ti-device-floppy me-2"></i>Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Content -->

<?php
include_once '../../layouts/footer.php';

if (isset($_POST['submit'])) {
    $nm_user = $_POST['nm_user'];
    $username = $_POST['username'];
    $pw = !empty($_POST['password']) ? md5($_POST['password']) : $row['password'];
    $level = !empty($_POST['level']) ? $_POST['level'] : $row['password'];

    $update = $con->query("UPDATE user SET 
        nm_user = '$nm_user', 
        username = '$username', 
        password = '$pw', 
        level = '$level' 
        WHERE id_user = '$id'
    ");

    if ($update) {
        $_SESSION['pesan'] = "Data Berhasil di Update";
        echo "<meta http-equiv='refresh' content='0; url=index'>";
    } else {
        $_SESSION['pesan'] = "Data anda gagal diupdate. Ulangi sekali lagi";
        echo "<meta http-equiv='refresh' content='0; url=edit?id=$id'>";
    }
}
?>
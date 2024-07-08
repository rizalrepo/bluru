<?php
require '../../../app/config.php';
$page = 'jenis_fasilitas';
include_once '../../layouts/header.php';

$id = $_GET['id'];
$row = $con->query("SELECT * FROM jenis_fasilitas WHERE id_jenis_fasilitas = '$id'")->fetch_array();
?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="justify-content-between d-flex align-items-center">
            <h5 class="card-header">
                <i class="menu-icon tf-icons ti ti-chart-pie me-2"></i>Edit Data Jenis Fasilitas
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
                    <label class="col-sm-2 col-form-label">Jenis Fasilitas</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_jenis_fasilitas" class="form-control" value="<?= $row['nm_jenis_fasilitas'] ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
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
    $nm_jenis_fasilitas = $_POST['nm_jenis_fasilitas'];

    $update = $con->query("UPDATE jenis_fasilitas SET 
        nm_jenis_fasilitas = '$nm_jenis_fasilitas'
        WHERE id_jenis_fasilitas = '$id'
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
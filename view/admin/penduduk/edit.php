<?php
require '../../../app/config.php';
$page = 'penduduk';
include_once '../../layouts/header.php';

$id = $_GET['id'];
$row = $con->query("SELECT * FROM penduduk WHERE id_penduduk = '$id'")->fetch_array();

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
$nik_lama = $row['nik_penduduk'];
$file_lama = $row['file_ktp'];
?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="justify-content-between d-flex align-items-center">
            <h5 class="card-header">
                <i class="menu-icon tf-icons ti ti-id-badge-2 me-2"></i>Edit Data Penduduk
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
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nm_penduduk" class="form-control" value="<?= isset($_POST['nm_penduduk']) ? htmlspecialchars($_POST['nm_penduduk']) : htmlspecialchars($row['nm_penduduk']) ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" name="nik_penduduk" class="form-control" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?= isset($_POST['nik_penduduk']) ? htmlspecialchars($_POST['nik_penduduk']) : htmlspecialchars($row['nik_penduduk']) ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tmpt_lahir_penduduk" class="form-control" value="<?= isset($_POST['tmpt_lahir_penduduk']) ? htmlspecialchars($_POST['tmpt_lahir_penduduk']) : htmlspecialchars($row['tmpt_lahir_penduduk']) ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_lahir_penduduk" class="form-control" value="<?= isset($_POST['tgl_lahir_penduduk']) ? htmlspecialchars($_POST['tgl_lahir_penduduk']) : htmlspecialchars($row['tgl_lahir_penduduk']) ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <?= form_dropdown('jk_penduduk', $jk, isset($_POST['jk_penduduk']) ? $_POST['jk_penduduk'] : htmlspecialchars($row['jk_penduduk']), 'class="form-select select2" required') ?>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Golongan Darah</label>
                    <div class="col-sm-10">
                        <?= form_dropdown('gol_darah_penduduk', $gol, isset($_POST['gol_darah_penduduk']) ? $_POST['gol_darah_penduduk'] : htmlspecialchars($row['gol_darah_penduduk']), 'class="form-select select2" required') ?>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat_penduduk" class="form-control" required><?= isset($_POST['alamat_penduduk']) ? htmlspecialchars($_POST['alamat_penduduk']) : htmlspecialchars($row['alamat_penduduk']) ?></textarea>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <input type="text" name="agama_penduduk" class="form-control" value="<?= isset($_POST['agama_penduduk']) ? htmlspecialchars($_POST['agama_penduduk']) : htmlspecialchars($row['agama_penduduk']) ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-10">
                        <?= form_dropdown('status_penduduk', $status, isset($_POST['status_penduduk']) ? $_POST['status_penduduk'] : htmlspecialchars($row['status_penduduk']), 'class="form-select select2" required') ?>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" name="pekerjaan_penduduk" class="form-control" value="<?= isset($_POST['pekerjaan_penduduk']) ? htmlspecialchars($_POST['pekerjaan_penduduk']) : htmlspecialchars($row['pekerjaan_penduduk']) ?>" required>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-10">
                        <?= form_dropdown('wn_penduduk', $wn, isset($_POST['wn_penduduk']) ? $_POST['wn_penduduk'] : htmlspecialchars($row['wn_penduduk']), 'class="form-select select2" required') ?>
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-form-label">Scan KTP</label>
                    <div class="col-sm-10">
                        <input type="file" name="file_ktp" class="form-control" accept="image/*">
                        <div class="invalid-feedback">Kolom tidak boleh kosong !</div>
                        <small class="text-white fw-bold badge bg-primary">Hanya file gambar yang diizinkan (JPG, JPEG, PNG, GIF). Maksimum 2MB. kosongkan jika tidak ingin mengedit KTP</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">No. HP</label>
                    <div class="col-sm-10">
                        <input type="number" name="hp_penduduk" class="form-control" value="<?= isset($_POST['hp_penduduk']) ? htmlspecialchars($_POST['hp_penduduk']) : htmlspecialchars($row['hp_penduduk']) ?>" required>
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

    if ($nik_penduduk != $nik_lama) {
        $check_nik = $con->query("SELECT * FROM penduduk WHERE nik_penduduk = '$nik_penduduk' AND id_penduduk != '$id'");
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
        $dir_file  = '../../../storage/ktp/';
        $allow_ext        = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'gif', 'GIF');
        $allow_size       = 2097152; // 2 MB

        if (in_array($ext_file, $allow_ext) === true) {
            if ($size_file <= $allow_size) {
                // Hapus file lama jika ada
                if (!empty($file_lama) && file_exists($dir_file . $file_lama)) {
                    unlink($dir_file . $file_lama);
                }
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
        $file_ktp = $file_lama; // Gunakan file KTP yang sudah ada
    }

    $update = $con->query("UPDATE penduduk SET 
        nm_penduduk = '$nm_penduduk', 
        nik_penduduk = '$nik_penduduk',
        tmpt_lahir_penduduk = '$tmpt_lahir_penduduk',
        tgl_lahir_penduduk = '$tgl_lahir_penduduk',
        jk_penduduk = '$jk_penduduk',
        gol_darah_penduduk = '$gol_darah_penduduk',
        alamat_penduduk = '$alamat_penduduk',
        agama_penduduk = '$agama_penduduk',
        status_penduduk = '$status_penduduk',
        pekerjaan_penduduk = '$pekerjaan_penduduk',
        wn_penduduk = '$wn_penduduk',
        file_ktp = '$file_ktp',
        hp_penduduk = '$hp_penduduk'
        WHERE id_penduduk = '$id'
    ");

    if ($update) {
        $con->query("UPDATE user SET
            username = '$nik_penduduk',
            nm_user = '$nm_penduduk'
            WHERE id_penduduk = '$id' 
        ");
        $_SESSION['pesan'] = "Data Berhasil di Update";
        echo "<meta http-equiv='refresh' content='0; url=index'>";
    } else {
        $_SESSION['pesan'] = "Data anda gagal diupdate. Ulangi sekali lagi";
        echo "<meta http-equiv='refresh' content='0; url=edit?id=$id'>";
    }
}
?>
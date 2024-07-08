<?php
require '../../../app/config.php';
$page = 'user';
include_once '../../layouts/header.php';
?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="justify-content-between d-flex align-items-center">
            <h5 class="card-header">
                <i class="menu-icon tf-icons ti ti-users me-2"></i>Data Pengguna
            </h5>
            <div class="pe-4">
                <a href="tambah" class="btn btn-sm btn-primary"><i class="ti ti-circle-plus me-2"></i>Tambah Data</a>
            </div>
        </div>
        <hr class="my-0">
        <div class="card-body pt-3">
            <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') { ?>
                <div id="notif-success" class="alert alert-primary" role="alert">
                    <i class="ti ti-circle-check me-2"></i>
                    <span>
                        <b><?= $_SESSION['pesan'] ?></b>
                    </span>
                </div>
            <?php $_SESSION['pesan'] = '';
            } ?>
            <div class="table-responsive text-nowrap">
                <table id="example" class="table table-hover table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pengguna</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = $con->query("SELECT * FROM user ORDER BY id_user DESC");
                        while ($row = $data->fetch_array()) {
                        ?>
                            <tr>
                                <td class="text-center" width="5%"><?= $no++ ?></td>
                                <td><?= $row['nm_user'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td class="text-center">
                                    <?php
                                    if ($row['level'] == 1) {
                                        echo 'Admin';
                                    } else if ($row['level'] == 2) {
                                        echo 'Penduduk';
                                    } else if ($row['level'] == 3) {
                                        echo 'Kepala Desa';
                                    }
                                    ?>
                                </td>
                                <td class="text-center" width="14%">
                                    <a href="edit?id=<?= $row[0] ?>" class="btn text-white btn-info btn-xs" title="Edit"><i class="ti ti-xs ti-edit me-1"></i>Edit</a>
                                    <?php if ($row['level'] != 2) { ?>
                                        <a href="hapus?id=<?= $row[0] ?>" class="btn btn-danger btn-xs confirm-hapus" title="Hapus"><i class="ti ti-xs ti-trash me-1"></i> Hapus</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?php
include_once '../../layouts/footer.php';
?>
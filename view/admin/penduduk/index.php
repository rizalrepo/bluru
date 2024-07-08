<?php
require '../../../app/config.php';
$page = 'penduduk';
include_once '../../layouts/header.php';
?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="justify-content-between d-flex align-items-center">
            <h5 class="card-header">
                <i class="menu-icon tf-icons ti ti-id-badge-2 me-2"></i>Data Penduduk
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
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>TTL</th>
                            <th>Usia</th>
                            <th>Gender</th>
                            <th>Gol. Darah</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Pekerjaan</th>
                            <th>Kewarganegaraan</th>
                            <th>No. HP</th>
                            <th>Teregistrasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = $con->query("SELECT * FROM penduduk ORDER BY id_penduduk DESC");
                        while ($row = $data->fetch_array()) { ?>
                            <tr>
                                <td class="text-center" width="5%"><?= $no++ ?></td>
                                <td><?= $row['nm_penduduk'] ?></td>
                                <td class="text-center"><?= $row['nik_penduduk'] ?></td>
                                <td><?= $row['tmpt_lahir_penduduk'] . ', ' . tgl($row['tgl_lahir_penduduk']) ?></td>
                                <td class="text-center"><?= usia($row['tgl_lahir_penduduk']) ?></td>
                                <td class="text-center"><?= $row['jk_penduduk'] ?></td>
                                <td class="text-center"><?= $row['gol_darah_penduduk'] ?></td>
                                <td><?= $row['alamat_penduduk'] ?></td>
                                <td class="text-center"><?= $row['agama_penduduk'] ?></td>
                                <td class="text-center"><?= $row['status_penduduk'] ?></td>
                                <td class="text-center"><?= $row['pekerjaan_penduduk'] ?></td>
                                <td class="text-center"><?= $row['wn_penduduk'] ?></td>
                                <td class="text-center"><?= $row['hp_penduduk'] ?></td>
                                <td class="text-center"><?= tglWaktu($row['created_at']) ?></td>
                                <td class="text-center" width="14%">
                                    <a href="<?= base_url('storage/ktp/' . $row['file_ktp']) ?>" target="_blank" class="btn text-white btn-success btn-xs" title="Edit"><i class="ti ti-xs ti-id-badge-2 me-2"></i>KTP</a>
                                    <a href="edit?id=<?= $row[0] ?>" class="btn text-white btn-info btn-xs" title="Edit"><i class="ti ti-xs ti-edit me-1"></i>Edit</a>
                                    <a href="hapus?id=<?= $row[0] ?>" class="btn btn-danger btn-xs confirm-hapus" title="Hapus"><i class="ti ti-xs ti-trash me-1"></i> Hapus</a>
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
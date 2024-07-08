<?php
include_once '../../app/config.php';
$page = 'dashboard';
include_once '../layouts/header.php';

$a = $con->query("SELECT COUNT(*) AS total FROM penduduk")->fetch_array();
?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-info me-3 p-2">
                                    <i class="ti ti-id-badge-2 ti-sm"></i>
                                </div>
                                <div class="card-info">
                                    <h6 class="mb-0"><?= $a['total'] ?> Data Penduduk</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?php include_once '../layouts/footer.php' ?>
<?php
require '../../../app/config.php';

$id = $_GET['id'];

$query = $con->query(" DELETE FROM user WHERE id_user = '$id' ");
if ($query) {
    $_SESSION['pesan'] = "Data Berhasil di Hapus";
    echo "<meta http-equiv='refresh' content='0; url=index'>";
} else {
    $_SESSION['pesan'] = "Data anda gagal dihapus. Ulangi sekali lagi";
    echo "<meta http-equiv='refresh' content='0; url=index'>";
}

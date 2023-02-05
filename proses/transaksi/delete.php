<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM transaksi_pembayaran WHERE id_transaksi = $id";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        echo "<script>alert('Transaksi Berhasil Dihapus');location.href=('../../dashboard/transaksi/')</script>";
    } else {
        echo "<script>alert('Transaksi Gagal Dihapus');location.href=('../../dashboard/transaksi/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../../')</script>";
}

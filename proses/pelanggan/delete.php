<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM pelanggan WHERE id = $id";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        echo "<script>alert('Pelanggan Berhasil Dihapus');location.href=('../../dashboard/pelanggan/')</script>";
    } else {
        echo "<script>alert('Pelanggan Gagal Dihapus');location.href=('../../dashboard/pelanggan/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../')</script>";
}

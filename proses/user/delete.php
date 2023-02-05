<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE id = $id";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        echo "<script>alert('User Berhasil Dihapus');location.href=('../../dashboard/user/')</script>";
    } else {
        echo "<script>alert('User Gagal Dihapus');location.href=('../../dashboard/user/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../')</script>";
}

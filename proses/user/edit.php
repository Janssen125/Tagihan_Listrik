<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['no_hp'];
    $hak = $_POST['hak'];

    $query = "UPDATE user SET nama = '$nama', email = '$email', no_hp = '$telp', hak_akses = $hak WHERE id = $id";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        echo "<script>alert('User Berhasil Diubah');location.href=('../../dashboard/user/')</script>";
    } else {
        echo "<script>alert('User Gagal Diubah');location.href=('../../dashboard/user/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../')</script>";
}

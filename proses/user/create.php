<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['no_hp'];
    $hak = $_POST['hak'];

    $query = "INSERT INTO user (nama,email,no_hp,hak_akses) VALUES ('$nama', '$email', '$telp', '$hak')";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        echo "<script>alert('User Berhasil Ditambah');location.href=('../../dashboard/user/')</script>";
    } else {
        echo "<script>alert('User Gagal Ditambah');location.href=('../../dashboard/user/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../')</script>";
}

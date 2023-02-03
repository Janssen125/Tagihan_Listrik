<!-- Proses Register -->
<?php

include("../../config/koneksi.php");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $telp = $_POST['telp'];

    $hak_akses = "Masyarakat";

    $sql = "INSERT INTO user (nama,password,email,telp,hak_akses)
    VALUES ('$nama', '$password', '$email', '$telp', '$hak_akses')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['pesan'] = "Register Berhasil";
        header('Location: ../../index.php');
    } else {
        $_SESSION['pesan'] = "Register Gagal";
        header('Location: ../../register/index.php');

    }
}

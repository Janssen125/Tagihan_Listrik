<!-- Proses Register -->
<?php

include("../config/koneksi.php");
session_start();
if (isset($_POST['submit'])) {

    $nama = $_POST['namalengkap'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
    $email = $_POST['email'];
    $telp = $_POST['no_hp'];

    if($password == $password2){
        $query0 = mysqli_query($db, "SELECT * FROM user WHERE nama == '$nama'");
        if($query0){
            echo "<script>alert('Nama Sudah Dipakai');location.href=('../');</script>";
        }
        else{
        
    $hak_akses = "Petugas";

    $sql = "INSERT INTO user (nama,password,email,no_hp,hak_akses)
    VALUES ('$nama', '$password', '$email', '$telp', '$hak_akses')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['hak_akses'] = $hak_akses;
        $_SESSION['nama'] = $nama;
        echo "<script>alert('Register Berhasil');location.href=('../dashboard')</script>";
    } else {
        echo "<script>alert('Register Gagal');location.href=('../')</script>";

    }
}
    }
    else{
        echo "<script>alert('Password Tidak Sama');location.href=('../')</script>";
    }
}
else{
    echo "<script>location.href=('../404/')</script>";
}

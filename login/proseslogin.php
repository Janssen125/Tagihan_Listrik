<!-- Proses Register -->
<?php

include("../config/koneksi.php");
session_start();
if (isset($_POST['submit'])) {

    $nama = $_POST['namalengkap'];
    $password = md5($_POST['password']);

    $query = mysqli_query($db, "SELECT * FROM user WHERE nama = '$nama' AND `password` = '$password'");

    if($query){
        while($row = mysqli_fetch_array($query)){
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
        }
            echo "<script>alert('Login Berhasil');location.href=('../')</script>";
    }
    else{
        echo "<script>alert('Nama atau password salah');location.href=('index.php')</script>";
    }
}
else{
    echo "<script>location.href=('../404/')</script>";
}

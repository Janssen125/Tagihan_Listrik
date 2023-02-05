<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['no_hp'];
    $tarif = $_POST['tarif'];
    $stand_meter = $_POST['stand_meter'];

    $query = "INSERT INTO pelanggan (nama_pelanggan,nik,alamat,nohp,tarif_daya,stand_meter) VALUES ('$nama', '$nik', '$alamat', '$telp', '$tarif', '$stand_meter')";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        echo "<script>alert('Pelanggan Berhasil Ditambah');location.href=('../../dashboard/pelanggan/')</script>";
    } else {
        echo "<script>alert('Pelanggan Gagal Ditambah');location.href=('../../dashboard/pelanggan/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../')</script>";
}

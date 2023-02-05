<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['no_hp'];
    $tarif = $_POST['tarif'];
    $stand_meter = $_POST['stand_meter'];

    $query = "UPDATE pelanggan SET id_pelanggan = '$id_pelanggan' ,nama_pelanggan = '$nama', nik = '$nik', alamat = '$alamat', nohp = '$telp', tarif_daya = '$tarif', stand_meter = '$stand_meter' WHERE id = $id";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        echo "<script>alert('Pelanggan Berhasil Diubah');location.href=('../../dashboard/pelanggan/')</script>";
    } else {
        echo "<script>alert('Pelanggan Gagal Diubah');location.href=('../../dashboard/pelanggan/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../')</script>";
}

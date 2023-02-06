<!-- Proses Register -->
<?php

include("../../config/koneksi.php");
// function getFormattedNumber(
//     $value,
//     $locale = 'en_US',
//     $style = NumberFormatter::DECIMAL,
//     $precision = 2,
//     $groupingUsed = true,
//     $currencyCode = 'IDR'
// ){
//     $formatter = new NumberFormatter($locale, $style);
//     $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
//     $formatter->setAttribute(NumberFormatter::GROUPING_USED, $groupingUsed);
//     if ($style == NumberFormatter::CURRENCY) {
//         $formatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, $currencyCode);
//     }
//     return $formatter->format($value);
// }

if (isset($_POST['submit'])) {

    $id_pelanggan = $_POST['id_pelanggan'];
    
    $query0 = mysqli_query($db, "SELECT * FROM pelanggan WHERE id_pelanggan = $id_pelanggan");
    while($row = mysqli_fetch_array($query0)){
        $tarif_daya = $row['tarif_daya'];
        $stand_meter = $row['stand_meter'];
    }
    $stand_meter_setelah = $stand_meter + round($_POST['tagihan'] / $_POST['hargakwh'],0,PHP_ROUND_HALF_UP);
    $tagihan = $_POST['tagihan'];
    $hargakwh = $_POST['hargakwh'];
    $bulan_tahun = $_POST['bulan_tahun'];
    $admin = $_POST['admin'];
    $total_bayar = $_POST['admin'] + $_POST['tagihan'];
    $p = new NumberFormatter("id", NumberFormatter::SPELLOUT);
    $total_terbilang = $p->format($total_bayar);
    $non_subsidi = $_POST['non_subsidi'];

    $query = "INSERT INTO transaksi_pembayaran VALUES('', '$tarif_daya', '$tagihan', '$bulan_tahun', '$stand_meter', '$stand_meter_setelah', '$hargakwh', '$admin', '$total_bayar', '$total_terbilang', '$non_subsidi', '$id_pelanggan')";
    $query2 = mysqli_query($db, $query);

    if ($query2) {
        mysqli_query($db, "UPDATE pelanggan SET stand_meter = '$stand_meter_setelah' WHERE id_pelanggan = $id_pelanggan");
        echo "<script>alert('Transaksi Berhasil Ditambah');location.href=('../../dashboard/transaksi/')</script>";
    } else {
        echo "<script>alert('Transaksi Gagal Ditambah');location.href=('../../dashboard/transaksi/')</script>";

    }
    }
else{
    echo "<script>alert('Ngapain :)');location.href=('../')</script>";
}

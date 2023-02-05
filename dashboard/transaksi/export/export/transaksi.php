<?php
session_start();
if(!isset($_SESSION['nama'])){
    echo "<script>alert('Silahkan masuk terlebih dahulu untuk mengakses dashboard');location.href=('../../../');</script>";
}

include '../../../../config/koneksi.php';
// Include autoloader 
require_once 'vendor/autoload.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
// use Dompdf\Options;
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT t.id_pelanggan, p.id_pelanggan, t.bulan_tahun, p.nama_pelanggan, t.stand_meter, t.stand_meter_setelah, t.tarif_daya, t.non_subsidi, t.id_transaksi, t.admin, t.total_bayar, t.total_terbilang  FROM transaksi_pembayaran as t INNER JOIN pelanggan as p ON t.id_pelanggan = p.id_pelanggan WHERE id_transaksi =$id");
    
    while($row = mysqli_fetch_array($query)){
    $id_pelanggan = $row['id_pelanggan'];
    $nama_pelanggan = $row['nama_pelanggan'];
    $tarif_daya = $row['tarif_daya'];
    $bulan_tahun = $row['bulan_tahun'];
    $stand_meter = $row['stand_meter'];
    $stand_meter_setelah = $row['stand_meter_setelah'];
    $admin = $row['admin'];
    $total_bayar = $row['total_bayar'];
    $total_terbilang = $row['total_terbilang'];
    $non_subsidi = $row['non_subsidi'];
    $id_transaksi = $row['id_transaksi'];
        $isi='
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tagihan Listrik</title>
    </head>
    
    <body>
    <fieldset>
        <table>
            <tr>
                <td>
                    <b>PT. BUKOPIN, TBK</b>
                </td>
            </tr>
            <tr>
                <td colspan=3>
                    <h2>STRUK PEMBAYARAN TAGIHAN LISTRIK</h2>
                </td>
            </tr>
            <tr>
                <td>
                    ID PELANGGAN
                </td>
                <td style="text-align:right;">
                    :
                </td>
                <td>
                    '.$id_pelanggan.'
                </td>
                <td>
                    BL/TH
                </td>
                <td style="text-align:right;">
                    :
                </td>
                <td>
                    '.$bulan_tahun.'
                </td>
            </tr>
            <tr>
                <td>
                    NAMA
                </td>
                <td style="text-align:right;">
                    :
                </td>
                <td>
                    '.$nama_pelanggan.'
                </td>
                <td>
                    STAND METER
                </td>
                <td style="text-align:right;">
                    :
                </td>
                <td>
                    '.$stand_meter.'-'.$stand_meter_setelah.'
                </td>
            </tr>
            <tr>
                <td>
                    TARIF DAYA
                </td>
                <td style="text-align:right;">
                    :
                </td>
                <td>
                    '.$tarif_daya.'
                </td>
                <td>
                    NON SUBSIDI
                </td>
                <td style="text-align:right;">
                    :
                </td>
                <td>
                    Rp.'.$non_subsidi.'
                </td>
            </tr>
            <tr>
                <td>
                    <b>MKM REF</b>
                </td>
                <td style="text-align:right;">
                    <b>:</b>
                </td>
                <td>
                    <b>'.$id_transaksi.'</b>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="padding:1em; font-size:1em;">
                    PLN menyatakan struk ini sebagai bukti pembayaran yang sah, mohon disimpan.
                </td>
            </tr>
            <tr>
                <td>
                    ADMIN BANK
                </td>
                <td style="text-align:right;">
                    :
                </td>
                <td>
                    Rp.'.$admin.'
                </td>
            </tr>
            <tr>
                <td>
                    <b>TOTAL BAYAR</b>
                </td>
                <td style="text-align:right;">
                    <b>
                        :
                    </b>
                </td>
                <td>
                    <b>'.$total_bayar.'</b>
                </td>
            </tr>
            <tr>
                <td>
                    <b>TERBILANG</b>
                </td>
                <td style="text-align:right;">
                    <b>:</b>
                </td>
                <td style="text-transform:uppercase;">
                    <b>
                        '.$total_terbilang.'
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan=6 style="text-align:center;">
                    TERIMA KASIH <br> "Rincian tagihan dapat dilihat di www.pln.co.id atau PLN terdekat"<br>INFORMASI HUB: 123
                </td>
            </tr>
        </table>
        </fieldset>
    </body>
    
    </html>';
    }
}
  // Load HTML content 
//   echo $isi;
$dompdf->loadHtml($isi); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream("Tagihan Listrik", array("Attachment" => 0));
  ?>
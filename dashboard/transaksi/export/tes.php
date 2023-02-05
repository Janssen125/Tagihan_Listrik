<?php
$query = mysqli_query($db, "SELECT t.id_pelanggan, p.id_pelanggan, t.bulan_tahun, p.nama_pelanggan, t.stand_meter, t.stand_meter_setelah, t.tarif_daya, t.non_subsidi, t.id_transaksi, t.admin, t.total_bayar, t.total_terbilang  FROM transaksi_pembayaran as t INNER JOIN pelanggan as p ON t.id_pelanggan = p.id_pelanggan WHERE id_transaksi =1");
while($row = mysqli_fetch_array($query)){
?>
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
            <td>
                <h2>STRUK PEMBAYARAN TAGIHAN LISTRIK</h2>
            </td>
        </tr>
        <tr>
            <td>
                ID PELANGGAN
            </td>
            <td>
                :
            </td>
            <td>
                <?= $row['id_pelanggan'] ?>
            </td>
            <td>
                BL/TH
            </td>
            <td>
                :
            </td>
            <td>
                <?= $row['bulan_tahun'] ?>
            </td>
        </tr>
        <tr>
            <td>
                NAMA
            </td>
            <td>
                :
            </td>
            <td>
                <?= $row['nama_pelanggan'] ?>
            </td>
            <td>
                STAND METER
            </td>
            <td>
                :
            </td>
            <td>
                <?= $row['stand_meter'].'-'.$row['stand_meter_setelah'] ?>
            </td>
        </tr>
        <tr>
            <td>
                TARIF DAYA
            </td>
            <td>
                :
            </td>
            <td>
                <?= $row['tarif_daya'] ?>
            </td>
            <td>
                NON SUBSIDI
            </td>
            <td>
                :
            </td>
            <td>
                Rp.<?= $row['non_subsidi'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <b>MKM REF</b>
            </td>
            <td>
                <b>:</b>
            </td>
            <td>
                <b><?= $row['id_transaksi'] ?></b>
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
            <td>
                :
            </td>
            <td>
                Rp.<?= $row['admin'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <b>TOTAL BAYAR</b>
            </td>
            <td>
                <b>
                    :
                </b>
            </td>
            <td>
                <b><?= $row['total_bayar'] ?></b>
            </td>
        </tr>
        <tr>
            <td>
                <b>TERBILANG</b>
            </td>
            <td>
                <b>:</b>
            </td>
            <td style="text-transform:uppercase;">
                <b>
                    <?= $row['total_terbilang'] ?>
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

</html>
<?php
}
?>
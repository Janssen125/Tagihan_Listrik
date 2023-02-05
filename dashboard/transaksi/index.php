<?php
include '../header.php';
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List Transaksi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">List Transaksi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                <br>
                  <span class="card-title">List Transaksi</span><a href="create.php" class="btn btn-outline-success" style="float:right;">Tambah Data</a>
                  <br><br>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Transaksi</th>
                        <th scope="col">Tarif Daya</th>
                        <th scope="col">Tagihan</th>
                        <th scope="col">Bulan Tahun</th>
                        <th scope="col">Stand Meter</th>
                        <th scope="col">Stand Meter Setelah</th>
                        <th scope="col">Harga/Kwh</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Total Terbilang</th>
                        <th scope="col">Non Subsidi</th>
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col">Print</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $query = mysqli_query($db, "SELECT * FROM transaksi_pembayaran");
                      while($row = mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $row['id_transaksi'] ?></td>
                        <td><?= $row['tarif_daya'] ?></td>
                        <td><?= $row['tagihan'] ?></td>
                        <td><?= $row['bulan_tahun'] ?></td>
                        <td><?= $row['stand_meter'] ?></td>
                        <td><?= $row['stand_meter_setelah'] ?></td>
                        <td><?= $row['hargakwh'] ?></td>
                        <td><?= $row['admin'] ?></td>
                        <td><?= $row['total_bayar'] ?></td>
                        <td><?= $row['total_terbilang'] ?></td>
                        <td><?= $row['non_subsidi'] ?></td>
                        <td><?= $row['id_pelanggan'] ?></td>
                        <td><a href="export/export/transaksi.php?id=<?= $row['id_transaksi'] ?>" class="btn btn-outline-primary">Print</a></td>
                        <td><a href="../../proses/transaksi/delete.php?id=<?= $row['id_transaksi'] ?>" class="btn btn-outline-danger">Delete</a></td>
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>

                </div>

          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->
<?php
include '../footer.php';
?>
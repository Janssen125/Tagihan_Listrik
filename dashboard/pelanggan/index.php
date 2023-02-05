<?php
include '../header.php';
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List Pelanggan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">List Pelanggan</li>
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
                  <span class="card-title">List Pelanggan</span><a href="create.php" class="btn btn-outline-success" style="float:right;">Tambah Data</a>
                  <br><br>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.HP</th>
                        <th scope="col">Tarif Daya</th>
                        <th scope="col">Stand Meter</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $query = mysqli_query($db, "SELECT * FROM pelanggan");
                      while($row = mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $row['id_pelanggan'] ?></td>
                        <td><?= $row['nama_pelanggan'] ?></td>
                        <td><?= $row['nik'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['nohp'] ?></td>
                        <td><?= $row['tarif_daya'] ?></td>
                        <td><?= $row['stand_meter'] ?></td>
                        <td><a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-outline-warning">Edit</a></td>
                        <td><a href="../../proses/pelanggan/delete.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
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
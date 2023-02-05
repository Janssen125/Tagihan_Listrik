<?php
include '../header.php';
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">List User</li>
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
                  <span class="card-title">List User</span><a href="create.php" class="btn btn-outline-success" style="float:right;">Tambah Data</a>
                  <br><br>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">Hak Akses</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $query = mysqli_query($db, "SELECT * FROM user");
                      while($row = mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['no_hp'] ?></td>
                        <td><?= $row['hak_akses'] ?></td>
                        <td><a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-outline-warning">Edit</a></td>
                        <td><a href="../../proses/user/delete.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
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
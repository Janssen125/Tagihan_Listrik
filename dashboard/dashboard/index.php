<!-- Tampilan Awal Dashboard -->
<?php
require '../header.php';
?>
  <main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-8">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Transaksi</h5>

                  <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                        <?php
                        $query = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM transaksi_pembayaran");
                        while($row = mysqli_fetch_array($query)){
                        ?>
                      <h6><?= $row['jmlh'] ?></h6>
                      <?php
                      }
                      ?>
                      <a href="../transaksi/"><span class="text-muted small pt-2 ps-1">Lihat Selengkapnya</span></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            
            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-8">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pelanggan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        <?php
                        $query = mysqli_query($db, "SELECT COUNT(*) as jmlh FROM pelanggan");
                        while($row = mysqli_fetch_array($query)){
                        ?>
                      <h6><?= $row['jmlh'] ?></h6>
                      <?php
                      }
                      ?>
                      <a href="../pelanggan/"><span class="text-muted small pt-2 ps-1">Lihat Selengkapnya</span></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
</div>
</section>
</main>
<?php
require '../footer.php';
?>
<!-- Tampilan Create Pelanggan -->
<?php
include '../header.php';
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Buat Pelanggan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Pelanggan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Buat Pelanggan</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="../../proses/pelanggan/create.php" method="POST">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Pelanggan</label>
                            <input type="text" name="nama" class="form-control" id="inputNanme4" required>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">NIK</label>
                            <input type="number" name="nik" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">No.HP</label>
                            <input type="number" name="no_hp" class="form-control" id="inputAddress" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Tarif/Daya</label>
                            <input type="text" name="tarif" class="form-control" id="inputAddress" placeholder="cth:R1/400" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Stand Meter</label>
                            <input type="number" name="stand_meter" class="form-control" id="inputAddress" placeholder="cth: 00001234" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- Vertical Form -->
                </div><!-- End Left side columns -->
            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php
include '../footer.php';
?>
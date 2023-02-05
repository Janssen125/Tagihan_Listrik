<!-- Tampian Tambah Perusahaan -->
<?php
include '../header.php';
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Buat Transaksi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Transaksi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Buat Transaksi</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="../../proses/transaksi/create.php" method="POST">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Id Pelanggan</label>
                            <select name="id_pelanggan" class="form-select" id="" required>
                                <option value="" hidden>Pilih</option>
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM pelanggan");
                                while($row = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?= $row['id_pelanggan'] ?>"><?= $row['id_pelanggan'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Tagihan</label>
                            <input type="number" name="tagihan" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Bulan/Tahun</label>
                            <input type="text" name="bulan_tahun" class="form-control" id="inputAddress" placeholder="cth: JAN23" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Harga/Kwh</label>
                            <input type="number" name="hargakwh" class="form-control" id="inputAddress" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Biaya Admin</label>
                            <input type="number" name="admin" class="form-control" id="inputAddress" required>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Non Subsidi</label>
                            <input type="number" name="non_subsidi" class="form-control" id="inputPassword4" required>
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
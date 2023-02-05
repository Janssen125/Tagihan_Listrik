<!-- Tampilan Create Perusahaan -->
<?php
include '../header.php';
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Buat User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Create User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Buat User</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="../../proses/user/create.php" method="POST">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputNanme4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="inputPassword4">
                        </div>
                        <?php
                        
                        ?>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Hak Akses</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
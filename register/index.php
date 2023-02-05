<?php
session_start();
if(isset($_SESSION['nama'])){
    ?>
<script>
window.addEventListener('load', 
  function() { 
    location.href=('dashboard/');
  }, false);
</script>
Please Enable Javascript
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/template/assets/img/favicon.png" rel="icon">
  <link href="../assets/template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/template/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/template/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/template/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../assets/template/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Tagihan Listrik</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register</h5>
                    <p class="text-center small">Buat akun mu sekarang, untuk mengetahui info tagihan listrik lebih lanjut</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="prosesregister.php" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nama Lengkap</label>
                      <div class="input-group has-validation">
                        <input type="text" name="namalengkap" class="form-control" id="Nama Lengkap" required>
                        <div class="invalid-feedback">Nama Lengkap Masih Kosong</div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Email Masih Kosong</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">No.HP</label>
                      <div class="input-group has-validation">
                        <input type="number" name="no_hp" class="form-control" id="no_hp" required>
                        <div class="invalid-feedback">No.HP Masih Kosong</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Password Masih Kosong</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="password2" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Harus Diisi</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" type="submit">Register</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah Punya Akun? <a href="../login/">Login Sekarang</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/template/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/template/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/template/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/template/assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/template/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/template/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/template/assets/js/main.js"></script>

</body>

</html>
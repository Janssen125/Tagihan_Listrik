<!-- Header -->
<?php
include '../../config/koneksi.php';
session_start();
if(!isset($_SESSION['nama'])){
  echo "<script>location.href=('../../404/')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tagihan Listrik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/template/assets/img/favicon.png" rel="icon">
  <link href="../../assets/template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/template/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/template/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/template/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../../" class="logo d-flex align-items-center">
        <img src="../../assets/template/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Tagihan Listrik</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../assets/template/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['nama'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $_SESSION['nama'] ?></h6>
              <span><?= $_SESSION['hak_akses'] ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../proses/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#list-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-card-list"></i><span>List</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="list-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../transaksi">
              <i class="bi bi-circle"></i><span>Transaksi</span>
            </a>
          </li>
          <?php
          if($_SESSION['hak_akses'] == "Admin"){
          ?>
          <li>
            <a href="../user">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
          <?php
          }
          ?>
          <li>
            <a href="../pelanggan">
              <i class="bi bi-circle"></i><span>Pelanggan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->

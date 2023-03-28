



    <!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
session_start();
include '../config/koneksi.php';
$idd = $_GET ['id'];
$p = mysqli_query ($conn, "SELECT * FROM tanggapan WHERE isi_laporan = '$idd'");
$data = mysqli_fetch_array ($p);

if(!$data){
  header ("location: list_laporan.php");
}

if(!isset ($_SESSION['nama'])){
	header ("location: index.php");
	}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="index.php">
              Material Dashboard 2
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">
                      <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                      Beranda
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="list_laporan.php">
                      <i class="fa fa-user opacity-6 text-dark me-1"></i>
                      Laporan Saya
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="laporan.php">
                      <i class="fas fa-key opacity-6 text-dark me-1"></i>
                      Buat Laporan
                    </a>
                  </li>
                </ul>
              <ul class="navbar-nav d-lg-flex d-none">
                <li class="nav-item d-flex align-items-center">
                  <a class="btn btn-outline-primary btn-sm mb-0 me-2" target="_blank" href="logout.php" onclick="return confirm('Yakin Ingin Logout?')">Logout</a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-flex d-none">
                <li class="nav-item d-flex align-items-center">
                  <a class="btn btn-outline-warning btn-sm mb-0 me-2" target="_blank" href="panduan.php">Panduan</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-6">
  <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Tanggapan</h4>
                  <p class="mb-4">Tanggapan dari Laporan anda</p>
                </div>
                <div class="card-body">
                  <form role="form" id="formlapor" method="post" class="needs-validation" enctype="multipart/form-data">

                  <input type="hidden" name="id" value="<?php echo $data['id_petugas']?>">

                <label class="form-label">Tanggal Ditanggapi</label>
                    <div class="input-group input-group-outline mb-2">
                        <input readonly type="text" name="nama" class="form-control" value="<?php echo $data['tgl_tanggapan']?>">
                    </div>  

                <label class="form-label">Isi Tanggapan</label>
                    <div class="input-group input-group-outline mb-2">
                        <textarea readonly type="text" name="user" class="form-control" rows=3><?php echo $data['tanggapan']?></textarea>
                    </div>

                <label class="form-label">Dari Laporan</label>
                    <div class="input-group input-group-outline mb-2">
                        <textarea readonly type="text" name="user" class="form-control" rows=3><?php echo  $_GET ['id']?></textarea>
                    </div>

                  </form>

                </div>

              </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>
<?php } ?>
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
  $p = mysqli_query ($conn, "SELECT * FROM petugas WHERE id_petugas = '$idd'");
  $data = mysqli_fetch_array ($p);
  if(!isset ($_SESSION['nama_petugas'])){
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

  <body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="laporan_verif.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Laporan Verifikasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="laporan.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Laporan Proses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="laporan_selesai.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>
              <span class="nav-link-text ms-1">Laporan Selesai</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data_user.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
              </div>
              <span class="nav-link-text ms-1">Data Masyarakat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="data_operator.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Kelola Petugas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="generate.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
              </div>
              <span class="nav-link-text ms-1">Generate Laporan</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
          
          <li class="">
            <a class="nav-link active bg-gradient-secondary text-white">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">account_circle</i>
              </div>
              <span class="nav-link-text ms-1"><?php echo $_SESSION['nama_petugas'];?></span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php" onclick="return confirm('Yakin Ingin Logout?')">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Log Out</span>
            </a>
          </li>

          </li>
        </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
          <!-- Navbar -->

          <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav  justify-content-end">
                  <li class="nav-item d-flex align-items-center">
                    <div class="nav-link text-body font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                      <span class="d-sm-inline d-none"><?php echo $_SESSION['nama_petugas'];?></span>
                    </div>
                  </li>
                  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                      <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                      </div>
                    </a>
                  </li>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <main class="main-content  mt-0">
      <section>
        <div class="page-header min-vh-75">
          <div class="container">
            <div class="row">
                  <div class="card-header">
                    <h4 class="font-weight-bolder">Kelola Petugas</h4>
                    <p class="mb-4">Isi formulir dibawah ini untuk edit informasi Petugas</p>
                  </div>
                  <div class="card-body">
                    <form role="form" id="formlapor" method="post" class="needs-validation" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $data['id_petugas']?>">

                  <label class="form-label">Name</label>
                      <div class="input-group input-group-outline mb-2">
                          <input required type="text" name="nama" class="form-control" value="<?php echo $data['nama_petugas']?>">
                      </div>  

                  <label class="form-label">Username</label>
                      <div class="input-group input-group-outline mb-2">
                          <input required type="text" name="user" class="form-control" placeholder="Username" value="<?php echo $data['username']?>">
                      </div>

                  <label class="form-label">Password</label>
                      <div class="input-group input-group-outline mb-2">
                          <input required type="text" name="pass" class="form-control" placeholder="Password" value="<?php echo $data['password']?>">
                      </div>

                  <label class="form-label">Nomor Telepon</label>
                      <div class="input-group input-group-outline mb-2">
                          <input required type="text" name="tlp" class="form-control" placeholder="Nomor Telepon" value="<?php echo $data['tlp']?>">
                      </div>
                      
                  <label class="form-label">Level</label>
                      <div class="input-group input-group-outline mb-2">
                          <select class="form-control" name="level">
                              <option selected value="<?php echo $data['level']?>">Level</option>
                              <option value="admin">Admin</option>
                              <option value="petugas">Petugas</option>
                          </select>
                      </div>

                      <div class="text-center">
                        <input required type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="simpan" value="EDIT">
                      </div>  

  <?php
      if (isset($_POST['simpan'])){
          $id = $_POST ['id'];
          $nama = $_POST ['nama'];
          $user = $_POST ['user'];
          $pass = $_POST ['pass'];
          $tlp = $_POST ['tlp'];
          $level = $_POST ['level'];
          $edit = mysqli_query ($conn, "UPDATE petugas SET id_petugas='$id',nama_petugas='$nama',username='$user',password='$pass',tlp='$tlp',level='$level' WHERE id_petugas ='$idd'");
          if($edit){
              echo "<div class='alert alert-success'><center>Edit User Berhasil</center></div>";
              echo "<meta http-equiv='refresh' content='1;url=data_operator.php'>";
              } else {
              echo "<div class='alert alert-danger'><center>Edit User Gagal</center></div>";
              echo "<meta http-equiv='refresh' content='1;url=edit_user_admin.php'>";
              }
              }
  ?>

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
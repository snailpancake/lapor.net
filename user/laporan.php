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
if(!isset ($_SESSION['nama'])){
	header ("location: sign-in.php");
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
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Pelaporan</h4>
                  <p class="mb-0">Isi formulir dibawah ini untuk melapor</p>
                </div>
                <div class="card-body">
                  <form role="form" id="formlapor" method="post" class="needs-validation" enctype="multipart/form-data">

                    <div class="input-group input-group-outline mb-3">
                        <select required class="form-control" name="kategori">
                            <option selected value="Lainnya">Kategori Laporan</option>
                            <option value="Lingkungan">Lingkungan</option>
                            <option value="Kriminalitas">Kriminalitas</option>
                            <option value="Narkotika">Narkotika</option>
                            <option value="Politik dan Hukum">Politik dan Hukum</option>
                            <option value="Sosial">Sosial</option>
                        </select>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <textarea required form="formlapor" name="laporan" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Isi Laporan"></textarea>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <input required type="file" class="form-control me-6" name="image" id="image">
                      <span class="mt-2 ">Foto</span>
                    </div>

                    <div class="text-center">
                      <input required type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="simpan" value="laporkan">
                    </div>  

                    <input type="hidden" name="id" class="form_input2">
                    <input type="text" name="tgl" class="form_input2" required value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d (H:i:s)') ?>" hidden>
                    <input type="text" name="nama" class="form_input2" required value="<?php echo $_SESSION['nama']?>" hidden>
                    <input type="text" name="nik" class="form_input2" required value="<?php echo $_SESSION['nik']?>" hidden>
                    <input type="hidden" name="st" value="0" hidden>

<?php
    if (isset($_POST['simpan'])){
      $picName = $_FILES['image']['name'];
      $picTemp = $_FILES['image']['tmp_name'];
      $picDir = "image/".$picName;
      move_uploaded_file($picTemp,$picDir);

	$id = $_POST ['id'];
	$tgl = $_POST ['tgl'];
	$nama = $_POST ['nama'];
	$nik = $_POST ['nik'];
  $kategori = $_POST ['kategori'];
	$laporan = $_POST ['laporan'];
	$st = $_POST ['st'];

	$tambah = mysqli_query ($conn, "INSERT INTO pengaduan(id_pengaduan,tgl_pengaduan,nama_pengadu,nik,kategori,isi_laporan,foto,status)VALUES('$id','$tgl','$nama','$nik','$kategori','$laporan','$picName','$st')");

	if($tambah){
		echo "<div class='alert alert-success'><center>Pengaduan Berhasil</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=list_laporan.php'>";
		} else {
		echo "<div class='alert alert-danger'><center>Pengaduan Gagal</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=laporan.php'>";
		}
		}

?>

                  </form>
                </div>

              </div>
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

  <script>
    var uploadField = document.getElementById("image");

    uploadField.onchange = function() {
        if(this.files[0].size > 2097152){
          alert("File melebihi 2MB!");
          this.value = "";
        };
    };

  </script>
</body>

</html>
<?php } ?>
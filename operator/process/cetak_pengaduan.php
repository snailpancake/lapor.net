<?php
session_start();
include '../../config/koneksi.php';
if(!isset ($_SESSION['nama_petugas'])){
	header ("location: index.php");
	}
if($_SESSION['level'] == 'petugas'){
	header ("location: index.php");
	}else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<style type="text/css">
.head {
	width:100%;
	height:100px;
	border-bottom:1px solid;
	}
</style>
<div class="head">
<table>
<tr>
<td width="10%"><img src="generate/medal_activity_15side_01.jpg" width="80px" /></td>
<td align="center" width="90%"><font style="font-size:22px; font-family:Arial, Helvetica, sans-serif;">LAPORAN PENGADUAN MASYARAKAT<br />LAPOR.NET<br/>KECAMATAN PANYILEUKAN</font><br /><i><font style="font-size:15px;">Jl. Cipadung Kulon- Panyileukan Kota-Bandung-Jawa-Barat 42286</font></i></td>
</tr>
</table>
</div><br /><br />
<div style="font-size:24px; text-align:center;">Laporan Pengaduan Masyarakat</div><br /><br />
<table align="center" border="1" cellpadding="8" cellspacing="0">
<tr>
			<th>No</th>
			<th>Tgl Pengaduan</th>
			<th>Nama</th>
			<th>Kategori</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
		</tr>
<?php
$no = 1;
$status = $_POST['status'];
$query = mysqli_query ($conn, "SELECT * FROM pengaduan WHERE status = '$status'");
if (mysqli_num_rows ($query)){
while ($data = mysqli_fetch_array ($query)) {
?>
<tr align="left">
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $data['tgl_pengaduan'] ?></td>
<td><?php echo $data['nama_pengadu'] ?></td>
<td><?php echo $data['kategori'] ?></td>
<td><?php echo $data['isi_laporan'] ?></td>
<td><a href="#/<?php echo $data['foto'];?>"><img src="../../user/image/<?php echo $data['foto'];?>" height="55px"></a></td>
</tr>
<?php }}else{
	echo '<tr><td colspan="6" align="center">TIDAK ADA DATA</td></tr>';
}?>
</table>
<br/>
<table class="titik">
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bandung,.........................<script>document.write(new Date().getFullYear());</script></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN LAPOR.NET</td>
</tr>
</table>
<br/><br/><br/><br/>
<table class="titik">
<tr>
<td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>. . . . . . . . . . . . . . . . . . . . . .</u></b></td>
</tr>
</table>
<script>
window.print() 
</script>
</body>
</html>
<?php } ?>
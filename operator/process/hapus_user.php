<?php
include '../../config/koneksi.php';
$id = $_GET ['idd'];
mysqli_query ($conn, "DELETE FROM pengaduan WHERE nik ='$id'");
mysqli_query ($conn, "DELETE FROM masyarakat WHERE nik ='$id'");
header ("location: ../data_user.php");
?>
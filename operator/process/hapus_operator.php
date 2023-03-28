<?php
include '../../config/koneksi.php';
$id = $_GET ['idd'];
mysqli_query ($conn, "DELETE FROM petugas WHERE id_petugas ='$id'");
header ("location: ../data_operator.php");
?>
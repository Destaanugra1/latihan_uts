<?php
include '../../koneksi.php';

$kd = $_GET['id_transaksi_020'];
mysqli_query($mysqli, "DELETE FROM tabel_transaksi_2359201020 WHERE id_transaksi_020 = '$kd'");

header("location: ../../database/transaksi.php");
exit;
?>
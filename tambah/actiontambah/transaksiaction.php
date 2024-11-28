<?php
include_once('../../koneksi.php');

$id_transaksi_020 = $_POST['id_transaksi_020'];
$id_pasien_020 = $_POST['id_pasien_020'];
$id_obat_020 = $_POST['id_obat_020'];
$jumlah_transaksi_020 = $_POST['jumlah_transaksi_020'];

$query = "INSERT INTO tabel_transaksi_2359201020 (id_transaksi_020, jumlah_transaksi_020, id_pasien_020, id_obat_020) VALUES ('$id_transaksi_020', '$jumlah_transaksi_020', '$id_pasien_020', '$id_obat_020')";
mysqli_query($mysqli, $query);
header("Location: ../../database/transaksi.php");
?>
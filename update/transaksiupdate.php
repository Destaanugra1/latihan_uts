<?php
include '../koneksi.php';
$dbkasir = $_POST['id_transaksi_020'];
$nama = $_POST['id_pasien_020'];
$alamat = $_POST['id_obat_020'];
$jumlah = $_POST['jumlah_transaksi_020'];
mysqli_query($mysqli, "UPDATE tabel_transaksi_2359201020 SET id_pasien_020='$nama', id_obat_020='$alamat', jumlah_transaksi_020='$jumlah' WHERE id_transaksi_020='$dbkasir'");

header("location:../database/transaksi.php?pesan=update");
?>
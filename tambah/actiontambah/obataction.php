<?php
include_once('../../koneksi.php');

$id_obat_020 = $_POST['id_obat_020'];
$nama_obat_020 = $_POST['nama_obat_020'];
$pembuat_obat_020 = $_POST['pembuat_obat_020'];
$stok_obat_020 = $_POST['stok_obat_020'];
$tanggal_kadaluarsa_020 = $_POST['tanggal_kadaluarsa_020'];

mysqli_query($mysqli, "INSERT INTO tabel_obat_2359201020 (id_obat_020, stok_obat_020, nama_obat_020, pembuat_obat_020, tanggal_kadaluarsa_020) VALUES ('$id_obat_020', '$stok_obat_020', '$nama_obat_020', '$pembuat_obat_020', '$tanggal_kadaluarsa_020')");
header("location: ../../database/obat.php");
?>
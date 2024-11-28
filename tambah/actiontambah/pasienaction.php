<?php
include_once('../../koneksi.php');

$id_pasien_020 = $_POST['id_pasien_020'];
$nama_pasien_020 = $_POST['nama_pasien_020'];
$tanggal_lahir_pasien_020 = $_POST['tanggal_lahir_pasien_020'];

mysqli_query($mysqli, "INSERT INTO tabel_pasien_2359201020 (id_pasien_020, nama_pasien_020, tanggal_lahir_pasien_020) VALUES ('$id_pasien_020', '$nama_pasien_020', '$tanggal_lahir_pasien_020')");
header("location: ../../database/pasien.php");
?>
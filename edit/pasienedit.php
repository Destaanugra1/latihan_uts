<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Kontraktor</title>
</head>
<body>
    <h3>UBAH data Penjual</h3>
    <?php
    include_once('../koneksi.php');
    $id_pasien_020 = $_GET['id_pasien_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tabel_pasien_2359201020 WHERE id_pasien_020='$id_pasien_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/pasienupdate.php" method="post">
        <table>
            <tr>
                <td>Nama Pasien</td>
                <td>
                    <input type="hidden" name="id_pasien_020" value="<?php echo $user_data['id_pasien_020'] ?>">
                    <input type="text" name="nama_pasien_020" value="<?php echo $user_data['nama_pasien_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir Pasien</td>
                <td><input type="text" name="tanggal_lahir_pasien_020" value="<?php echo $user_data['tanggal_lahir_pasien_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Kontraktor</title>
</head>
<body>
    <h3>UBAH data Penjual</h3>
    <?php
    include_once('../koneksi.php');
    $id_transaksi_020 = $_GET['id_transaksi_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tabel_transaksi_2359201020 WHERE id_transaksi_020='$id_transaksi_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/transaksiupdate.php" method="post">
        <table>
            <tr>
                <td>id Pasien</td>
                <td>
                    <input type="hidden" name="id_transaksi_020" value="<?php echo $user_data['id_transaksi_020'] ?>">
                    <input type="text" name="id_pasien_020" value="<?php echo $user_data['id_pasien_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>id Obat</td>
                <td><input type="text" name="id_obat_020" value="<?php echo $user_data['id_obat_020'] ?>"></td>
            </tr>
            <tr>
                <td>Jumlah Transaksi</td>
                <td><input type="text" name="jumlah_transaksi_020" value="<?php echo $user_data['jumlah_transaksi_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
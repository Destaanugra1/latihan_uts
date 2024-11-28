<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actiontambah/transaksiaction.php">
        <table>
            <tr>
                <td>id Transaksi</td>
                <td><input type="text" maxlength="5" name="id_transaksi_020"></td>
            </tr>
            <tr>
                <td>Id pasien</td>
                <td><input type="text" name="id_pasien_020"></td>
            </tr>
            <tr>
                <td>id obat</td>
                <td><input type="text" name="id_obat_020"></td>
            <tr>
                <td>Jumlah Transaksi</td>
                <td><input type="text" name="jumlah_transaksi_020"></td>
            </tr>
            <tr>
                <td>Update</td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="dataelektronik.php">Kembali</a>
</body>
</html>
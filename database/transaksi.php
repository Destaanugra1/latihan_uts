<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tabel_transaksi_2359201020 ORDER BY id_transaksi_020   DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS</title>
</head>
<body>
  
  <a href="../tambah/transaksitambah.php">Tambah Data Pekerja</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>id Transaksi</th>
      <th>id pasien</th>
      <th>id obat</th>
      <th>Jumlah Transaksi</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_transaksi_020']."</td>";
        echo "<td>".$user_data['id_pasien_020']."</td>";
        echo "<td>".$user_data['id_obat_020']."</td>";
        echo "<td>".$user_data['jumlah_transaksi_020']."</td>";
        echo "<td>
    <a href='../edit/transaksiedit.php?id_transaksi_020=" . $user_data['id_transaksi_020'] . "'>Edit</a> | <a href='../tambah/actiondelete/transaksidelete.php?id_transaksi_020=" . $user_data['id_transaksi_020'] . "'>Delete</a></td></tr>";
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>
<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tabel_obat_2359201020 ORDER BY id_obat_020   DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS</title>
</head>
<body>
  
  <a href="../tambah/obattambah.php">Tambah Data Pekerja</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>id obat</th>
      <th>Nama Obat</th>
      <th>Pembuat obat</th>
      <th>Stok obat</th>
      <th>Tanggal expiret</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_obat_020']."</td>";
        echo "<td>".$user_data['nama_obat_020']."</td>";
        echo "<td>".$user_data['pembuat_obat_020']."</td>";
        echo "<td>".$user_data['stok_obat_020']."</td>";  
        echo "<td>".$user_data['tanggal_kadaluarsa_020']."</td>";  
        echo "<td>
    <a href='../edit/obatedit.php?id_obat_020=" . $user_data['id_obat_020'] . "'>Edit</a> | <a href='../tambah/actiondelete/obatdelete.php?id_obat_020=" . $user_data['id_obat_020'] . "'>Delete</a></td></tr>";
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>
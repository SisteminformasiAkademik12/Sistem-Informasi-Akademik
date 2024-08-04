<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>
<a href="Ajax/index.php">
Data Jadwal Kelas
</a><br>
<a href="Jquery/index.php">
Data Penilaian
</a><br>
<h2>Data Guru</h2>
<h3>penggunaan PHP Native</h3>
<br>
<a href="tambah.php">
Tambah data
</a><br>
<br>
<br>
<table border="1">
<thead>
<tr>
<th>ID Guru</th>
<th>Nama Guru</th>
<th>Jenis Kelamin</th>
<th>Pelajaran </th>
<th>No Telpon</th>
<th>fungsi</th>
</tr>
</thead>
<tbody>
<?php
include_once 'koneksi.php';
$q = "SELECT * FROM guru";
$result = mysqli_query($koneksi, $q);
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $row['Id_guru'] ?></td>
<td><?= $row['Nama_guru'] ?></td>
<td><?= $row['Jenis_Kelamin'] ?></td>
<td><?= $row['Pelajaran'] ?></td>
<td><?= $row['notelp'] ?></td>
<td>
<a href="edit.php?id=<?= $row['Id_guru'] ?>">edit ||</a>
<a href="hapus.php?id=<?= $row['Id_guru'] ?>">hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>

</body>
</html>

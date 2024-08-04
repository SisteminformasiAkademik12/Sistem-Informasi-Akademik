<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
</head>
<body>
<h3>Tambah Data Guru</h3>
<br>
<form action="tambah.php" method="POST">
<label>Id Guru</label>
<input type="text" name="Id_guru">
<br>
<label>Nama Guru</label>
<input type="text" name="nama">
<br>
<label>Jenis Kelamin</label>
<input type="text" name="kelamin">
<br>
<label>Pelajaran</label>
<input type="text" name="pelajaran">
<br>
<label>No Telepon</label>
<input type="text" name="notelp">
<br>
<button name="tambah" value="tambah">Simpan</button>
</form>

<?php
if (isset($_POST['tambah'])) {
include 'koneksi.php';
$Id_guru = $_POST['Id_guru'];
$nama = $_POST['nama'];
$jnskelamin = $_POST['kelamin'];
$pelajaran = $_POST['pelajaran'];
$notelp = $_POST['notelp'];

$q = "INSERT INTO guru (Id_guru, Nama_guru, Jenis_Kelamin, Pelajaran, notelp) VALUES ('$Id_guru', '$nama', '$jnskelamin', '$pelajaran', '$notelp')";
$result = mysqli_query($koneksi, $q);
if ($result) {
header('location: index.php');
}
}
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>
<h3>Edit Data Guru</h3>
<br>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$qPilih = "SELECT * FROM guru WHERE Id_guru = '$id'";
$result = mysqli_query($koneksi, $qPilih);
$row = mysqli_fetch_assoc($result);
?>
<form action="edit.php?id=<?php echo $row['Id_guru'] ?>" method="POST">

<label>ID Guru</label>
<input type="text" name="id" value="<?php echo $row['Id_guru'] ?>">
<br>
<label>Nama Guru</label>
<input type="text" name="nama" value="<?php echo $row['Nama_guru'] ?>">
<br>
<label>Jenis Kelamin</label>
<input type="text" name="jnskelamin" value="<?php echo $row['Jenis_Kelamin'] ?>">
<br>
<label>Pelajaran</label>
<input type="text" name="pel" value="<?php echo $row['Pelajaran'] ?>">
<br>
<label>No Telepon</label>
<input type="text" name="notel" value="<?php echo $row['notelp'] ?>">
<br>

<button name="update" value="update">Ubah</button>
</form>



<?php

if (isset($_POST['update'])) {
include 'koneksi.php';
$nama = $_POST['nama'];
$jnskelamin = $_POST['jnskelamin'];
$pelajaran = $_POST['pel'];
$notelp = $_POST['notel'];

$q = "UPDATE guru SET Nama_guru = '$nama', Jenis_Kelamin = '$jnskelamin', Pelajaran = '$pelajaran', notelp = '$notelp' WHERE Id_guru = '$id'";
$result = mysqli_query($koneksi, $q);
if ($result) {
header('location: index.php');
}
}
?>

</body>
</html>

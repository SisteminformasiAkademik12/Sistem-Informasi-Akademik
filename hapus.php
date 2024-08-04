<?php
include 'koneksi.php';
$id = $_GET['id'];
$qPilih = "DELETE FROM guru WHERE Id_guru = '$id'";
$result = mysqli_query($koneksi, $qPilih);
if ($result) {
header('location: index.php');
}

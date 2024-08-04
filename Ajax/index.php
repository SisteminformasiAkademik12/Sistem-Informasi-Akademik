<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data Jadwal Kelas</title>
  </head>
  <body>
    <a href="../index.php">
    Data Guru
    </a><br>
    <a href="../Jquery/index.php">
    Data Penilaian
    </a><br>
    <h2>Data Jadwal Kelas</h2>
    <h3>Menggunakan Ajax</h3>
    <table border = 1>
      <tr>
        <td>Id_Kelas</td>
        <td>Nama Kelas</td>
        <td>Jam Mulai</td>
        <td>Jam Selesai</td>
        <td>Nama Guru</td>
        <td>Pelajaran</td>
      </tr>
      <?php
      require '../koneksi.php';
      $rows = mysqli_query($koneksi, "SELECT * FROM jadwalkelas");
      // $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
        <tr>
        <td><?php echo $row["Id_Kelas"]; ?></td>
        <td><?php echo $row["NamaKelas"]; ?></td>
        <td><?php echo $row["JamMulai"]; ?></td>
        <td><?php echo $row["JamSelesai"]; ?></td>
        <td><?php echo $row["NamaGuru"]; ?></td>
        <td><?php echo $row["Pelajaran"]; ?></td>
        <td>
          <a href="edituser.php?Id_Kelas=<?php echo $row['Id_Kelas']; ?>">Edit</a>
          <button type="button" onclick="submitData('<?php echo $row['Id_Kelas']; ?>');">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="adduser.php">Tambah Data</a>
    <?php require 'script.php'; ?>
  </body>
</html>

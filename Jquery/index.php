<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data Penilaian</title>
  </head>
  <body>
    <a href="../index.php">
    Data Guru
    </a><br>
    <a href="../Ajax/index.php">
    Data Jadwal Kelas
    </a><br>
    <h2>Data Penilaian</h2>
    <h3>Menggunakan Ajax dan Jquery</h3>
    <table border = 1>
      <tr>
        <td>Id Nilai</td>
        <td>Nama Siswa</td>
        <td>Nilai Bahasa Inggris</td>
        <td>Nilai Matematika</td>
        <td>Nilai IPA</td>
        <td>Nilai Bahasa Indonesia</td>
      </tr>
      <?php
      require '../koneksi.php';
      $rows = mysqli_query($koneksi, "SELECT * FROM penilaian");
      // $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
        <tr>
        <td><?php echo $row["Id_Nilai"]; ?></td>
        <td><?php echo $row["NamaSIswa"]; ?></td>
        <td><?php echo $row["Nilaia"]; ?></td>
        <td><?php echo $row["Nilaib"]; ?></td>
        <td><?php echo $row["Nilaic"]; ?></td>
        <td><?php echo $row["Nilaid"]; ?></td>
        <td>
          <a href="edituser.php?Id_Nilai=<?php echo $row['Id_Nilai']; ?>">Edit</a>
          <button type="button" onclick="submitData('<?php echo $row['Id_Nilai']; ?>');">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="adduser.php">Tambah Data</a>
    <?php require 'script.php'; ?>
  </body>
</html>

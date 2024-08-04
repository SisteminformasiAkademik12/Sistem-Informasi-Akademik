<?php
require '../koneksi.php';

if(isset($_POST["action"])){
  if($_POST["action"] == "insert"){
    insert();
  }
  else if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}

function insert(){
  global $koneksi;

  $Id_Kelas = $_POST["Id_Kelas"];
  $NamaKelas = $_POST["NamaKelas"];
  $JamMulai = $_POST["JamMulai"];
  $JamSelesai = $_POST["JamSelesai"];
  $NamaGuru = $_POST["NamaGuru"];
  $Pelajaran = $_POST["Pelajaran"];

  $query = "INSERT INTO jadwalkelas VALUES('$Id_Kelas', '$NamaKelas', '$JamMulai', '$JamSelesai', '$NamaGuru', '$Pelajaran')";
  mysqli_query($koneksi, $query);

  echo "Inserted Successfully";
}

function edit(){
  global $koneksi;

  $Id_Kelas = $_POST["Id_Kelas"];
  $NamaKelas = $_POST["NamaKelas"];
  $JamMulai = $_POST["JamMulai"];
  $JamSelesai = $_POST["JamSelesai"];
  $NamaGuru = $_POST["NamaGuru"];
  $Pelajaran = $_POST["Pelajaran"];

  $query = "UPDATE jadwalkelas SET NamaKelas = '$NamaKelas', JamMulai = '$JamMulai', JamSelesai = '$JamSelesai', NamaGuru = '$NamaGuru', Pelajaran = '$Pelajaran' WHERE Id_Kelas = '$Id_Kelas'";
  $result= mysqli_query($koneksi, $query);
  if ($result) {
    echo "Updated Successfully";
} else {
    echo "Update Failed: " . mysqli_error($koneksi);
}

}

function delete(){
  global $koneksi;

  $id = $_POST["action"];

  $query = "DELETE FROM jadwalkelas WHERE Id_Kelas = '$id'";
  $result= mysqli_query($koneksi, $query);
  if ($result) {
    echo "Delete Successfully";
} else {
    echo "Update Failed: " . mysqli_error($koneksi);
}
}

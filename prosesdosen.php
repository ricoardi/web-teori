<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
  // if ($_POST['aksi'] == "add") {
  //   echo "Tambah Data <a href='index.php'>[Home]</a>";
  if ($_POST['aksi'] == "add") {
    $nama_dosen = $_POST['nama_dosen'];
    $homebase = $_POST['homebase'];
    $bidang_ilmu = $_POST['bidang_ilmu'];
    $foto_dosen = "1.jpg";
    $alamat = $_POST['alamat'];
    $query = "INSERT INTO tb_dosen VALUE(null, '$nama_dosen','$homebase', '$bidang_ilmu', '$foto_dosen','$alamat')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
      header("location: dosen.php");
    // echo "Data berhasil ditambahkan <a href='dosen.php>[Home]</a>";
    } else {
      echo $query;
    }
    
  } else if ($_POST['aksi'] == "edit") {
    echo "Edit Data <a href='dosen.php'>[Home]</a>";
  }
}

// if (isset($_GET['hapus'])) {
//   echo "Hapus Data <a href='index.php'>[Home]</a>";
// }

if (isset($_GET['hapus'])) {
  $id_dosen = $_GET['hapus'];
  $query = "DELETE FROM tb_dosen WHERE id_dosen = '$id_dosen';";
  $sql = mysqli_query($conn, $query);
  if ($sql) {
  header("location: dosen.php");
  // echo "Data berhasil dihapus <a href='dosen.php>[Home]</a>";
  } else {
  echo $query;
  }
  // echo "Hapus Data <a href='dosen.php'>[Home]</a>";
}
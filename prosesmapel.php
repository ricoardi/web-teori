<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
  // if ($_POST['aksi'] == "add") {
  //   echo "Tambah Data <a href='index.php'>[Home]</a>";
  if ($_POST['aksi'] == "add") {
    $nama_mapel = $_POST['nama_mapel'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah_jam = $_POST['jumlah_jam'];
    $kelas = $_POST['kelas'];
    $cover_buku = "cover.jpg";
    $keterangan = $_POST['keterangan'];
    $query = "INSERT INTO tb_mapel VALUE(null, '$nama_mapel','$deskripsi', '$jumlah_jam', '$kelas','$cover_buku','$keterangan')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
      header("location: mapel.php");
    // echo "Data berhasil ditambahkan <a href='mapel.php>[Home]</a>";
    } else {
      echo $query;
    }
    
  } else if ($_POST['aksi'] == "edit") {
    echo "Edit Data <a href='mapel.php'>[Home]</a>";
  }
}

// if (isset($_GET['hapus'])) {
//   echo "Hapus Data <a href='mapel.php'>[Home]</a>";
// }

if (isset($_GET['hapus'])) {
  $id_mapel = $_GET['hapus'];
  $query = "DELETE FROM tb_mapel WHERE id_mapel = '$id_mapel';";
  $sql = mysqli_query($conn, $query);
  if ($sql) {
  header("location: mapel.php");
  // echo "Data berhasil dihapus <a href='mapel.php>[Home]</a>";
  } else {
  echo $query;
  }
  // echo "Hapus Data <a href='mapel.php'>[Home]</a>";
}
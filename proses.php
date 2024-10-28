<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
  // if ($_POST['aksi'] == "add") {
  //   echo "Tambah Data <a href='index.php'>[Home]</a>";
  if ($_POST['aksi'] == "add") {
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    // $foto = "img4.jpg";
    $foto = $_FILES['foto']['name'];

        // upload gambar
        $dir = "img/";
        $tmpFile = $_FILES['foto']['tmp_name'];
    
        move_uploaded_file($tmpFile, $dir . $foto);
        // end upload gambar

    $alamat = $_POST['alamat'];
    $query = "INSERT INTO tb_siswa VALUE(null, '$nisn','$nama_siswa', '$jenis_kelamin', '$foto','$alamat')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
      header("location: index.php");
    // echo "Data berhasil ditambahkan <a href='index.php>[Home]</a>";
    } else {
      echo $query;
    }
    
  } else if ($_POST['aksi'] == "edit") {
    echo "Edit Data <a href='index.php'>[Home]</a>";
  }
}

// if (isset($_GET['hapus'])) {
//   echo "Hapus Data <a href='index.php'>[Home]</a>";
// }

// if (isset($_GET['hapus'])) {
//   $id_siswa = $_GET['hapus'];
//   $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
//   $sql = mysqli_query($conn, $query);
//   if ($sql) {
//   header("location: index.php");
//   // echo "Data berhasil dihapus <a href='index.php>[Home]</a>";
//   } else {
//   echo $query;
//   }
//   // echo "Hapus Data <a href='index.php'>[Home]</a>";
// }

// hapus data
if (isset($_GET['hapus'])) {
  $id_siswa = $_GET['hapus'];

  // hapus gambar
  $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';";
  $sqlShow = mysqli_query($conn, $queryShow);
  $result = mysqli_fetch_assoc($sqlShow);

  // var_dump($result);

  unlink("img/" . $result['foto_siswa']);
  // end hapus gambar

  $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
  $sql = mysqli_query($conn, $query);

  if ($sql) {
    header("location: index.php");
    // echo "Data berhasil dihapus <a href='index.php>[Home]</a>";
  } else {
    echo $query;
  }
  // echo "Hapus Data <a href='index.php'>[Home]</a>";
}


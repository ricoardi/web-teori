<!DOCTYPE html>
<?php
  include 'koneksi.php';

  $id_siswa = '';
  $nisn = '';
  $nama_siswa = '';
  $jenis_kelamin = '';
  $alamat = '';

  if (isset($_GET['ubah'])) {
    $id_siswa = $_GET['ubah'];
    // echo $id_siswa;
    $query = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nisn = $result['nisn'];
    $nama_siswa = $result['nama_siswa'];
    $jenis_kelamin = $result['jenis_kelamin'];
    $alamat = $result['alamat'];

    // var_dump($result);
    // die();
  }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.js"></script>
    <title>CRUD PHP | Data Siswa</title>
    <style>
      body { 
        padding-top: 65px; 
      }
    </style>
  </head>

  <body>
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <button class="navbar-brand navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <img src="logounpra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">UNPRA
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Siswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dosen.php">Dosen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mapel.php">Mata Pelajaran</a>
              </li>
            </ul>
          </div>
          <a class="nav-link d-flex" style="padding-left: 10px;" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
        </div>
      </div>
    </nav>
    
    <div class="container">
      <form method="POST" action="proses.php" enctype="multipart/form-data">

        <input type="hidden" value="<?= $id_siswa; ?>" name="id_siswa">

        <div class="mb-3 row">
          <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
          <div class="col-sm-10">
            <input required type="text" name="nisn" class="form-control" id="nisn" placeholder="Ex: 112233" value="<?= $nisn; ?>" />
          </div>
        </div>

        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
          <div class="col-sm-10">
            <input value="<?= $nama_siswa; ?>" required type="text" name="nama_siswa" class="form-control" id="nama" placeholder="Ex: Alexander" />
          </div>
        </div>

        <div class="mb-3 row">
          <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select required name="jenis_kelamin" id="jkel" class="form-select">
              <option <?php if ($jenis_kelamin == 'Laki-laki') {
                        echo "selected";
                      } ?> value="Laki-laki">Laki-laki</option>
              <option <?php if ($jenis_kelamin == 'Perempuan') {
                        echo "selected";
                      } ?> value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
          <div class="col-sm-10">
            <input <?php if (!isset($_GET['ubah'])) {
                      echo "required";
                    } ?> type="file" name="foto" class="form-control" id="foto" accept="image/*" />
          </div>
        </div>

        <div class="mb-3 row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <textarea required name="alamat" class="form-control" id="alamat" rows="3" placeholder="Ex: Jln. Sudirman..."><?= $alamat; ?></textarea>
          </div>
        </div>

        <div class="mb-3 row mt-4">
          <div class="col">

            <?php if (isset($_GET['ubah'])) { ?>
              <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Simpan Perubahan</button>
            <?php
              } else {
            ?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Tambahkan</button>
            <?php } ?>

            <a href="index.php" type="button" class="btn btn-danger"><i class="fa fa-reply" aria-hidden="true"></i> Batal</a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

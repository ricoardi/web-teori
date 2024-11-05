<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- fontawesome -->
    <script src="fontawesome/js/all.js"></script>
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
                                          <a class="nav-link" href="">Guru</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="mapel.php">Mata Pelajaran</a>
                                    </li>
                                    
                        </ul>
                        
                    </div>
                    <a class="nav-link d-flex" style="padding-left: 10px;" href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </nav>

    <div class="container">

    <form method="POST" action="prosesmapel.php">
    <div class="mb-3 row">
      <label for="nama_mapel" class="col-sm-2 col-form-label">Nama Mapel</label>
      <div class="col-sm-10">
        <input type="text" name="nama_mapel" class="form-control" id="nama_mapel" placeholder="Ex: Bahasa Indonesia" />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
      <div class="col-sm-10">
        <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Ex: Buku ini menjelaskan tentang ..." />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="jumlah_jam" class="col-sm-2 col-form-label">Jumlah Jam</label>
      <div class="col-sm-10">
        <input type="text" name="jumlah_jam" class="form-control" id="jumlah_jam" placeholder="Ex: 2" />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
      <div class="col-sm-10">
        <select name="kelas" id="kelas" class="form-select">
        <option selected>Kelas</option>
        <option value="1">Kelas 1</option>
        <option value="2">Kelas 2</option>
        <option value="3">Kelas 3</option>
        <option value="4">Kelas 4</option>
        <option value="5">Kelas 5</option>
        <option value="6">Kelas 6</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="cover_buku" class="col-sm-2 col-form-label">Cover Buku</label>
      <div class="col-sm-10">
        <input type="file" name="cover_buku" class="form-control" id="cover_buku" />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="keterangan" class="col-sm-2 col-formlabel">Keterangan</label>
      <div class="col-sm-10">
        <textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Ex: Buku ini ..."></textarea>
      </div>
    </div>
      <!-- <div class="mb-3 row">
        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nisn" placeholder="Ex: 112233" />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Ex: Alexander" />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select id="jkel" class="form-select">
            <option selected>Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="foto" />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat Siswa</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="alamat" rows="3" placeholder="Ex: Jln. Sudirman..."></textarea>
        </div>
      </div> -->

      <!-- <div class="mb-3 row mt-4">
        <div class="col">
          <button type="button" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Tambahkan</button>
          <a href="index.php" type="button" class="btn btn-danger"><i class="fa fa-reply" aria-hidden="true"></i> Batal</a>
        </div>
      </div> -->
      <div class="mb-3 row mt-4">
        <div class="col">

          <?php if (isset($_GET['ubah'])) { ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Simpan Perubahan</button>
          <?php
            } else {
          ?>
          <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Tambahkan</button>
          <?php } ?>

          <a href="mapel.php" type="button" class="btn btn-danger"><i class="fa fa-reply" aria-hidden="true"></i> Batal</a>
        </div>
      </div>
    </form>
    </div>
  </body>
</html>
